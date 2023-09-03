<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Location;

class LocationController extends Controller
{
    //
    public function add(Request $request)
    {
        $location = new Location;

        $location->name = $request['name'];
        $location->latitude = $request['latitude'];
        $location->longitude = $request['longitude'];

        $nav_url_new = "https://www.google.com/maps/dir//". $request['latitude'] . ",". $request['longitude'] . "/";
        $location->nav_url = $nav_url_new;

        $location->save();
    }
}
