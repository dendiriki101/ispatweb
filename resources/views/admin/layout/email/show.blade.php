@extends('admin.tools.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detail Email</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ $email->nama }}</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Email:</strong> {{ $email->email }}</li>
                <li class="list-group-item"><strong>No HP:</strong> {{ $email->no_hp }}</li>
                <li class="list-group-item"><strong>No NPWP:</strong> {{ $email->no_npwp }}</li>
                <li class="list-group-item"><strong>Status:</strong> {{ ucfirst($email->status) }}</li>
                <li class="list-group-item"><strong>Type:</strong> {{ $email->type }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('email.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('email.edit', $email->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
