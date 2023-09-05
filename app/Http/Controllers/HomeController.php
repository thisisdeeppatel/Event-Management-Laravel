<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    //
    public function index()
    {
        // inner join events and location table
        //$events = Event::select("events.*" , "locations.location_id", "locations.name as location_name", "locations.nav_url" )->join("locations" , "events.location_id" ,"=" , "locations.location_id")->get();
         $events = Event::where("is_complete" , 0)->get();
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
        $registration = new Registration;
        $registration->event_id= $request->event_id;
        $registration->full_name = $request->full_name;
        $registration->college = $request->college;
        $registration->mobile = $request->mobile;
        $registration->email = $request->email;
        $registration->designation= $request->designation;
        $registration->save();

        $new_reg_id =  $registration->registration_id;

        return view("home.register_ok" , ['reg_id' => $new_reg_id]);
    }





    public function certificate_home($reg_id = " ")
    {

        return view("home.certificate" , ["reg_id" => $reg_id]);
    }

    public function certificate_gen(Request $request)
    {
        // fetch registraion with event as relation
        // find location.
        // make url
        // redirect to url
        $reg_id = $request['reg_id'];
        $reg = Registration::where("registration_id" , $reg_id)->with("event")->first();

        $location = Location::where("location_id" , $reg->event->location_id)->first();

        if($reg->event->is_complete == 0)
            return "<h1 style='text-align:center;margin:100px'>  EVENT NOT COMPLETED YET </h1>";

        $user = $reg->full_name;
        $location_name = $location->name;
        $event_name = $reg->event->name;
        $date = $reg->event->date;

        // Concatnation to build custom url
        $final_url = "static/"."generate.php"."?user=$user&location=$location_name&ename=$event_name&date=$date";
        $final_url2 = $final_url . "&verify=".url("/")."/certificate/".$reg_id;

        // redirect to this custom url
        return Redirect::to($final_url2);

    }









    public function test()
    {
        // get all events with location and registration API
        $data = Event::with('location' , 'registration')->get();
        return $data;
    }
}
