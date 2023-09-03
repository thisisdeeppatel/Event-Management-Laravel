
    @include('static')



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
