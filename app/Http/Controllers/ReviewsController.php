<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(Request $request)
    {
        $query = Review::orderBy('created_at', 'DESC');

        if ($request->has('type')) {
            $query->where('equipment_type', $request->type);
        }

        $reviews = $query->get();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'equipment_type' => 'required',
            'rating' => 'required|integer|between:1,5',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images/reviews'), $newImageName);

        Review::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'equipment_type' => $request->input('equipment_type'),
            'rating' => $request->input('rating'),
            'pros' => $request->input('pros'),
            'cons' => $request->input('cons'),
            'slug' => SlugService::createSlug(Review::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/reviews')->with('message', 'Review created successfully!');
    }

    public function show($slug)
    {
        return view('reviews.show')
            ->with('review', Review::where('slug', $slug)->first());
    }

    public function edit($slug)
    {
        return view('reviews.edit')
            ->with('review', Review::where('slug', $slug)->first());
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'equipment_type' => 'required',
            'rating' => 'required|integer|between:1,5',
            'image' => 'mimes:jpg,png,jpeg|max:5048'
        ]);

        $review = Review::where('slug', $slug)->first();

        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images/reviews'), $newImageName);
            $review->image_path = $newImageName;
        }

        $review->title = $request->input('title');
        $review->content = $request->input('content');
        $review->equipment_type = $request->input('equipment_type');
        $review->rating = $request->input('rating');
        $review->pros = $request->input('pros');
        $review->cons = $request->input('cons');
        $review->slug = SlugService::createSlug(Review::class, 'slug', $request->title);

        $review->save();

        return redirect('/reviews')->with('message', 'Review updated successfully!');
    }

    public function destroy($slug)
    {
        $review = Review::where('slug', $slug)->first();

        if ($review->image_path) {
            $filePath = public_path('images/reviews/' . $review->image_path);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $review->delete();

        return redirect('/reviews')->with('message', 'Review deleted successfully!');
    }
}
