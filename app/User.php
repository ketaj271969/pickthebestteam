<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname', 'middleinitial', 'lastname', 'email', 'password', 'gender', 'userrole', 'age', 'address1',
        'address2', 'PTBTRegionId', 'PTBTCountryId', 'PTBTStProvId', 'PTBTCityId'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function PtbtRole(){
        return $this->belongsTo('App\PtbtRole');

    }
}
