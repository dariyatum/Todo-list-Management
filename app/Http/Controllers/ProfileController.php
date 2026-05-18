<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();

        return view('profile', compact('profile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'nullable',
            'email'      => 'required|email',
            'country'    => 'required',
            'city'       => 'required',
        ]);

        \App\Models\Profile::create(
            ['id' => 1],
            [
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'phone'      => $request->phone,
                'email'      => $request->email,
                'country'    => $request->country,
                'city'       => $request->city,
            ]
        );

        return redirect()->back()->with('success', 'Profile Saved Successfully');
    }
}