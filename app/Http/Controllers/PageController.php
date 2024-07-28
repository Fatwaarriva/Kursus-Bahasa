<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function courses()
    {
        return view('courses');
    }

    public function register()
    {
        return view('register');
    }

    public function storeRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'address' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'course' => 'required|string|max:255',
        ]);

        Registration::create($request->all());

        return redirect()->back()->with('success', 'Registration successful!');
    }
}

