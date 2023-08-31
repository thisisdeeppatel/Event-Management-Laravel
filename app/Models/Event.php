<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $primaryKey = "event_id";
    use HasFactory;


    function getLocation()
    {
        return $this->hasOne("App\Models\Location" , "location_id");
    }

    function getParticipants()
    {
        return $this->hasMany("App\Models\Registration" , "event_id");
    }
}
