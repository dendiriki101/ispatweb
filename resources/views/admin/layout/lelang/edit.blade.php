@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    <form action="{{ route('lelang.update', $lelang) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $lelang->title) }}" required>
        </div>

        
        <div class="mb-3">
                <label for="summernote" class="form-label">Content</label>
                <textarea id="summernote" class="form-control" name="content">{{ old('content', $lelang->content) }}</textarea>
            </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="picture" name="picture">
            <img src="{{ asset($lelang->picture) }}" alt="{{ $lelang->title }}" class="img-thumbnail mt-2" style="width: 100px;">
        </div>

   
        <div class="form-group">
                <label for="uom">Uom</label>
                <select class="form-control" id="uom" name="uom">
                    <option value="{{ $lelang->uom }}">{{ old('uom', $lelang->uom) }}</option>
                    <option value="Kg">Kg</option>
                    <option value="Drum">Drum</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Lot">Lot</option>
                </select>
            </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('lelang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
