@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto bg-yellow-300">
    <!-- Your existing HTML code -->
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
    <!-- Iterate through each article -->
    <div class="w-4/5 mx-auto py-10 border-b border-gray-200">
        <div class="flex flex-col justify-center">
            <!-- Display article title -->
            <h2 class="text-gray-900 font-bold text-3xl pb-4">
                {{ $article->title }}
            </h2>
            <!-- Display article content -->
            <p class="text-gray-700 leading-7">
                {{ $article->content }}
            </p>
        </div>
    </div>
@endforeach

@endsection
