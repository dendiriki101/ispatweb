@extends('admin.tools.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/grade" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus>

            </div>
            <div class="mb-3">
                <label for="category" class="form-label">category</label>
                <select type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                    name="category" required>
                    @error('category')
                        <div class="invalid-feedback">
                            {{ messages }}
                        </div>
                    @enderror
                    <option value="">---</option>
                    <option value="LOWCARBON">low carbon steel</option>
                    <option value="HIGHCARBON">high carbon steel</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="summernote" class="form-label">description</label>
                <textarea id="summernote" class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
