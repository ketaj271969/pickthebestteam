<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtbtVenue extends Model
{
    //
    protected $fillable = [
        'PTBTVenueId',
        'PTBTCityId',
        'PTBTVenueName',
        'PTBTAddress',
        'PTBTZip',
        'PTBTLocationNote'
    ];

    protected $table='ptbtvenue';
}
