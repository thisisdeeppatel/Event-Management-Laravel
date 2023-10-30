<!DOCTYPE html>
<html lang="en">
<head>
    @include('static')
</head>
<body class="container-fluid">

    @include("home.navbar")

  <div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="m-4">Event Detail:</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mt-2 p-4">
                            <strong>Name:</strong> {{$event->name}}
                        </li>
                        <li class="list-group-item mt-2 p-4">
                            <strong>Info:</strong> {{$event->info}}
                        </li>
                        <li class="list-group-item mt-2 p-4">
                            <strong>Type:</strong> {{$event->type}}
                        </li>
                        <li class="list-group-item mt-2 p-4">
                            <strong>Location:</strong> {{$event->location->name}}
                        </li>
                        <li class="list-group-item mt-2 p-4">
                            <strong>Date:</strong> {{$event->date}}
                        </li>
                        <li class="list-group-item mt-2 p-4">
                            <strong>Time:</strong> {{$event->time}}
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
                          <input type="text" class="form-control" name="full_name" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="location">Email:</label>
                          <input type="email" class="form-control" name="email" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="date">Mobile:</label>
                          <input type="tel" class="form-control" name="mobile" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="time">College/Organization:</label>
                          <input type="text" class="form-control" name="college" required>
                      </div>
                      <div class="form-group p-2">
                          <label for="info">Designation:</label>
                          <input type="text" class="form-control" name="designation" required>
                         </div>
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
