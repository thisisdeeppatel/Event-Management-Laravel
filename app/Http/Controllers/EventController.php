<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
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

        return view("dashboard.index");

    }
}
