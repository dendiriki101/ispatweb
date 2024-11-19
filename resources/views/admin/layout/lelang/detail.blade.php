@extends('admin.tools.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Detail Lelang</h1>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h4>Informasi Lelang: {{ $pelelang->lelang->title }}</h4>
        </div>
        <div class="card-body">
            <!-- Detail Barang -->
            <div class="mb-4">
                <h5 class="text-primary">Detail Barang</h5>
                <p><strong>Title:</strong> {{ $pelelang->lelang->title }}</p>
                <p><strong>Description:</strong> {!! $pelelang->lelang->description !!}</p>
                <p><strong>UoM:</strong> {{ $pelelang->lelang->uom }}</p>
                <p><strong>Limbah:</strong> {{ $pelelang->lelang->limbah }}</p>
                <p><strong>Status:</strong> {{ $pelelang->lelang->status }}</p>
            </div>

            <!-- Detail Buyer -->
            <div class="mb-4">
                <h5 class="text-primary">Detail Buyer</h5>
                <p><strong>Nama:</strong> {{ $pelelang->buyer->nama }}</p>
                <p><strong>Email:</strong> {{ $pelelang->buyer->email }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $pelelang->buyer->nomor_telepon }}</p>
                <p><strong>Alamat:</strong> {{ $pelelang->buyer->alamat }}</p>
            </div>

            <!-- Detail Pelelang -->
            <div>
                <h5 class="text-primary">Detail Pelelang</h5>
                <p><strong>No Lelang:</strong> {{ $pelelang->no_lelang }}</p>
                <p><strong>Penawaran:</strong> {{ $pelelang->penawaran }}</p>
                <p><strong>Status:</strong> {{ $pelelang->status }}</p>
                <p><strong>Type:</strong> {{ $pelelang->type }}</p>
            </div>
        </div>

        <div class="card-footer text-center">
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
