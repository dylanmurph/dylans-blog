@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->role === 'admin')
        <div class="w-full mt-10 m-auto text-center">
            <div class="py-15 border-b border-gray-200">
                <h1 class="text-6xl">
                    Admin Dashboard
                </h1>
            </div>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 py-6 px-0 md:px-8">
            <div class="text-center p-6 bg-white rounded-lg shadow-lg border border-gray-200 transform scale-100 hover:scale-105 transition duration-300 max-w-full">
                <h2 class="text-3xl font-semibold mb-4 text-center">Users Table</h2>
                <a href="/admin/users"
                   class="inline-block px-4 py-2 mt-6 text-white bg-green-700 rounded-full shadow-md hover:bg-green-500 hover:cursor-pointer transition duration-300">
                    View Users
                </a>
            </div>

            <div class="text-center p-6 bg-white rounded-lg shadow-lg border border-gray-200 transform scale-100 hover:scale-105 transition duration-300 max-w-full">
                <h2 class="text-3xl font-semibold mb-4 text-center">Review Requests Table</h2>
                <a href="/admin/review-requests"
                   class="inline-block px-4 py-2 mt-6 text-white bg-green-700 rounded-full shadow-md hover:bg-green-500 hover:cursor-pointer transition duration-300">
                    View Review Requests
                </a>
            </div>
        </div>
    @else
        <script>window.location.href = "{{ url('/') }}";</script>
    @endif
@endsection
