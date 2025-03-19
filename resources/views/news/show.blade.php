@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                {{ $news->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $news->user->name }}</span>, Created on {{ date('jS M Y', strtotime($news->created_at)) }}
        <br>
        Category: <span class="font-bold">{{ ucfirst($news->category) }}</span>
    </span>

        <div class="mt-10">
            <img src="{{ asset('images/news/' . $news->image_path) }}" alt="{{ $news->title }}" class="w-full rounded-xl">
        </div>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $news->content }}
        </p>

        @if (isset(Auth::user()->id) && Auth::user()->id == $news->user_id)
            <span class="float-right">
            <a href="/news/{{ $news->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                Edit
            </a>
        </span>

            <span class="float-right">
            <form action="/news/{{ $news->slug }}" method="POST">
                @csrf
                @method('delete')
                <button class="text-red-500 pr-3" type="submit">
                    Delete
                </button>
            </form>
        </span>
        @endif
    </div>
@endsection
