<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceType extends Model
{
    protected $connection = 'soloc';

    protected $hidden = [
        //
    ];

    // public function places()
    // {
    //     return $this->belongsToMany(Place::class);
    // }
}
