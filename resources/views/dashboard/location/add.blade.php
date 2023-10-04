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
        <form action="/dashboard/location/add" method="post">
            @csrf
            <div class="form-group col-md-4 mt-2">
                <label >Location Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Location Name" required>
            </div>
            <div class="form-group col-md-4 mt-2">
                <label >Latitude</label>
                <input type="text" class="form-control" name="latitude" placeholder="Enter Latitude" required>
            </div>
            <div class="form-group col-md-4 mt-2">
                <label >Longitude</label>
                <input type="text" class="form-control" name="longitude" placeholder="Enter Longitude" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add</button>
        </form>
    </div>
</body>
</html>
