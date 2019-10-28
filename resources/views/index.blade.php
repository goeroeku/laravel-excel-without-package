<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Excel - Without Excel Package</title>
    <style>
        table, th, td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
        th, td{
            padding: 10px;
        }
    </style>
</head>
<body>
<a href="{{route('driver.export')}}">Export</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    @foreach($data as $row)
    <tr>
        <td>{{$row['id']}}</td>
        <td>{{$row['name']}}</td>
        <td>{{$row['address']}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
