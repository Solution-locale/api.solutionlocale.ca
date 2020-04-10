<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;

class SaveStats
{
    protected $user;
    protected $route_name;
    protected $referer_ip;
    
    function __construct()
    {
        $this->user = auth()->user();
        $this->route_name = Request::route()->getName();
        $this->referer_ip = Request::ip();

        $this->save();
    }

    private function save()
    {
        $this->user->statistics()->create([
            'endpoint' => $this->route_name,
            'referer_ip' => $this->referer_ip,
        ]);
    }
}
