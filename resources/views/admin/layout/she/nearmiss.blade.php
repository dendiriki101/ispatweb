@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{ route('update.nearmiss') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Input field untuk Near Miss -->
        <div class="mb-3">
            <label for="near_miss" class="form-label">Near Miss:</label>
            <input type="text" id="near_miss" name="near_miss" class="form-control" value="{{ old('near_miss') }}" required style="width: 150px;">

            <div class="invalid-feedback">Isi Near Miss.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
