@extends('layouts.app')

@section('content')
    <div class="w-full mt-10 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Review Requests Table
            </h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-6 px-0 md:px-8">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 border-collapse">
                <thead class="bg-green-700 text-white">
                <tr>
                    <th class="py-2 px-4 border border-gray-300">Request ID</th>
                    <th class="py-2 px-4 border border-gray-300">User ID</th>
                    <th class="py-2 px-4 border border-gray-300">Email</th>
                    <th class="py-2 px-4 border border-gray-300">Product Type</th>
                    <th class="py-2 px-4 border border-gray-300">Product Brand</th>
                    <th class="py-2 px-4 border border-gray-300">Product Name</th>
                    <th class="py-2 px-4 border border-gray-300">Requested At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviewRequests as $request)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border border-gray-300">{{ $request->id }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $request->user_id }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $request->email }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $request->product_type }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $request->product_brand }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $request->product_name }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $request->request_date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
