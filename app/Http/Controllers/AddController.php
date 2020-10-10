<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {
        return view('add');
    }

    public function adding(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:255',
        ]);
        
        return redirect()->route('added');
    }

    public function added()
    {
        return view('added');
    }
}
