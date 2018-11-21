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

    protected $table = 'ptbtregion';

    // use this tinker command to test this $PtbtFindRegion = App\PtbtRegion::find(3)->PtbtCountries;
    public function PtbtCountries()
    {
        return $this->hasMany('App\PtbtCountry', 'PtbtRegionId', 'id');
    }
}
