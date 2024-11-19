@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{ route('update.fatalitycases') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Input field untuk Fatality Cases -->
        <div class="mb-3">
            <label for="fatalitycases" class="form-label">Fatality Cases:</label>
            <input type="text" id="fatalitycases" name="fatalitycases" class="form-control" value="{{ old('fatalitycases') }}" required style="width: 150px;">

            <div class="invalid-feedback">Isi Fatality Cases.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
