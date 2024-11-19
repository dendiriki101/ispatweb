@extends('admin.tools.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/news/{{ $news->link }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ $news->title }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                    value="{{ $news->link }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="summernote" class="form-label">description</label>
                <textarea id="summernote" class="form-control" name="description">{{ $news->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
