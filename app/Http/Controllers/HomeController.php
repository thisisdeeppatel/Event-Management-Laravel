<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("home.index");
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
