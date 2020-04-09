<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $connection = 'soloc';

    protected $hidden = [
        //
    ];

    protected $dates = [
        'normalized_at',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function rcm()
    {
        return $this->belongsTo(Rcm::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function types()
    {
        return $this->belongsToMany(PlaceType::class);
    }

    public function delivery()
    {
        return $this->belongsToMany(DeliveryType::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
