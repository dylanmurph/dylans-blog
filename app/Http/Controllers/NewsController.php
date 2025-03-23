<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images/news'), $newImageName);

        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'slug' => SlugService::createSlug(News::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/news')->with('message', 'News article created successfully!');
    }

    public function show($slug)
    {
        return view('news.show')
            ->with('news', News::where('slug', $slug)->first());
    }

    public function edit($slug)
    {
        return view('news.edit')
            ->with('news', News::where('slug', $slug)->first());
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:5048'
        ]);

        $news = News::where('slug', $slug)->first();

        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images/news'), $newImageName);
            $news->image_path = $newImageName;
        }

        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->slug = SlugService::createSlug(News::class, 'slug', $request->title);

        $news->save();

        return redirect('/news')->with('message', 'News article updated successfully!');
    }

    public function destroy($slug)
    {
        $news = News::where('slug', $slug)->first();

        if ($news->image_path) {
            $filePath = public_path('images/news/' . $news->image_path);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $news->delete();

        return redirect('/news')->with('message', 'News article deleted successfully!');
    }
}
