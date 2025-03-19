@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Equipment Reviews
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/reviews/create" class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Write Review
            </a>
        </div>
    @endif

    @foreach ($reviews as $review)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="{{ asset('images/reviews/' . $review->image_path) }}" alt="" class="rounded-xl shadow-2xl border-2 border-black">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $review->title }}
                </h2>

                <div class="flex items-center gap-2 pb-4">
                    <span class="text-yellow-500 text-2xl">★</span>
                    <span class="text-gray-700">{{ $review->rating }}/5</span>
                </div>

                <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $review->user->name }}</span>
                <br>
                {{ date('jS M Y', strtotime($review->created_at)) }}
            </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ Str::limit($review->content, 200) }}
                </p>

                <a href="/reviews/{{ $review->slug }}" class="uppercase bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Read Full Review
                </a>
            </div>
        </div>
    @endforeach
@endsection
