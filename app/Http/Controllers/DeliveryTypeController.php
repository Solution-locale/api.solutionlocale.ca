<?php

namespace App\Http\Controllers;

use App\DeliveryType;
use App\Http\Resources\DeliveryTypeCollection;
use App\Http\Resources\DeliveryType as DeliveryTypeResource;
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
        return new DeliveryTypeCollection(DeliveryType::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryType  $type
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryType $type)
    {
        return new DeliveryTypeResource($type);
    }
}
