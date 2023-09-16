<!DOCTYPE html>
<html lang="en">
<head>
    @include('static')
</head>
<body class="container">

     <!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container" >
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

  <div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="m-4">Event Detail:</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mt-2">
                            <strong>Name:</strong> {{$event->name}}
                        </li>
                        <li class="list-group-item mt-2">
                            <strong>Type:</strong> {{$event->type}}
                        </li>
                        <li class="list-group-item mt-2">
                            <strong>Location:</strong> {{$event->location->name}}
                        </li>
                        <li class="list-group-item mt-2">
                            <strong>Date:</strong> {{$event->date}}
                        </li>
                        <li class="list-group-item mt-2">
                            <strong>Time:</strong> {{$event->time}}
                        </li>
                        <li class="list-group-item mt-2 mb-5">
                            <strong>Info:</strong> {{$event->info}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- form start -->
<div class="mt-5" style="margin-bottom:50px">
  <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h2 class="m-4">Register for this Event</h2>
              </div>
              <div class="card-body">
                  <form action="{{url("/")}}/register" method="post">
                    @csrf
                      <div class="form-group p-2">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" name="full_name" placeholder="Enter Name" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="location">Email:</label>
                          <input type="email" class="form-control" name="email"  placeholder="Enter Email" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="date">Mobile:</label>
                          <input type="tel" class="form-control" name="mobile"  placeholder="Enter mobile number" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="time">College/Organization:</label>
                          <input type="text" class="form-control" name="college"  placeholder="Enter College/Organization Name" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="info">Designation:</label>
                          <input type="text" class="form-control" name="designation" placeholder="Enter Designation" required>                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Register Now</button>

                      <input type="hidden" name="event_id" value="{{$event->event_id}}" />
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- form end-->


</body>
</html>
