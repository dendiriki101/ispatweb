<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
    <h1>New Customer Message</h1>
<br>
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
            <td>Wire Rod Product</td>
            <td>{{ $customer->grade1 }}</td>
        </tr>
        <tr>
            <td>Grade</td>
            <td>{{ $customer->grade2 }}</td>
        </tr>
        <tr>
            <td>Total Quantity in MT</td>
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


</body>
</html>
