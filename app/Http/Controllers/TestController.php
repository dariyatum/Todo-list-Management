<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();

        return view('test', compact('tests'));
    }

    public function show($id)
    {
        $test = Test::findOrFail($id);

        return view('test', compact('test'));
    }

    public function store(Request $request)
    {
        Test::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect()->back()
            ->with('success', 'Added successfully');
    }
}