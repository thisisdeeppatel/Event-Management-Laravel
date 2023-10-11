<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    //
    public function index()
    {

        //get completed events with loc;

        //get uncomp events with loc;

        if(!auth()->check())
        {
            return redirect("/dashboard/login");
        }

        $uncomp_events = Event::where('is_complete' , 0)->with("location" , "registration")->get();

        $comp_events = Event::where('is_complete' , 1)->with("location" , "registration")->get();

        $data = compact('uncomp_events' , 'comp_events');
        //return $uncomp_events;
       return view("dashboard.index")->with($data);
    }
}
