<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtbtCountry extends Model
{
    //
    //
    protected $fillable = [
        'PTBTRegionId',
        'PTBTCountryCode',
        'PTBTCountryName'
    ];
    
    protected $table='ptbtcountry';
}
