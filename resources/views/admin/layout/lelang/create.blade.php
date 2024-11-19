@extends('admin.tools.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Post Lelang</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/lelang" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus>
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="picture">Unggah Gambar</label>
                <input type="file" class="form-control" id="picture" name="picture">
            </div>

            <div class="form-group">
                <label for="uom">Uom</label>
                <select class="form-control" id="uom" name="uom">
                    <option value="" disabled selected>Pilih uom</option>
                    <option value="Kg">Kg</option>
                    <option value="Drum">Drum</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Lot">Lot</option>
                </select>
            </div>

            <div class="form-group">
                <label for="limbah">Limbah B3</label>
                <select class="form-control" id="limbah" name="limbah">
                    <option value="" disabled selected> limbah</option>
                    <option value="yes">yes</option>
                    <option value="no">no</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="summernote" class="form-label">Content</label>
                <textarea id="summernote" class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
