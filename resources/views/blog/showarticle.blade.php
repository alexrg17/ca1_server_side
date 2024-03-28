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
    </div>
@endif

@foreach ($articles as $article)
    <div class="w-4/5 mx-auto my-8 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-gray-900 font-bold text-3xl pb-4">
            {{ $article->title }}
        </h2>
        <p class="text-gray-700 leading-7">
            {{ $article->content }}
        </p>
    </div>
@endforeach

@endsection
