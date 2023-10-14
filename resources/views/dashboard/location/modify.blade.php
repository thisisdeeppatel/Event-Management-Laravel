<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Location</title>
    @include("static")
</head>
<body>


    @include("dashboard.navbar")


    <div class="container mt-5">
        <h2>Add Location</h2>
        <form action="/dashboard/location/update/{{$location->location_id}}" method="post">
            @csrf
            <div class="form-group col-md-4 mt-2">
                <label >Location Name</label>
                <input type="text" class="form-control" name="name" value="{{$location->name}}" placeholder="Enter Location Name">
            </div>
            <div class="form-group col-md-4 mt-2">
                <label >Latitude</label>
                <input type="text" class="form-control" name="latitude" value="{{$location->latitude}}" placeholder="Enter Latitude">
            </div>
            <div class="form-group col-md-4 mt-2">
                <label >Longitude</label>
                <input type="text" class="form-control" name="longitude" value="{{$location->longitude}}" placeholder="Enter Longitude">
            </div>
            <button type="submit" class="btn btn-warning mt-2">Modify</button>
            <a href='{{url()->previous()}}' class="btn btn-primary mt-2 ms-2">Back</a>
        </form>
    </div>



</body>
</html>
