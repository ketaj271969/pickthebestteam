<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtbtRegion extends Model
{
    //
    protected $fillable = [
        'PTBTRegionCode',
        'PTBTRegionName'
    ];
    
    protected $table='ptbtregion';
}
