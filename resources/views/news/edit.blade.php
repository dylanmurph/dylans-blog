@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Edit News Article
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 m-auto pt-20">
        <form action="/news/{{ $news->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $news->title }}"
                   class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <div class="p-6">
                <h2 class="text-2xl mt-6">
                    News Content:
                </h2>
                <textarea name="content" id="editor-update">{{ $news->content }}</textarea>
            </div>

            <div class="mt-8">
                <label class="block text-gray-700 text-sm font-bold mb-2">Current Image</label>
                <img src="{{ asset('images/news/' . $news->image_path) }}"
                     alt="Current Image"
                     class="w-64 h-64 object-cover rounded-lg">
            </div>

            <div class="bg-grey-lighter pt-8">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">Select New Image</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button type="submit" class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Update Article
            </button>
        </form>
    </div>
@endsection
