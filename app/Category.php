<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'soloc';

    protected $hidden = [
        //
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    // public function places()
    // {
    //     return $this->belongsToMany(Place::class);
    // }
}
