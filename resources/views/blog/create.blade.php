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

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data"
        class="bg-gray-100 shadow-md rounded-lg px-8 py-6">

        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-4xl text-gray-900 mb-8 outline-none focus:border-blue-500">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-10 bg-transparent block border-b-2 w-full h-60 text-lg text-gray-900 mb-8 outline-none focus:border-blue-500"></textarea>

        <div class="bg-gray-200 py-4 px-6 mb-8 rounded-lg">
            <label for="image" class="block text-gray-700 text-lg font-bold mb-2">Upload Image</label>
            <input 
                type="file"
                name="image"
                class="bg-gray-300 py-2 px-4 w-full rounded-lg focus:outline-none focus:bg-gray-400">
        </div>

        <button    
            type="submit"
            class="uppercase bg-blue-500 text-gray-100 text-lg font-semibold py-4 px-8 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Submit Post
        </button>
    </form>
</div>

@endsection
