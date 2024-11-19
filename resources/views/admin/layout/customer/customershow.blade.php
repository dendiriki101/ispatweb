@extends('admin.tools.main')

@section('content')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>

    <h1>Ini Adalah Tes Email dari Program</h1>
    <p>saya mengirimkan email ini melalui program apakah bisa di</p>
    <p>jika email ini bisa di kirim ke pak hary dan mas vicky maka tahap berikutnya adalah mengirimkan data</p>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Option</td>
            <td>{{ $customer->option }}</td>
        </tr>
        <tr>
            <td>About</td>
            <td>{{ $customer->about }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>{{ $customer->company }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td>{{ $customer->telphone }}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{ $customer->massage }}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{ $customer->country }}</td>
        </tr>
        <tr>
            <td>Location</td>
            <td>{{ $customer->location }}</td>
        </tr>
        <tr>
            <td>Issue</td>
            <td>{{ $customer->issue }}</td>
        </tr>
        <tr>
            <td>Grade 1</td>
            <td>{{ $customer->grade1 }}</td>
        </tr>
        <tr>
            <td>Grade 2</td>
            <td>{{ $customer->grade2 }}</td>
        </tr>
        <tr>
            <td>Grade 3</td>
            <td>{{ $customer->grade3 }}</td>
        </tr>
        <tr>
            <td>Size</td>
            <td>{{ $customer->size }}</td>
        </tr>
        <tr>
            <td>End App</td>
            <td>{{ $customer->end }}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{ $customer->created_at }}</td>
        </tr>
    </table>
@endsection
