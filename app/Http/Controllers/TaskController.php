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
    
    public function show()
    {
        $tasks = Task::all();
        dd($tasks);
        return view('tasks.index'); 
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

    

  
}
