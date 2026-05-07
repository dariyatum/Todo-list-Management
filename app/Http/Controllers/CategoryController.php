<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = Category::where('user_id', Auth::id())
                            ->withCount('tasks')
                            ->orderBy('name')
                            ->get();
        
        return view('categories.index', compact('categories'));
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50|unique:categories,name,NULL,id,user_id,' . Auth::id(),
            'color' => 'nullable|string|max:7',
            'description' => 'nullable|string',
        ]);

        $category = new Category();
        $category->name = $validated['name'];
        $category->color = $validated['color'] ?? '#667eea';
        $category->description = $validated['description'] ?? null;
        $category->user_id = Auth::id();
        $category->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'category' => $category,
                'message' => 'Category created successfully!'
            ]);
        }

        return redirect()->route('categories.index')
                        ->with('success', 'Category created successfully!');
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->authorizeCategory($category);

        $validated = $request->validate([
            'name' => 'required|string|max:50|unique:categories,name,' . $category->id . ',id,user_id,' . Auth::id(),
            'color' => 'nullable|string|max:7',
            'description' => 'nullable|string',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')
                        ->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        $this->authorizeCategory($category);
        
        // Optionally handle tasks that use this category
        $category->tasks()->update(['category_id' => null]);
        $category->delete();

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Category deleted successfully!'
            ]);
        }

        return redirect()->route('categories.index')
                        ->with('success', 'Category deleted successfully!');
    }

    /**
     * Authorize that the category belongs to the authenticated user.
     */
    private function authorizeCategory(Category $category)
    {
        if ($category->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}