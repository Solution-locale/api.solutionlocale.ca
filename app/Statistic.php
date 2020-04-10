<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = [
        'endpoint', 'referer_ip'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
