<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming the User model exists

class userController extends Controller
{
    public function addUser(Request $req)
    {
        // Validate input data
        $formfields = $req->validate([
            'username' => ['required','min:3', 'max:30'],
            'email' => ['required', 'max:25'],
            'phone' => ['required'],
            'password' => ['required'],
            'role' => ['required']
        ]);

        // Create a new user
        User::create($formfields);

        // Redirect back to the frontend or any desired route
        return redirect()->back()->with('message', 'data is added successfully...');
    }
}


