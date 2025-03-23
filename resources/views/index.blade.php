@extends('layouts.app')

@section('content')

    <div class="mt-16">
        <div class="relative w-full h-96 bg-cover bg-center" style="background-image: url('/images/banner.jpg');">
            <div class="banner-image absolute inset-0 flex items-center justify-start ml-24 ">
                <img src="/images/banner.png" alt="Driver's Digest Logo" class="drop-shadow h-2/5 hidden md:block">
            </div>
            <div class="banner-content absolute inset-0 flex justify-end items-center p-8">
                <div class="max-w-md text-center bg-white rounded-lg shadow-2xl border border-gray-400 p-6"
                     style="box-shadow: 0 15px 30px rgba(0, 0, 0, 0.7) !important; border: 2px solid #cbd5e0 !important;">
                    <h2 class="text-xl text-gray-600 mb-4">From Driver to Putter – We’ve Got You Covered</h2>
                    <br>
                    <h2 class="text-xl text-gray-600 mb-4">Discover the Best Golf Clubs for Every Skill Level</h2>
                    <br>
                    <h2 class="text-xl font-bold text-gray-600 mb-4">Elevate Your Golf Performance with our reviews and
                        insights</h2>
                    <a href="/blog"
                       class="inline-block px-6 py-3 mt-6 text-white bg-green-700 rounded-full shadow-md hover:bg-green-500 hover:cursor-pointer transition duration-300">Explore</a>
                </div>
            </div>
        </div>

        <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
            <div
                class="text-center p-6 bg-white rounded-lg shadow-lg border border-gray-200 transform scale-100 hover:scale-105 transition duration-300 max-w-full">
                <h2 class="text-3xl font-semibold mb-4 text-center">Latest Post</h2>
                @if($latestBlogPost)
                    <img src="{{ asset('images/blog/' . $latestBlogPost->image_path) }}"
                         alt="{{ $latestBlogPost->title }}" class="w-full rounded-lg h-64 object-cover mb-4">
                    <p class="text-lg text-black mb-4">{{ $latestBlogPost->title }}</p>
                    <a href="/blog/{{ $latestBlogPost->slug }}"
                       class="inline-block px-4 py-2 mt-6 text-white bg-green-700 rounded-full shadow-md hover:bg-green-500 hover:cursor-pointer transition duration-300">Read
                        More</a>
                @else
                    <p class="text-lg text-gray-700 mb-4">No blog posts available.</p>
                @endif
            </div>

            <div
                class="text-center p-6 bg-white rounded-lg shadow-lg border border-gray-200 transform scale-100 hover:scale-105 transition duration-300 max-w-full">
                <h2 class="text-3xl font-semibold mb-4 text-center">Latest News</h2>
                @if($latestNewsPost)
                    <img src="{{ asset('images/news/' . $latestNewsPost->image_path) }}"
                         alt="{{ $latestNewsPost->title }}" class="w-full rounded-lg h-64 object-cover mb-4">
                    <p class="text-lg text-black mb-4">{{ $latestNewsPost->title }}</p>
                    <a href="/news/{{ $latestNewsPost->slug }}"
                       class="inline-block px-4 py-2 mt-6 text-white bg-green-700 rounded-full shadow-md hover:bg-green-500 hover:cursor-pointer transition duration-300">Read
                        More</a>
                @else
                    <p class="text-lg text-gray-700 mb-4">No news posts available.</p>
                @endif
            </div>
        </section>

        <?php

        $equipment = [
            [
                'image' => '../images/drivers.jpg',
                'alt' => 'Drivers',
                'title' => 'Discover the Best Drivers for Maximum Distance and Accuracy',
                'description' => 'Maximize your distance and control with the best drivers on the market.',
                'href' => '/reviews?type=driver'
            ],
            [
                'image' => '/images/irons.jpg',
                'alt' => 'Irons',
                'title' => 'How to Choose the Best Irons for Precision and Control',
                'description' => 'The ideal irons for control and precision on every shot.',
                'href' => '/reviews?type=iron'
            ],
            [
                'image' => '/images/putters.jpg',
                'alt' => 'Putters',
                'title' => 'The Best Putters for Accuracy and Feel',
                'description' => 'Perfect your putting game with the best putters for accuracy and feel.',
                'href' => '/reviews?type=putter'
            ],
            [
                'image' => '/images/wedges.jpg',
                'alt' => 'Wedges',
                'title' => 'Find the Right Wedges for Short Game Success',
                'description' => 'Discover the best wedges for a short game that delivers results.',
                'href' => '/reviews?type=wedge'
            ],
            [
                'image' => '/images/hybrids.jpg',
                'alt' => 'Hybrids',
                'title' => 'The Best Hybrids for Versatility and Distance',
                'description' => 'Choose the best hybrids for a balance of distance and accuracy.',
                'href' => '/reviews?type=hybrid'
            ],
            [
                'image' => '/images/fairway-woods.jpg',
                'alt' => 'Fairway Woods',
                'title' => 'The Ultimate Guide to Fairway Woods for Maximum Performance',
                'description' => 'Optimize your game with the best fairway woods available.',
                'href' => '/reviews?type=fairway'
            ]
        ];
        ?>
        <div class="max-w-7xl mx-auto bg-white border-2 border-gray-200 rounded-xl shadow-lg p-8">
            <h2 class="text-3xl font-semibold mb-4 text-center">Reviews</h2>
            <section class="p-8">
                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php foreach ($equipment as $item): ?>
                    <div class="relative bg-gray-100 rounded-lg overflow-hidden shadow-md border-2 border-gray-300">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['alt']; ?>"
                             class="w-full h-64 object-cover">
                        <div
                            class="absolute inset-x-0 bottom-0 h-1/2 bg-black bg-opacity-50 flex flex-col justify-center items-center p-4">
                            <p class="text-white text-lg font-semibold text-center mb-4"><?php echo $item['title']; ?></p>
                            <a href="<?php echo $item['href']; ?>"
                               class="px-6 py-2 bg-green-600 text-white rounded-full hover:bg-green-500 transition duration-300">
                                    <?php echo $item['alt']; ?>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
@endsection
