<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = "registrations";
    protected $primaryKey = "registration_id";
    use HasFactory;


    // remove this if any error
    protected $fillable = [
        'full_name',
        'college',
        'mobile',
        'email',
        'designation',
        'event_id'
    ];



    function event()
    {
       return $this->belongsTo("App\Models\Event" , "event_id"); // adds the event associated with the Registration
    }

    function location()
    {
        return $this->belongsTo("App\Models\Location" , "location_id");
    }
}
