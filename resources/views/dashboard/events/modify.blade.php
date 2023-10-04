<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event</title>
    @include("static")
</head>
<body>

    @include("dashboard.navbar")
    <div class="container mt-5">
        <h2>Add Event</h2>
        <form action="/dashboard/event/update/{{$event->event_id}}" method="post">
            @csrf
            <div class="form-group col-md-4 mt-2">
                <label >Event Name</label>
                <input type="text" class="form-control" name="name" value="{{$event->name}}" placeholder="Enter Event Name" required>
            </div>

            <div class="form-group col-md-4 mt-2">
                <label >At Location</label>
                <select class="form-control" name="location_id">
                   @foreach ($location as $loc)
                        <!-- here need to auto select. so added ternary operator ?: -->
                       <option value="{{$loc->location_id}}" {{$event->location_id == $loc->location_id ? "selected":"" }}> {{$loc->name}} </option>
                   @endforeach
                </select>
            </div>

            <div class="form-group col-md-4 mt-2">
                <label >Type</label>
                <select class="form-control" name="type">
                        <option value="Workshop" {{$event->type == "Workshop" ? "selected":""}}>Workshop</option>
                        <option value="Seminar" {{$event->type == "Seminar" ? "selected":""}}>Seminar</option>
                        <option value="Training Session" {{$event->type == "Training Session" ? "selected":""}}>Training Session</option>
                        <option value="Expert Talk" {{$event->type == "Expert Talk" ? "selected":""}}>Expert Talk</option>
                        <option value="Presentation" {{$event->type == "Presentation" ? "selected":""}}>Presentation</option>
                        <option value="Presentation" {{$event->type == "Presentation" ? "selected":""}}>Event</option>
                </select>
            </div>

            <div class="form-group col-md-4 mt-2">
                <label >Info</label>
                <input type="text" class="form-control" name="info" value="{{$event->info}}"  placeholder="Enter event info" required>
            </div>
            <div class="form-group col-md-4 mt-2">
                <label >Date</label>
                <input type="date" class="form-control" name="date" value="{{$event->date}}"  placeholder="Enter Date" required>
            </div>

            <div class="form-group col-md-4 mt-2">
                <label >Time</label>
                <input type="time" class="form-control" name="time" value="{{$event->time}}"  placeholder="Enter Time" required>
            </div>

            <div class="form-group col-md-4 mt-2">
                <label >Event Status</label>
                <select class="form-control" name="is_complete">
                    <option value="0">Not Completed</option>
                    <option value="1">Completed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add</button>
        </form>
    </div>
</body>
</html>
