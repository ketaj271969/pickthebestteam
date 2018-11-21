<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtbtStProv extends Model
{
    //
    //
    protected $fillable = [
        'PTBTStProvName',
        'PTBTCountryId',
        'PTBTRegionId',
        'PTBTStProvCode'
    ];
    
    protected $table='ptbtstprov';

    public function PtbtCountryId()
    {
        return $this->belongsTo(PtbtCountry::class);
    }

    public function cities(){
        return $this->hasMany(PtbtCity, 'PTBTStProvId', 'PTBTStProvName');
    }
}
