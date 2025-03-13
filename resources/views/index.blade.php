@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white-700 text-5xl uppercase font-extrabold pb-14"
                    style="-webkit-text-stroke: 2px black; color: white;">
                    Want to build the perfect Golf Bag?
                </h1>

                <h2 class="sm:text-white-700 text-3xl font-extrabold"
                    style="-webkit-text-stroke: 1px black; color: white">
                    Golf club reviews and comparisons
                </h2>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to find the right golf clubs for you?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                We do all the heavy lifting for you. From budget-friendly options to premium high-performance clubs,
                we've got you covered.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                We review and compare the leading brands of golf clubs to help you build the perfect golf bag tailored
                to your needs.
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            Our Latest Golf Club Reviews
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            From Driver to Putter – We’ve Got You Covered
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Discover the Best Golf Clubs for Every Skill Level
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Unlock the Secrets of Your Game
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Elevate Your Golf Performance with Top Equipment
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Our golf experts are constantly reviewing the latest clubs, comparing their features, pros, and cons, and
            providing in-depth guides to help you choose the best clubs for your game.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    DRIVER REVIEWS
                </span>

                <h3 class="text-xl font-bold py-10">
                    Discover the Best Drivers for Maximum Distance and Accuracy
                </h3>

                <p class="text-gray-100 py-4">
                    Learn about the top-rated drivers on the market, comparing their performance, forgiveness, and
                    design. We dive deep into the technology that helps you hit longer, straighter drives.
                </p>
                <div class="pt-4">
                    <a href="/blog/drivers"
                       class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
        </div>

        <div>
            <img src="/images/index-drivers.jpg" alt="Drivers">
        </div>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto py-15">
        <div class="flex bg-green-600 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    IRON COMPARISONS
                </span>

                <h3 class="text-xl font-bold py-10">
                    How to Choose the Best Irons for Precision and Control
                </h3>

                <p class="text-gray-100 py-4">
                    Whether you're a beginner or an experienced golfer, choosing the right irons can make all the
                    difference in your game. We compare the top irons and guide you to the best choice for your swing.
                </p>

                <div class="pt-4">
                    <a href="/blog/irons"
                       class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
        </div>

        <div>
            <img src="/images/index-irons.jpg" alt="Irons">
        </div>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto py-15">
        <div class="flex bg-blue-800 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PUTTER REVIEWS
                </span>

                <h3 class="text-xl font-bold py-10">
                    The Best Putters for Accuracy and Feel
                </h3>

                <p class="text-gray-100 py-4">
                    A great putter can improve your short game and lower your score. We review the best putters,
                    comparing feel, alignment, and accuracy to help you make the right choice.
                </p>
                <div class="pt-4">
                    <a href="/blog/putters"
                       class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
        </div>

        <div>
            <img src="/images/index-putters.jpg" alt="Putters">
        </div>
    </div>

@endsection
