<?php

namespace App\Http\Controllers;

use App\DeliveryType;
use App\Helpers\SaveStats;
use App\Http\Resources\DeliveryType as DeliveryTypeResource;
use App\Http\Resources\DeliveryTypeCollection;
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
        new SaveStats();
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
        new SaveStats();
        return new DeliveryTypeResource($type);
    }
}
