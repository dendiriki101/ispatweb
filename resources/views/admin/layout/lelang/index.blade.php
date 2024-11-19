@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/admin/lelang/create" class="btn btn-primary mb-3">Tambah Lelang</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lelangs as $key => $lelang)
                <tr>
                    <td>{{ $lelangs->firstItem() + $key }}</td>
                    <td>{{ $lelang->title }}</td>
                    <td><img src="{{ asset($lelang->picture) }}" alt="{{ $lelang->title }}" class="img-thumbnail" style="width: 100px;"></td>
                    <td>{{ $lelang->status }}</td>
                    <td>
                        <a href="/admin/lelang/{{ $lelang->id }}" class="btn btn-info">Lihat</a>
                        <a href="/admin/lelang/{{ $lelang->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/lelang/{{ $lelang->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $lelangs->links() }} <!-- Pagination -->
</div>
@endsection
