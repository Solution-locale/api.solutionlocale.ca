<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegionCollection;
use App\Http\Resources\Region as RegionResource;
use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new RegionCollection(Region::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return new RegionResource($region);
    }
}
