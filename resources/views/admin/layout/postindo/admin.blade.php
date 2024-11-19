@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <h2>Username :{{$user}} </h2>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/admin/posts/create" class="btn btn-primary mb-3"> Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration + ($posts->currentPage() - 1) * $posts->perPage() }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->slug}}</td>
                        <td>
                            <a href="/admin/posts/{{ $post->slug }}" class="btn btn-info">view
                                <span></span>
                            </a>
                            <a href="/admin/posts/{{ $post->slug}}/edit" class="btn btn-warning">edit
                                <span></span>
                            </a>
                            <form action="/admin/posts/{{ $post->slug}}" method="post" class="d-inline">
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
    {{ $posts->appends(request()->input())->links() }}
@endsection
