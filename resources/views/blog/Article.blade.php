
    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endsection
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
        </div>
        <input type="hidden" name="post_id" value="{{ session('globalvariable') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
