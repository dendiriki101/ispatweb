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

    <div class="table-responsive col-lg-12">
        <a href="/admin/news/create" class="btn btn-primary mb-3"> Create New Vidio</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($new as $news)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->link }}</td>
                        <td>
                            <a href="/admin/news/{{ $news->link }}" class="btn btn-info">view
                                <span></span>
                            </a>
                            <a href="/admin/news/{{ $news->link }}/edit" class="btn btn-warning">edit
                                <span></span>
                            </a>
                            <form action="/admin/news/{{ $news->link }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 btn btn-danger"
                                    onclick="return confirm('yakin mau hapus')">hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{ $new->appends(request()->input())->links() }}
@endsection
