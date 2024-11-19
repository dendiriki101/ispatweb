@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $lelang->title }}</h2>
            <img src="{{ asset($lelang->picture) }}" alt="{{ $lelang->title }}" class="img-fluid mb-3">
            <p class="card-text">{!! $lelang->content !!}</p>
            <p>Status: {{ $lelang->status }}</p>
            <p>Uom: {{ $lelang->uom }}</p>
            <p>Created By: {{ $lelang->created_by }}</p>
            <a href="{{ route('lelang.edit', $lelang) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('lelang.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
