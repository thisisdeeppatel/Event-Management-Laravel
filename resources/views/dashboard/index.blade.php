<!DOCTYPE html>
<html lang="en">
<head>
    @include("static")
</head>
<body class="container">

    {{-- navbar --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container" >
            <a class="navbar-brand" href="#">Events360</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Location
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/dashboard/location/add">Add</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Modify</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/dashboard/location/view_all">View All</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Event
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Add</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Modify</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">View All</a>
                    </div>
                  </li>


            </ul>
            </div>
        </div>
        </nav>

    <div>
        <h3 style="margin-top:50px">Upcoming Events</h3>
        <table class="table table-hover  table-bordered" style="margin-top:20px"  >
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
     <table class="table table-hover  table-bordered" style="margin-top:20px"  >
       <thead>
           <tr class="table-primary">

             <th width="4%">Name</th>
             <th width="2%">Type</th>
             <th width="3%">Location</th>
             <th width="1%">Completed</th>
             <th width="3%">Date</th>
             <th width="3%">Time</th>
             <th width="6%">View Participants</th>

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
