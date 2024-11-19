@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{ route('update.medicaltreatment') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Input field untuk Medical Treatment Cases -->
        <div class="mb-3">
            <label for="medicaltreatment" class="form-label">Medical Treatment Cases:</label>
            <input type="text" id="medicaltreatment" name="medicaltreatment" class="form-control" value="{{ old('medicaltreatment') }}" required style="width: 150px;">

            <div class="invalid-feedback">Isi Medical Treatment Cases.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
