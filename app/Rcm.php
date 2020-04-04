<?php

namespace App;

use App\Region;
use Illuminate\Database\Eloquent\Model;

class Rcm extends Model
{
    protected $connection = 'soloc';

    protected $hidden = [
        //
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
