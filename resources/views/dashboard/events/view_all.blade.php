<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All events</title>
    @include("static")
    <script>
            $(document).ready(function()
            {
                let table = new DataTable('#eventTable', {
                    responsive: true
                    });
            });
    </script>
</head>
<body>

    @include("dashboard.navbar")

   <h3 style="margin-top:50px">All events</h3>
   <table id="eventTable"class="table table-hover  table-bordered" style="margin-top:20px"  >
     <thead>
         <tr class="table-primary">

           <th width="4%">Name</th>
           <th width="2%">Type</th>
           <th width="6%">Info</th>
           <th width="3%">Location</th>
           <th width="1%">Completed</th>
           <th width="3%">Date</th>
           <th width="3%">Time</th>
           <th width="2%">View Participants</th>
           <th width="2%">Modify</th>

         </tr>
    </thead>
    <tbody>

           @foreach ($events as $event)

           <tr>

              <td>{{$event->name}}</td>
              <td>{{$event->type}}</td>
              <td>{{$event->info}}</td>
              <td>{{$event->location->name}}</td>
              <td>{{$event->is_complete}}</td>
              <td>{{$event->date}}</td>
              <td>{{$event->time}}</td>
              <td><a href="{{url("/")}}/dashboard/event/participants/{{$event->event_id}}" class="btn btn-secondary" role="button">View</a></td>
                <td><a href="{{url("/")}}/dashboard/event/{{$event->event_id}}" class="btn btn-warning" role="button">Modify</a></td>
          </tr>


           @endforeach
    </tbody>
</table>
</body>
</html>
