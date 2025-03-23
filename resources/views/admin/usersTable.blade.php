@extends('layouts.app')

@section('content')
    <div class="w-full mt-10 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Users Table
            </h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-6 px-0 md:px-8">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 border-collapse">
                <thead class="bg-green-700 text-white">
                <tr>
                    <th class="py-2 px-4 border border-gray-300">ID</th>
                    <th class="py-2 px-4 border border-gray-300">Name</th>
                    <th class="py-2 px-4 border border-gray-300">Email</th>
                    <th class="py-2 px-4 border border-gray-300">Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border border-gray-300">{{ $user->id }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $user->name }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $user->email }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $user->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
