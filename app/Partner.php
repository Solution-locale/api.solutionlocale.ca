<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $connection = 'soloc';

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
