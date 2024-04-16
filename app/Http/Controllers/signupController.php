<?php

namespace App\Http\Controllers;

use App\Models\signupModel;
use Illuminate\Http\Request;

class signupController extends Controller
{
    public function addHuman(Request $req)
    {
        // Validate the incoming request data
        $formfields = $req->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'identity' => ['required'],
            'email' => ['required', 'max:30'],
            'passcode' => ['required'],
            'phone' => ['required', 'max:11'],
            'nationality' => ['required', 'max:25'],
        ]);

        // Create a new user using the validated data
        signupModel::create($formfields);

        // Redirect back to the frontend or any desired route
        return redirect()->back()->with('message', 'Data added successfully.');
    }
}
