<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $latestBlogPost = Post::where('category', '!=', 'news')->latest()->first();
        $latestNewsPost = Post::where('category', 'news')->latest()->first();

        return view('index', compact('latestBlogPost', 'latestNewsPost'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new contact record in the database
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Optionally, you can redirect back with a success message
        return redirect('/contact')->with('status', 'Thank you for your message! We will get back to you shortly.');
    }
}
