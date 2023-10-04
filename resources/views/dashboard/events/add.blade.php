 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Event</title>
        @include("static")
    </head>
    <body class="container-fluid">

        @include("dashboard.navbar")

        <div class="container mt-5">
            <h2>Add Event</h2>
            <form action="/dashboard/event/add" method="post">
                @csrf
                <div class="form-group col-md-4 mt-2">
                    <label >Event Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Event Name" required>
                </div>

                <div class="form-group col-md-4 mt-2">
                    <label >At Location</label>
                    <select class="form-control" name="location_id">
                       @foreach ($location as $loc)
                           <option value="{{$loc->location_id}}"> {{$loc->name}} </option>
                       @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4 mt-2">
                    <label >Type</label>
                    <select class="form-control" name="type">
                            <option value="Workshop">Workshop</option>
                            <option value="Seminar">Seminar</option>
                            <option value="Training Session">Training Session</option>
                            <option value="Expert Talk">Expert Talk</option>
                            <option value="Presentation">Presentation</option>
                            <option value="Event">Event</option>
                    </select>
                </div>

                <div class="form-group col-md-4 mt-2">
                    <label >Info</label>
                    <input type="text" class="form-control" name="info" placeholder="Enter event info" required>
                </div>
                <div class="form-group col-md-4 mt-2">
                    <label >Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter Date" required>
                </div>

                <div class="form-group col-md-4 mt-2">
                    <label >Time</label>
                    <input type="time" class="form-control" name="time" placeholder="Enter Time" required>
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
