<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All locations</title>
    @include("static")
</head>
<body class="container-fluid">

    @include("dashboard.navbar")
    <h2>All locations</h2>
<table class="table table-hover table-bordered mt-3">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>latitude</th>
        <th>longitude</th>
        <th>modify</th>
    </tr>

    @foreach ($location as $loc)
    <tr>
        <td>{{$loc->location_id}}</td>
        <td>{{$loc->name}}</td>
        <td>{{$loc->latitude}}</td>
        <td>{{$loc->longitude}}</td>
        <td><a class="btn btn-warning" href="{{url("/")}}/dashboard/location/{{$loc->location_id}}">Modify</td>

    </tr>
    @endforeach

</table>
</body>
</html>
