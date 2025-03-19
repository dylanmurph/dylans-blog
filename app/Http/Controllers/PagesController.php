<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $latestBlogPost = Post::latest()->first();
        $latestNewsPost = News::latest()->first();

        return view('index', compact('latestBlogPost', 'latestNewsPost'));
    }
}
