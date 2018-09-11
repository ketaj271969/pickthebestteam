<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtbtCity extends Model
{
    //
    
    //use SoftDeletes;
    //
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'PTBTRegionId',
        'PTBTCountryId',
        'PTBTStProvId',
        'PTBTCity'
    ];
    
    protected $table='ptbtcity';
}
