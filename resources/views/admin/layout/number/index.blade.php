@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <h2>Username :{{ $user }} </h2>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/admin/number/create" class="btn btn-primary mb-3"> Create career</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">name</th>
                    <th scope="col">company</th>
                    <th scope="col">number</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($number as $num)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $num->name }}</td>
                        <td>{{ $num->company }}</td>
                        <td>{{ $num->number }}</td>
                        <td>{{ $num->email }}</td>
                        <td>
                            <a href="/admin/number/{{ $num->id }}" class="btn btn-info">view
                                <span></span>
                            </a>
                            <form action="/admin/number/{{ $num->id }}" method="post" class="d-inline">
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
    {{ $number->appends(request()->input())->links() }}
@endsection
