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
        // inner join events and location table
        //$events = Event::select("events.*" , "locations.location_id", "locations.name as location_name", "locations.nav_url" )->join("locations" , "events.location_id" ,"=" , "locations.location_id")->get();
         $events = Event::all();
        $data = compact("events");
       return view("home.index")->with($data);
    }

    public function register(Request $request)
    {
        $event_id = $request->event_id;

        // get event details.

        //$event= Event::select("events.*" , "locations.location_id", "locations.name as location_name", "locations.nav_url" )->join("locations" , "events.location_id" ,"=" , "locations.location_id")->where("events.event_id" , "=" , $event_id)->get();
        $event = Event::find($event_id);
        $data = compact('event');
        //return $event;
        return view("home.register")->with($data);
    }

    public function insert(Request $request)
    {
        $registraion = new Registration;
        $registraion->event_id= $request->event_id;
        $registraion->full_name = $request->full_name;
        $registraion->college = $request->college;
        $registraion->mobile = $request->mobile;
        $registraion->email = $request->email;
        $registraion->designation= $request->designation;
        $registraion->save();


        // Access the ID of the inserted row
        $new_reg_id = $registraion->id;
        //compact here
        return view("home.register_ok" , ['reg_id' => $new_reg_id]);
    }


    public function test()
    {
        // get all events with location and registration API
        $data = Event::with('location' , 'registration')->get();
        return $data;
    }
}
