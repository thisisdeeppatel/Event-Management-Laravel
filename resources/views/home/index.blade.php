<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @include('static')
</head>
<body>
//print_r($events)//
<br>

@foreach ($events as $event)
    <br><br>


    {{$event->name}} || at {{ $event->location_name }}|| date {{$event->date}} ||time {{$event->time}} || info/register {{url("/")}}/register/{{$event->event_id}} || nav_url {{$event->nav_url}}
@endforeach


</body>
</html>
