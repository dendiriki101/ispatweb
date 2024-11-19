@extends('admin.tools.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Email</h1>

    <form action="{{ route('email.update', $email->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $email->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $email->email }}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $email->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="no_npwp" class="form-label">No NPWP</label>
            <input type="text" name="no_npwp" class="form-control" value="{{ $email->no_npwp }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="active" {{ $email->status === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $email->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" value="{{ $email->type }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('email.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
