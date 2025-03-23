@extends('layouts.app')

@section('content')
    <div class="w-full mt-10 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                News Posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-full m-auto mt-10 pl-2">
            <p class="w-full md:w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/news/create"
               class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create article
            </a>
        </div>
    @endif

    @foreach ($news as $article)
        <div class="bg-white rounded-lg shadow-xl p-6 sm:grid grid-cols-2 gap-20 w-full md:w-4/5 mx-auto py-15 mt-6 mb-6">
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/news/' . $article->image_path) }}" alt=""
                     class="max-h-96 rounded-xl shadow-2xl border-2 border-black">
            </div>
            <div class="flex flex-col">
                <h2 class="text-gray-700 font-bold text-4xl pb-4">
                    {{ $article->title }}
                </h2>

                <span class="text-gray-500">
                    By <span class="font-bold italic text-green-700">{{ $article->user->name }}</span>, Created on {{ date('jS M Y', strtotime($article->created_at)) }} <br>
                    {{ $article->category }}
                </span>
                <br>
                <a href="/news/{{ $article->slug }}"
                   class="w-full md:w-56 text-center mt-auto uppercase bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Keep Reading
                </a>

                <div class="mx-auto">
                    @if (isset(Auth::user()->id) && Auth::user()->id == $article->user_id)
                        <span class="float-right">
                            <a href="/news/{{ $article->slug }}/edit"
                               class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                Edit
                            </a>
                        </span>

                        <span class="float-right">
                            <form action="/news/{{ $article->slug }}" method="POST">
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
