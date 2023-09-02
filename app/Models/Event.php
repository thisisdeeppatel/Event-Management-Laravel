<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Location;
class Event extends Model
{
    protected $table = "events";
    protected $primaryKey = "event_id";
    use HasFactory;


    function location()
    {
        return $this->belongsTo("App\Models\Location", "location_id");
    }

    function registration()
    {
        return $this->hasMany("App\Models\Registration" , "event_id");
    }
}
