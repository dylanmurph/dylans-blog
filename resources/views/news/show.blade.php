@extends('layouts.app')

@section('content')
    <div class="w-4/5 mx-auto">
        <div class="pb-8 mt-24">
            <img src="{{ asset('images/news/' . $news->image_path) }}"
                 alt="{{ $news->title }}"
                 class="w-full md:w-3/4 mx-auto object-cover rounded-lg shadow-xl">
        </div>

        <div class="py-15">
            <h1 class="text-4xl text-center md:text-5xl font-semibold text-green-700 leading-tight mb-6 border-t border-b">
                {{ $news->title }}
            </h1>
        </div>


        <div class="mb-8 text-gray-600 text-right">
            <span>By <span class="font-bold text-gray-800 ">{{ $news->user->name }}</span>,
                Created on {{ date('jS M Y', strtotime($news->updated_at)) }}</span>
            <br>
            Category: <span class="font-bold">{{ ucfirst($news->category) }}</span>
        </div>

        <div class="bg-white post-content w-full text-xl text-gray-800 pt-8 p-10 rounded-lg shadow-xl leading-relaxed font-light space-y-6">
            {!! $news->content !!}
        </div>
    </div>
@endsection
