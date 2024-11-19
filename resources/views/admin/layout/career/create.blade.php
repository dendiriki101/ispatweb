@extends('admin.tools.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/careers" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus>

            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">salary</label>
                <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary"
                    name="salary" required autofocus>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" required autofocus>
            </div>
            <div class="mb-3">
                <label for="runninghour" class="form-label">link</label>
                <input type="text" class="form-control @error('runninghour') is-invalid @enderror" id="runninghour"
                    name="runninghour" required autofocus>
            </div>
            <div class="mb-3">
                <label for="tertiaryeducation" class="form-label">tertiaryeducation</label>
                <input type="text" class="form-control @error('tertiaryeducation') is-invalid @enderror"
                    id="tertiaryeducation" name="tertiaryeducation" required autofocus>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" id="status"
                    name="status" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
