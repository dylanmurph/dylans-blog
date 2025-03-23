<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ReviewRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.usersTable', compact('users'));
    }

    public function reviewRequests()
    {
        $reviewRequests = ReviewRequest::all();
        return view('admin.requestsTable', compact('reviewRequests'));
    }
}
