<!DOCTYPE html>
<html lang="en">
<head>

    @include('static')

    <!-- for map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <style>
        .card {
            display: inline-block;
            width: 300px;
            margin-right: 25px;
            border-radius: 5px;

        }
        .card-body{
            height:250px;
            overflow: hidden;
        }
        .card-img-top {
            max-width: 100%;
            height:200px;
        }

    </style>
</head>
<body>

@include("home.navbar")

<h3 style="margin:50px 0px 20px;text-align: center">Upcoming Events</h3>

<!-- horizinal scrollbar implementation -->
    <div class="container-fluid mt-4">
        <div class="scrolling-container">
            @foreach ($events as $event)

            <div class="card shadow" >
                <div class="card-img-top d-flex justify-content-center align-items-center bg-warning" style="height:200px"><h1 class="p-6"> {{$event->type}}</h1></div>
                <div class="card-body" style="padding:5%">

                    <li class="list-group-item">
                        <strong>Name:</strong> {{$event->name}}
                    </li>
                    <li class="list-group-item">
                        <strong>Location:</strong> {{$event->location->name}}
                    </li>

                    <li class="list-group-item">
                        <strong>Date:</strong> {{$event->date}}
                    </li>
                    <li class="list-group-item">
                        <strong>Time:</strong> {{$event->time}}
                    </li>
                    <div class="row mt-3" style="position:absolute;width:280px;bottom:5%;">
                        <div class="col-4">
                            <a href="{{url("/")}}/register/{{$event->event_id}}" class="btn btn-primary">Register</a>
                        </div>
                        <div class="col">
                            <td><a href="{{$event->location->nav_url}}" class="btn btn-primary">Navigation</a></td>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach</div>
    </div>

    <h3 style="margin:50px 0px 20px;text-align: center">Event at Glance</h3>



<!-- MAP IMPLEMENTATION -->

<center><div id="mapid" class="shadow" style="height: 500px; width:900px"></div></center>
<script>
    //lat , long , zoom level
    var mymap = L.map('mapid').setView([22.291280100735328, 70.7423523024442], 16);

    // add the  google map tile layer to the map as documentation
    googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(mymap);


    // get location data and popup content from API as json file from the server
    fetch('{{url("/")}}/mapdata')
        .then(response => response.json())
        .then(data => {

            // loop each marker  in json and add it to the map
            data.forEach(marker => {

                // create marker

                var mymarker = L.marker([marker.location.latitude, marker.location.longitude]).addTo(mymap);

                // add popup content to this marker

                //Custom html content to bind
                var html = "<h4>"+marker.location.name+"</h4><hr>";
                html+="<h6><b>Event: </b>"+marker.name+"</h6>";
                html+="<hr>"
                html+="<center><h4><a href='{{url("/")}}/register/"+marker.event_id+"'>Register Now!</a></h4></center>";

                mymarker.bindPopup(html);
            });


            // click event listener to each marker to open popups
            var markers = document.querySelectorAll('.leaflet-marker-icon');
            markers.forEach(marker => {
                marker.addEventListener('click', function() {
                    mymap.eachLayer(function(layer) {
                        if (layer instanceof L.Popup) {
                            layer.openOn(mymap);
                        }
                    });
                });
            });
        }).catch(error => console.error(error));
</script>


</body>
</html>


