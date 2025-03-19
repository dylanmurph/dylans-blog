@extends('layouts.app')

@section('content')
    <div class="mt-32">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200">
                <h2 class="text-2xl font-bold text-center text-gray-700 mb-10">Request a Review</h2>

                @if(session('message'))
                    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                        {{ session('message') }}
                    </div>
                @endif

                @auth
                    <form action="{{ route('review-request.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="product_type" class="block text-sm font-medium text-gray-700">Product Type</label>
                            <select name="product_type" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                                <option value="">Select Type</option>
                                <option value="driver">Driver</option>
                                <option value="iron">Iron</option>
                                <option value="putter">Putter</option>
                                <option value="wedge">Wedge</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="fairway">Fairway</option>
                            </select>
                            @error('product_type')
                            <div class="text-red-500 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="product_brand" class="block text-sm font-medium text-gray-700">Product Brand</label>
                            <input type="text" name="product_brand" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                            @error('product_brand')
                            <div class="text-red-500 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                            <input type="text" name="product_name" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                            @error('product_name')
                            <div class="text-red-500 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="w-full px-6 py-3 bg-green-700 text-white font-semibold rounded-lg hover:bg-green-500 transition duration-300">Submit Review Request</button>
                        </div>
                    </form>
                @else
                    <div class="text-center text-gray-600">
                        <p>Please <a href="{{ route('login') }}" class="text-green-600 hover:underline">login</a> to request a review</p>
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection
