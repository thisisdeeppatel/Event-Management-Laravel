<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index()
    {
        // ##### FOR API
        // $d = Registration::with('getEvent',"getLocation")->get();
        //$d = Event::with('getLocation' , "getParticipants")->get();
        //return $d;

        // inner join events and location table
        $events = Event::select("events.*" , "locations.location_id", "locations.name as location_name", "locations.nav_url" )->join("locations" , "events.location_id" ,"=" , "locations.location_id")->get();

        $data = compact("events");
       return view("home.index")->with($data);
    }

    public function register(Request $request)
    {
        $event_id = $request->event_id;

        $data = compact('event_id');
        return view("home.register")->with($data);
    }

    public function insert(Request $request)
    {
        // insert here in registrations.
        // get id and pass to ok
        //send email also.
        return view("home.register_ok");
    }
}
