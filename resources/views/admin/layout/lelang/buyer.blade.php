@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Buyer</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Penawaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelelang as $key => $lelang)
                <tr>
                    <td>{{ $pelelang->firstItem() + $key }}</td>
                    <td>{{ $lelang->lelang->title }}</td>
                    <td>{{ $lelang->buyer->nama }}</td>
                    <td>{{ $lelang->buyer->nomor_telepon }}</td>
                    <td>{{ $lelang->buyer->email }}</td>
                    <td>{{ $lelang->penawaran }}</td>
                    <td>
                        <a href="/admin/buyer/{{ $lelang->id }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pelelang->links() }} <!-- Pagination -->
</div>
@endsection
