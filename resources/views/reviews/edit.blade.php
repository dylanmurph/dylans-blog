@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Edit Review
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
        <form action="/reviews/{{ $review->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $review->title }}"
                   class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <select name="equipment_type" class="w-full mt-8 p-3 border border-gray-300 rounded-lg">
                <option value="">Select Equipment Type</option>
                <option value="driver" {{ $review->equipment_type == 'driver' ? 'selected' : '' }}>Drivers</option>
                <option value="iron" {{ $review->equipment_type == 'iron' ? 'selected' : '' }}>Irons</option>
                <option value="putter" {{ $review->equipment_type == 'putter' ? 'selected' : '' }}>Putters</option>
                <option value="wedge" {{ $review->equipment_type == 'wedge' ? 'selected' : '' }}>Wedges</option>
                <option value="hybrid" {{ $review->equipment_type == 'hybrid' ? 'selected' : '' }}>Hybrids</option>
                <option value="fairway" {{ $review->equipment_type == 'fairway' ? 'selected' : '' }}>Fairway Woods</option>
            </select>

            <div class="mt-8">
                <label class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
                <select name="rating" class="w-full p-3 border border-gray-300 rounded-lg">
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ $review->rating == $i ? 'selected' : '' }}>{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                    @endfor
                </select>
            </div>
            <div class="p-6">
                <h2 class="text-2xl mt-6">
                    Review Content:
                </h2>
                <textarea name="content" id="editor-update">{{ $review->content }}</textarea>
            </div>

            <textarea name="pros" class="py-10 bg-transparent block border-b-2 w-full h-40 text-xl outline-none mt-8">{{ $review->pros }}</textarea>

            <textarea name="cons" class="py-10 bg-transparent block border-b-2 w-full h-40 text-xl outline-none mt-8">{{ $review->cons }}</textarea>

            <div class="mt-8">
                <label class="block text-gray-700 text-sm font-bold mb-2">Current Image</label>
                <img src="{{ asset('images/reviews/' . $review->image_path) }}"
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
                Update Review
            </button>
        </form>
    </div>
@endsection
