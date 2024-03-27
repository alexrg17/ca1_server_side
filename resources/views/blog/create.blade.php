@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl text-gray-900 font-bold">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="mb-4 text-gray-900 bg-red-200 rounded-lg py-2 px-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-10">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white shadow-md rounded-lg px-8 py-6">

        @csrf

        <div class="mb-6">
            <label for="title" class="block text-gray-900 text-lg font-bold mb-2">Title</label>
            <input 
                type="text"
                name="title"
                placeholder="Enter your post title"
                class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="description" class="block text-gray-900 text-lg font-bold mb-2">Description</label>
            <textarea 
                name="description"
                placeholder="Enter your post description"
                class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-900 leading-tight resize-none focus:outline-none focus:border-blue-500 h-40"></textarea>
        </div>

        <div class="mb-6">
            <label for="image" class="block text-gray-900 text-lg font-bold mb-2">Image</label>
            <input 
                type="file"
                name="image"
                class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex justify-end">
            <button    
                type="submit"
                class="bg-blue-500 text-white text-lg font-semibold py-2 px-8 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Submit Post
            </button>
        </div>
    </form>
</div>

@endsection
