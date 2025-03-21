@extends('layouts.app')

@section('content')
    <div class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-green-100 to-gray-100"></div>
    <div class="relative container mx-auto px-6 py-32">
        <!-- Header Section -->
        <div class="text-center mb-20">
            <h1 class="text-5xl font-bold bg-gradient-to-r from-green-700 to-green-500 bg-clip-text text-transparent mb-7">
                Drivers Digest
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Passionate about helping golfers make informed decisions through honest, data-driven reviews.
            </p>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 items-start">
            <!-- Left Column: Text Content -->
            <div class="space-y-12">
                <!-- Welcome Section -->
                <div class="bg-white p-12 rounded-3xl shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <h2 class="text-3xl font-bold text-green-700 mb-6">
                        Welcome to Drivers Digest
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Founded by a dedicated team of experts, we are on a mission to transform how golfers select
                        their equipment.
                        <br>
                        With over 15 years of combined industry experience and an in‐depth background in Sports
                        Technology, our team unites technical expertise with practical insights to deliver
                        comprehensive, data-driven reviews that empower golfers to make informed decisions.
                    </p>
                </div>

                <!-- Mission Statement -->
                <div class="bg-gradient-to-r from-green-600 to-green-500 p-12 rounded-3xl text-white shadow-xl">
                    <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
                    <p class="text-lg leading-relaxed">
                        To deliver comprehensive, unbiased reviews that combine technical analysis with real-world
                        performance data, helping golfers of all levels make confident equipment decisions.
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center space-x-3 mb-3">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd"
                                      d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Expert Testing</h3>
                        </div>
                        <p class="text-gray-600">Rigorous analysis of each product</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center space-x-3 mb-3">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Real Data</h3>
                        </div>
                        <p class="text-gray-600">Performance metrics you can trust</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center space-x-3 mb-3">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                      clip-rule="evenodd"/>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"/>
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Latest News</h3>
                        </div>
                        <p class="text-gray-600">Industry updates and insights</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center space-x-3 mb-3">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Buying Guides</h3>
                        </div>
                        <p class="text-gray-600">Comprehensive purchase advice</p>
                    </div>
                </div>
            </div>


            <div class="flex flex-col items-center space-y-64">

                <img src="images/about.jpg" alt="Golf Equipment 1"
                     class="w-96 h-96 rounded-full object-cover shadow-lg">

                <img src="images/about-2.png" alt="Golf Equipment 2"
                     class="w-96 h-96 rounded-full object-cover shadow-lg">
            </div>

        </div>
    </div>
@endsection
