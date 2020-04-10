<?php

namespace App\Http\Controllers;

use App\Http\Resources\Place as PlaceResource;
use App\Http\Resources\PlaceCollection;
use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        new SaveStats();
        return new PlaceCollection(Place::where('is_approved', true)->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        new SaveStats();
        return new PlaceResource($place);
    }
}
