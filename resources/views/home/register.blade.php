<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @include('static')
</head>
<body>

php dd($event) endphp<br>


name - {{$event->name}}<br>
info- {{$event->info}}<br>
{{$event->time}}<br>
{{$event->date}}<br>
{{$event->event_id}}<br>
Loc name - > {{$event->location->name}}<br>
Loc url - > {{$event->location->nav_url}}<br>

<pre>
    form data
        full name
        college / org
        mobile
        email
        designation
        event_id = hidden
</pre>
</body>
</html>
