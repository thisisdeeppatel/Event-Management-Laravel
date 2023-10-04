<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function add(Request $request)
    {
        $event = new Event;

        $event->name = $request['name'];
        $event->location_id= $request['location_id'];
        $event->type = $request['type'];
        $event->info = $request['info'];
        $event->date = $request['date'];
        $event->time = $request['time'];
        $event->is_complete = '0';
        $event->save();

        return Redirect("/dashboard");

    }


    public function view_participants($event_id)
    {
        $regs = Registration::where("event_id" , $event_id)->get();

        $data = compact('regs');
        return view("dashboard.events.view_participants")->with($data);

    }


    public function add_frm()
    {
        $location = Location::all();

        $data = compact('location');
        return view("dashboard.events.add")->with($data);
    }

    public function modify_frm($event_id)
    {
        $location = Location::all();

        $event = Event::find($event_id);

        $data = compact('location' , "event");

        return view("dashboard.events.modify")->with($data);
    }

    public function modify_save($event_id , Request $request)
    {
        $event = Event::find($event_id);

        $event->name = $request['name'];
        $event->location_id= $request['location_id'];
        $event->type = $request['type'];
        $event->info = $request['info'];
        $event->date = $request['date'];
        $event->time = $request['time'];
        $event->is_complete = $request['is_complete'];
        $event->save();
        return Redirect("/dashboard");
    }

    public function view_all()
    {
        $events = Event::all();
        $data = compact('events');
        return view("dashboard.events.view_all")->with($data);
    }
}
