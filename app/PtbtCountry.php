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

    public function PtbtRegion()
    {
        return $this->belongsTo(PtbtRegion::class);
    }

    // use this tinker command $PtbtFindRegion = App\PtbtCountry::find(155)->PtbtStProv;
    public function PtbtStProv()
    {
        return $this->hasMany('App\PtbtStProv', 'PtbtCountryId', 'id');
    }
}
