<?php

namespace App;

use App\Place;
use App\Rcm;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $connection = 'soloc';

    protected $hidden = [
        //
    ];

    // public function places()
    // {
    //     return $this->hasMany(Place::class);
    // }

    public function rcm()
    {
        return $this->hasMany(Rcm::class);
    }
}
