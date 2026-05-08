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
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        Task::create([
            'full_name' => $name,
            'email' => $email,
            'phone'=> $phone,
        ]);
        return redirect()->back()->with('success', 'You have already added a new tenant successfully');
    }

    

  
}
