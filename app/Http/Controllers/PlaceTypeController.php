<?php

namespace App\Http\Controllers;

use App\Helpers\SaveStats;
use App\Http\Resources\PlaceType as PlaceTypeResource;
use App\Http\Resources\PlaceTypeCollection;
use App\PlaceType;
use Illuminate\Http\Request;

class PlaceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        new SaveStats();
        return new PlaceTypeCollection(PlaceType::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlaceType  $type
     * @return \Illuminate\Http\Response
     */
    public function show(PlaceType $type)
    {
        new SaveStats();
        return new PlaceTypeResource($type);
    }
}
