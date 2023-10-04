<!DOCTYPE html>
<html lang="en">
<head>

    @include('static')
    <style>
        .carousel-inner img {
            width: 100%;
            height: auto;
        }
        .carousel-caption{
            background: rgba(0,0,0,.6);
        }

         /* Custom CSS for horizontal scrolling */
         .scrolling-container {
            overflow-x: scroll;
            /* white-space: nowrap; */
            padding: 20px;


        }

        .card {
            display: inline-block;
            width: 300px; /* Adjust the card width as needed */
            margin-right: 25px; /* Adjust the spacing between cards */
            /* border: 1px solid #ccc; */
            border-radius: 5px;

        }
        .card-body{
            height:250px;
            overflow: hidden;
        }
        .card-img-top {
            max-width: 100%;
            height:200px''        }

    </style>
</head>
<body >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" >
            <a class="navbar-brand mb-0 h1" href="#" style="color: #e26228">Saurashtra University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url("/")}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/certificate">Get Certificate</a>
                </li>

            </ul>
            </div>
            <div class="d-flex">
                <a class="nav-link " aria-current="page" href="/dashboard">Dashboard</a>
            </div>
        </div>
        </nav>


        {{-- Carousel --}}
        <div class="container-fluid mt-5">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/amrt-kla-mhotsv-20221006192842-380.jpg" alt="Slide 1">
                        <div class="carousel-caption " >
                            <h3 class="text-center">અમૃત કલા મહોત્સવ</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/yuva-divs-12-mi-janyuari-ujvni-20230113184351-383.jpg" alt="Slide 2">
                        <div class="carousel-caption ">
                            <h3 class="text-center">"યુવા દિવસ", ૧૨ મી જાન્યુઆરી ઉજવણી</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/modi-20-20221003184924-6.jpg" alt="Slide 3">
                        <div class="carousel-caption ">
                            <h3 class="text-center">MODI @20</h3>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div>
            <h3 style="margin:50px 0px 20px;text-align: center">Upcoming Events</h3>



        {{-- <table class="table table-hover  table-bordered">
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
        </table> --}}



   <h3 style="margin:50px 0px 20px;text-align: center">Event at Glance</h3>





</body>
</html>


