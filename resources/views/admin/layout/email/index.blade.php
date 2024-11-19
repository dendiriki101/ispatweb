@extends('admin.tools.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Daftar Email</h1>
    <a href="{{ route('email.create') }}" class="btn btn-primary mb-3">Tambah Email</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>No NPWP</th>
                <th>Status</th>
                <th>Type</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emails as $email)
                <tr>
                    <td>{{ $email->id }}</td>
                    <td>{{ $email->nama }}</td>
                    <td>{{ $email->email }}</td>
                    <td>{{ $email->no_hp }}</td>
                    <td>{{ $email->no_npwp }}</td>
                    <td>{{ ucfirst($email->status) }}</td>
                    <td>{{ $email->type }}</td>
                    <td>
                        <a href="{{ route('email.show', $email->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('email.edit', $email->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('email.destroy', $email->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $emails->links() }}
</div>
@endsection
