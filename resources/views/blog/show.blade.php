@extends('layouts.app')

@section('content')
    <div class="w-4/5 mx-auto">
        <div class="pb-8 mt-24">
            <img src="{{ asset('images/blog/' . $post->image_path) }}"
                 alt="{{ $post->title }}"
                 class="w-full md:w-3/4 mx-auto object-cover rounded-lg shadow-xl">
        </div>

        <div class="py-15">
            <h1 class="text-4xl text-center md:text-5xl font-semibold text-green-700 leading-tight mb-6 border-t border-b">
                {{ $post->title }}
            </h1>
        </div>


        <div class=" mb-8 text-gray-600 text-right">
            <span>By <span class="font-bold text-gray-800 ">{{ $post->user->name }}</span>,
                Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
        </div>

        <div class="bg-white post-content w-full text-xl text-gray-800 pt-8 p-10 rounded-lg shadow-xl leading-relaxed font-light space-y-6">
            {!! $post->description !!}
        </div>
    </div>
@endsection
