@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto bg-yellow-300">
    <div class="flex text-gray-900 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Blog Posts
            </h1>
            <form action="{{ route('search') }}" method="GET" class="py-6 px-6">
                <input type="text" name="query" placeholder="Search posts" class="border border-gray-300 rounded-lg py-2 px-4">
                <button type="submit" class="bg-blue-500 text-gray-100 py-2 px-4 rounded-lg ml-2 hover:bg-blue-600">Search</button>
            </form>
        </div>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-10 pb-6 text-center">
        <a href="/blog/create" class="bg-yellow-500 text-gray-100 py-3 px-6 rounded-lg uppercase font-bold hover:bg-yellow-600">Create post</a>
        <!-- @if ($posts->isNotEmpty())
            <a href="{{ route('Createarticleroute', ['id' => $posts->first()->id]) }}" class="bg-yellow-500 text-gray-100 py-3 px-6 rounded-lg uppercase font-bold hover:bg-yellow-600 ml-4">Create article</a>
        @else -->
            <!-- Handle case where there are no posts -->
        <!-- @endif -->
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-10 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="rounded-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-gray-900 font-bold text-3xl pb-4">
                {{ $post->title }}
            </h2>

            <p class="text-gray-700">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </p>

            <p class="text-gray-700 pt-4 pb-6 leading-7">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="bg-blue-500 text-gray-100 py-2 px-4 rounded-lg uppercase font-bold hover:bg-blue-600">Keep Reading</a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <div class="mt-4">
                <a href="{{ route('Createarticleroute', ['id'=>$post]) }}" class="bg-yellow-500 text-gray-100 py-3 px-6 rounded-lg uppercase font-bold hover:bg-yellow-600">Create article</a>
                    <a href="/blog/{{ $post->slug }}/edit" class="bg-yellow-500 text-gray-100 py-2 px-4 rounded-lg uppercase font-bold hover:bg-yellow-600">Edit</a>
                    

                    <form action="/blog/{{ $post->slug }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-500 text-gray-100 py-2 px-4 rounded-lg uppercase font-bold hover:bg-red-600 focus:outline-none">Delete</button>
                    </form>
                </div>
            @endif
        </div>
    </div>    
@endforeach

@endsection
