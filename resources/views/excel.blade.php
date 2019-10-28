<?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=".$filename);
?>
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
<h4>Data Driver</h4>
<table style="margin-top:50px">
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
