
    @include('static')


@foreach ($events as $event)
    <br><br>


    {{$event->name}} || at {{ $event->location->name }}|| date {{$event->date}} ||time {{$event->time}} || info/register {{url("/")}}/register/{{$event->event_id}} || nav_url {{$event->location->nav_url}}
@endforeach

