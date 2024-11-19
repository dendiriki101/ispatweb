@extends('admin.tools.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post Certificate</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/certificate" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" required autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="file">Upload File Certificate</label>
                <input type="file" class="form-control-file" @error('file') is-invalid @enderror id="file" name="file">
            </div>
            @error('file')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <select type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                    name="type" required>
                    @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                    <option value="">---</option>
                    <option value="ISO">ISO</option>
                    <option value="JIS">JIS</option>
                    <option value="SNI">SNI</option>
                    <option value="KAN">KAN</option>
                    <option value="SIRIM">SIRIM</option>
                    <option value="ZEROACCIDENT">ZERO ACCIDENT</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

@endsection
