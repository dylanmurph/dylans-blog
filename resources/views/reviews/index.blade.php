@extends('layouts.app')

@section('content')
    <div class="w-4/5 mt-10 m-auto text-center">
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
            <a href="/reviews/create"
               class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Write Review
            </a>
        </div>
    @endif

    @foreach ($reviews as $review)
        <div class="bg-white rounded-lg shadow-xl p-6 sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 mt-6 mb-6">
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/reviews/' . $review->image_path) }}" alt=""
                     class="max-h-96 rounded-xl shadow-2xl border-2 border-black">
            </div>
            <div class="flex flex-col">
                <h2 class="text-gray-700 font-bold text-4xl pb-4">
                    {{ $review->title }}
                </h2>

                <div class="flex items-center gap-2 pb-4">
                    <span class="text-yellow-500 text-2xl">★</span>
                    <span class="text-gray-700">{{ $review->rating }}/5</span>
                </div>

                <span class="text-gray-500">
                    By <span class="font-bold italic text-green-700">{{ $review->user->name }}</span>, Created on {{ date('jS M Y', strtotime($review->created_at)) }}
                    <br>
                    Equipment Type: <span class="font-bold">{{ ucfirst($review->equipment_type) }}</span>
                </span>
                <br>
                <a href="/reviews/{{ $review->slug }}"
                   class="w-56 text-center mt-auto uppercase bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Read Full Review
                </a>

                <div class="mx-auto">
                    @if (isset(Auth::user()->id) && Auth::user()->id == $review->user_id)
                        <span class="float-right">
                            <a href="/reviews/{{ $review->slug }}/edit"
                               class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                Edit
                            </a>
                        </span>

                        <span class="float-right">
                            <form action="/reviews/{{ $review->slug }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="text-red-500 pr-3" type="submit">
                                    Delete
                                </button>
                            </form>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endsection
