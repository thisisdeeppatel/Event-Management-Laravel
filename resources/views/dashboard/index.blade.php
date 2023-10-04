<!DOCTYPE html>
<html lang="en">
<head>
    @include("static")
</head>
<body class="container-fluid">

   @include("dashboard.navbar")

    <div class="container"><!--To make smaller width -->
        <h3 style="margin-top:50px">Upcoming Events</h3>
        <table class="table table-hover  table-bordered container" style="margin-top:20px"  >
          <thead>
              <tr class="table-primary">

                <th >Name</th>
                <th >Type</th>
                <th >Location</th>
                <th >Completed</th>
                <th >Date</th>
                <th >Time</th>
                <th >View Partion</th>
                <th >Edit/Delete</th>
              </tr>
         </thead>
         <tbody>

              @foreach ($uncomp_events as $event)

              <tr>

                <td>{{$event->name}}</td>
                <td>{{$event->type}}</td>
                <td>{{$event->location->name}}</td>
                <td>{{$event->is_complete}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->time}}</td>
                <td><a href="{{url("/")}}/dashboard/event/participants/{{$event->event_id}}" class="btn btn-secondary" role="button">View</a></td>
                <td><a href="{{url("/")}}/dashboard/event/{{$event->event_id}}" class="btn btn-secondary" role="button">Edit</a></td>
              </tr>


              @endforeach


         </tbody>
     </table>

     <h3 style="margin-top:50px">Completed</h3>
     <table class="table table-hover  table-bordered container" style="margin-top:20px"  >
       <thead>
           <tr class="table-primary">

             <th>Name</th>
             <th>Type</th>
             <th>Location</th>
             <th>Completed</th>
             <th>Date</th>
             <th>Time</th>
             <th>View Participants</th>

           </tr>
      </thead>
      <tbody>

             @foreach ($comp_events as $event)

             <tr>

                <td>{{$event->name}}</td>
                <td>{{$event->type}}</td>
                <td>{{$event->location->name}}</td>
                <td>{{$event->is_complete}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->time}}</td>
                <td><a href="{{url("/")}}/dashboard/event/participants/{{$event->event_id}}" class="btn btn-secondary" role="button">View</a></td>
            </tr>


             @endforeach
      </tbody>
  </table>

    </div>
</body>
</html>
