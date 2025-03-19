@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                {{ $review->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <div class="flex items-center gap-4 mb-6">
            <div class="flex items-center">
                <span class="text-yellow-500 text-3xl">★</span>
                <span class="text-gray-700 text-2xl ml-2">{{ $review->rating }}/5</span>
            </div>
            <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $review->user->name }}</span>, Created on {{ date('jS M Y', strtotime($review->created_at)) }}
            <br>
            Equipment Type: <span class="font-bold">{{ ucfirst($review->equipment_type) }}</span>
        </span>
        </div>

        <div class="mt-10">
            <img src="{{ asset('images/reviews/' . $review->image_path) }}" alt="{{ $review->title }}" class="w-full rounded-xl">
        </div>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $review->content }}
        </p>

        <div class="grid grid-cols-2 gap-8 mt-8">
            @if($review->pros)
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-green-700 mb-4">Pros</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        @foreach(explode("\n", $review->pros) as $pro)
                            @if(trim($pro))
                                <li>{{ trim($pro) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($review->cons)
                <div class="bg-red-50 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-red-700 mb-4">Cons</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        @foreach(explode("\n", $review->cons) as $con)
                            @if(trim($con))
                                <li>{{ trim($con) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        @if (isset(Auth::user()->id) && Auth::user()->id == $review->user_id)
            <div class="mt-8">
            <span class="float-right">
                <a href="/reviews/{{ $review->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
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
            </div>
        @endif
    </div>
@endsection
