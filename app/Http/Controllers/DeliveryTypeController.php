<?php

namespace App\Http\Controllers;

use App\DeliveryType;
use Illuminate\Http\Request;

class DeliveryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeliveryType::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryType  $type
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryType $type)
    {
        return $type;
    }
}
