<?php

namespace App\Http\Controllers;

use App\Models\ReviewRequest;
use Illuminate\Http\Request;

class ReviewRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('review-request');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_type' => 'required',
            'product_brand' => 'required',
            'product_name' => 'required',
        ]);

        ReviewRequest::create([
            'user_id' => auth()->id(),
            'email' => auth()->user()->email,
            'product_type' => $request->product_type,
            'product_brand' => $request->product_brand,
            'product_name' => $request->product_name,
            'request_date' => now(),
        ]);

        return redirect()->back()->with('message', 'Review request submitted successfully.');
    }
}
