@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto bg-yellow-300">
        <div class="flex text-gray-900 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-4xl text-3xl font-bold text-shadow-lg pb-8">
                    Welcome to the Timepiece Chronicles Blog
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-yellow-600 text-gray-100 py-2 px-4 font-semibold text-lg uppercase shadow-md hover:bg-yellow-500 hover:text-gray-900 transition duration-300 rounded-full">
                    Explore More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-2xl font-bold text-gray-900">
                Discover the World of Timepieces
            </h2>
            
            <p class="py-6 text-gray-700 text-base">
                Dive into the intricate details, craftsmanship, and stories behind your favorite timepieces.
            </p>

            <p class="font-semibold text-gray-900 text-base pb-8">
                Explore different styles, brands, and technologies shaping the watch industry today.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-yellow-600 text-gray-100 text-base font-semibold py-3 px-8 rounded-full shadow-md hover:bg-yellow-500 hover:text-gray-900 transition duration-300">
                Read More
            </a>
        </div>
    </div>

    <div class="text-center p-10 bg-yellow-300 text-gray-900">
        <h2 class="text-xl font-semibold pb-5"> 
            Topics We Cover
        </h2>

        <div class="grid grid-cols-2 gap-4">
            <span class="text-lg font-semibold py-2">
                Watch Design
            </span>
            <span class="text-lg font-semibold py-2">
                Watchmaking Techniques
            </span>
            <span class="text-lg font-semibold py-2">
                Luxury Watch Brands
            </span>
            <span class="text-lg font-semibold py-2">
                Watch Collecting Tips
            </span>
        </div>
    </div>

    <div class="text-center py-16">
        <span class="uppercase text-sm text-gray-500">
            Blog
        </span>

        <h2 class="text-3xl font-bold pt-8 pb-6 text-gray-900">
            Recent Posts
        </h2>

        <p class="mx-auto w-3/4 text-gray-700">
            Stay updated with the latest trends, reviews, and insights from the world of watches.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto pb-16">
        <div class="flex bg-yellow-600 text-gray-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs font-semibold">
                    Watch Technology
                </span>

                <h3 class="text-lg font-bold py-6">
                    Explore the innovative technologies revolutionizing the way we perceive and use watches.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-yellow-100 text-gray-900 text-xs font-semibold py-3 px-6 rounded-full shadow-md hover:bg-yellow-200 hover:text-gray-900 transition duration-300">
                    Dive In
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection
