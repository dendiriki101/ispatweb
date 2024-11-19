@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/admin/grade/create" class="btn btn-primary mb-3"> Create New Grade</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $grade->name }}</td>
                        <td>
                            <a href="/admin/grade/{{ $grade->name }}" class="btn btn-info">view
                                <span></span>
                            </a>
                            <a href="/admin/grade/{{ $grade->name}}/edit" class="btn btn-warning">edit
                                <span></span>
                            </a>
                            <form action="/admin/grade/{{ $grade->name}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 btn btn-danger" onclick="return confirm('yakin mau hapus')">hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
