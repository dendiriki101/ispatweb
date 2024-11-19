@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{ route('update.firstaidcases') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Input field untuk Near Miss -->
        <div class="mb-3">
            <label for="firstaid" class="form-label">First AID Cases:</label>
            <input type="text" id="firstaid" name="firstaid" class="form-control" value="{{ old('firstaid') }}" required style="width: 150px;">

            <div class="invalid-feedback">Isi First AID Casess.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
