<?php

namespace App\Http\Controllers;

use App\Models\tests;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(){
     
        return view ('test.index');
    
   }

public function store(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');

         \App\Models\tests::create([
            'name' => $name,
            'phone' => $phone,
            
        ]);

            return redirect()->back()->with('sucess', 'Test added!');
    }
      
}
        
       

    