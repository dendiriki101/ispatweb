@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{ route('update.lostworkdays') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Input field untuk Lost Workdays -->
        <div class="mb-3">
            <label for="lostworkdays" class="form-label">Lost Workdays:</label>
            <input type="text" id="lostworkdays" name="lostworkdays" class="form-control" value="{{ old('lostworkdays') }}" required style="width: 150px;">

            <div class="invalid-feedback">Isi Lost Workdays.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
