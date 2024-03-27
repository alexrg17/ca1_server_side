@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto bg-gray-900">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to the Watchful Eye Blog
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-yellow-500 text-gray-900 py-2 px-4 font-bold text-xl uppercase hover:bg-yellow-600 hover:text-gray-100 transition duration-300">
                    Explore More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-700">
                Discover the World of Watches
            </h2>
            
            <p class="py-8 text-gray-600 text-s">
                Dive into the intricate details, craftsmanship, and stories behind your favorite timepieces.
            </p>

            <p class="font-extrabold text-gray-700 text-s pb-9">
                Explore different styles, brands, and technologies shaping the watch industry today.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-green-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-green-600 hover:text-gray-100 transition duration-300">
                Read More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-gray-800 text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Topics We Cover
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Watch Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Watchmaking Techniques
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Luxury Watch Brands
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Watch Collecting Tips
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-600">
            Stay updated with the latest trends, reviews, and insights from the world of watches.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-500 text-gray-900 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Watch Technology
                </span>

                <h3 class="text-xl font-bold py-10">
                    Explore the innovative technologies revolutionizing the way we perceive and use watches.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl hover:bg-gray-700 hover:border-gray-200 transition duration-300">
                    Dive In
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection
