<?php

namespace App\Http\Controllers;

use App\Helpers\SaveStats;
use App\Http\Resources\Region as RegionResource;
use App\Http\Resources\RegionCollection;
use App\Region;
use Illuminate\Support\Facades\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        new SaveStats();
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
        new SaveStats();
        return new RegionResource($region);
    }
}
