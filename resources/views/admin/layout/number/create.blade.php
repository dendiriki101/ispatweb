@extends('admin.tools.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Number</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/number" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">company</label>
                <select company="text" class="form-control @error('company') is-invalid @enderror" id="company"
                    name="company" required>
                    <option value="">---</option>
                    <option value="INDO">INDO</option>
                    <option value="IBB">IBB</option>
                    <option value="IWP">IWP</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">number</label>
                <input type="text" class="form-control @error('number') is-invalid @enderror" id="number"
                    name="number" autofocus>
                     @error('number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" autofocus>
                     @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
