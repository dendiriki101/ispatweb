@extends('admin.tools.main')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Option</th>
                    <th scope="col">About</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telphone</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->option }}</td>
                        <td>{{ $customer->About }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->company }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->telphone }}</td>
                        <td>
                            <a href="/admin/customer/{{ $customer->id }}" class="btn btn-info">Detail
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
