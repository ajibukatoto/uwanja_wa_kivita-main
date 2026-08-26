<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate input
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Optional: Send email or store in database
        // For now, we just simulate success

        // Redirect to homepage with success message
        return redirect()->route('home')->with('success', 'Your message was sent successfully!');
    }
}
