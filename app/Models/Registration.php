<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = "registrations";
    protected $primaryKey = "registration_id";
    use HasFactory;

    function getEvent()
    {
       return $this->hasOne("App\Models\Event" , "event_id"); // adds the event associated with the Registration
    }

    function getLocation()
    {
        return $this->hasone("App\Models\Location" , "location_id");
    }
}
