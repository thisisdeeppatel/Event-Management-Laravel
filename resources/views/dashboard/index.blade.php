<!DOCTYPE html>
<html lang="en">
<head>
    @include("static")
</head>

<script>
    $(document).ready(function() {

        let table = new DataTable('#uptable', {
                    responsive: true
        });

        let table2 = new DataTable('#comptable', {
                    responsive: true
        });
    });
</script>
<body class="container-fluid">

   @include("dashboard.navbar")

    <div class="container"><!--To make smaller width -->
        <h3 style="margin-top:50px">Pending Events</h3>
        <table id="uptable" class="table table-hover  table-bordered container" style="margin-top:20px"  >
          <thead>
              <tr class="table-primary">

                <th >Name</th>
                <th >Type</th>
                <th >Location</th>
                <th >Status</th>
                <th >Date</th>
                <th >Time</th>
                <th >View Participant</th>
                <th >Edit/Delete</th>
              </tr>
         </thead>
         <tbody>

              @foreach ($uncomp_events as $event)

              <tr>

                <td>{{$event->name}}</td>
                <td>{{$event->type}}</td>
                <td>{{$event->location->name}}</td>
                <td>{{ ($event->is_complete) ? "Completed" : "Pending" }}</td> <!-- ternary op -->
                <td>{{$event->date}}</td>
                <td>{{$event->time}}</td>
                <td><a href="{{url("/")}}/dashboard/event/participants/{{$event->event_id}}" class="btn btn-primary" role="button">View</a></td>
                <td><a href="{{url("/")}}/dashboard/event/{{$event->event_id}}" class="btn btn-warning" role="button">Edit</a></td>
              </tr>


              @endforeach


         </tbody>
     </table>

     <h3 style="margin-top:50px">Completed</h3>
     <table id="comptable" class="table table-hover  table-bordered container" style="margin-top:20px"  >
       <thead>
           <tr class="table-primary">

             <th>Name</th>
             <th>Type</th>
             <th>Location</th>
             <th>Status</th>
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
                <td>{{ ($event->is_complete) ? "Completed" : "Pending" }}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->time}}</td>
                <td><a href="{{url("/")}}/dashboard/event/participants/{{$event->event_id}}" class="btn btn-primary" role="button">View</a></td>
            </tr>


             @endforeach
      </tbody>
  </table>

    </div>
</body>
</html>
