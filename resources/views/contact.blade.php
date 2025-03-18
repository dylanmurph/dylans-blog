@extends('layouts.app')

@section('content')

    <!-- Contact Page Banner -->
    <div class="relative w-full h-80 bg-cover bg-center" style="background-image: url('/images/contact-banner.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <h1 class="text-4xl text-white font-semibold">Contact Us</h1>
        </div>
    </div>

    <!-- Contact Form Section -->
    <section class="p-8">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-200">
            <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">We'd Love to Hear From You</h2>

            <!-- Contact Form -->
            <form action="/contact/submit" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="w-full px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition duration-300">Send Message</button>
                </div>
            </form>
        </div>
    </section>

@endsection
