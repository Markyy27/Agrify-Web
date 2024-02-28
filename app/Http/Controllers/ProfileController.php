<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function show()
    {
        // Get the logged-in user
        $user = Auth::user();

        // Check if the user is logged in
        if ($user) {
            // If logged in, return the profile view with user data
            return view('profile', ['user' => $user]);
        } else {
            // If not logged in, redirect to the login page or handle as needed
            return redirect()->route('login');
        }
    }
}