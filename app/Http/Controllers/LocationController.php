<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Location;
use Illuminate\Support\Facades\Redirect;

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

        $final_url2 = url("/") . "/dashboard";
        return Redirect::to($final_url2);
    }

    public function add_frm()
    {
        return view("dashboard.location.add");
    }

    public function view_all()
    {
        $location = Location::all();
        $data = compact("location");
        return view("dashboard.location.view_all")->with($data);
    }

    public function modify_frm(Request $req, $location_id)
    {
        $location = Location::find($location_id);
        $data = compact('location');
        return view("dashboard.location.modify")->with($data);
    }

    public function modify_save(Request $request , $location_id)
    {
        $location = Location::find($location_id);

        $location->name = $request['name'];
        $location->latitude = $request['latitude'];
        $location->longitude = $request['longitude'];

        $location->save();
        return Redirect::to("/dashboard/location/view_all");
    }
}
