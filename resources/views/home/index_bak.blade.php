<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('static')
</head>
<body class="container-fluid">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" >

            <a class="navbar-brand" href="#">Saurashtra University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url("/")}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/certificate">Get Certificate</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div>
            <h3 style="margin:50px 0px 20px">Upcoming Events</h3>



        <table class="table table-hover  table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Register</th>
                    <th>Navigation</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($events as $event)
                <tr>
                    <td>{{$event->name}}</td>
                    <td>{{ $event->location->name }}</td>
                    <td>{{$event->type}} </td>
                    <td>{{$event->date}}</td>
                    <!-- date('h:i A', intval($event->time)) -->
                    <td>{{ $event->time }} </td>
                    <td><a href="{{url("/")}}/register/{{$event->event_id}}" class="btn btn-primary">Register</a></td>
                    <td><a href="{{$event->location->nav_url}}" class="btn btn-primary">Navigation</a></td>
                <tr>
                @endforeach


            </tbody>
        </table>

   <h3 style="margin:50px 0px 20px">Event at Glance</h3>





</body>
</html>


