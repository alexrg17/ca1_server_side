<div class="w-4/5 m-auto bg-yellow-300 rounded-lg shadow-md p-8">
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-lg font-bold mb-2">Title</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="mb-8">
            <label for="content" class="block text-gray-700 text-lg font-bold mb-2">Content</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
        </div>
        <input type="hidden" name="post_id" value="{{ session('GBvariable') }}">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">Submit</button>
    </form>
</div>
