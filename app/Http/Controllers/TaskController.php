<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index(){
    $tasks = Task::paginate(5);

        return view('tasks.index',compact('tasks'));

    }
    
public function show($id)
{
    $task = Task::findOrFail($id);

    return view('tasks.show', compact('task'));
}
        public function store(Request $request){
        $title = $request->input('title');
        $description = $request->input('description');
        $due_date = $request->input('due_date');
        $status = $request->input('status');
        $priority = $request->input('priority');


        Task::create([
            'title' => $title,
            'description' => $description,
            'due_date'=> $due_date,
            'status'=> $status,
            'priority'=> $priority,


        ]);
        return redirect()->back()->with('success', 'You have already added a new tenant successfully');
    }

    public function edit($id) {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id){
        $task = Task::findOrFail($id);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status,
            'priority' => $request->priority,
        ]);

        return redirect()->route('tasks')
        ->with('success', 'Task updated successfully');
    }
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect()->route('tasks')
            ->with('success', 'Task deleted successfully');
    }
  
}