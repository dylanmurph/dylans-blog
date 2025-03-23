@extends('layouts.app')

@section('content')
    <div class="w-4/5 mx-auto">
        <div class="pb-8 mt-24">
            <img src="{{ asset('images/reviews/' . $review->image_path) }}" alt="{{ $review->title }}" class="w-full md:w-3/4 mx-auto object-cover rounded-lg shadow-xl">
        </div>

        <div class="py-15">
            <h1 class="text-4xl text-center md:text-5xl font-semibold text-green-700 leading-tight mb-6 border-t border-b">
                {{ $review->title }}
            </h1>
        </div>

        <div class="mb-8 text-gray-600 text-right">
            <span>By <span class="font-bold text-gray-800">{{ $review->user->name }}</span>, Created on {{ date('jS M Y', strtotime($review->created_at)) }}</span>
            <br>
            Equipment Type: <span class="font-bold">{{ ucfirst($review->equipment_type) }}</span>
        </div>

        <div class="bg-white post-content w-full text-xl text-gray-800 pt-8 p-10 rounded-lg shadow-xl leading-relaxed font-light space-y-6">
            {!! $review->content !!}
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
        </div>

        <div class="grid grid-cols-2 gap-8 mt-8">


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
