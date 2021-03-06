<?php

namespace App\Http\Controllers;

use App\Helpers\SaveStats;
use App\Http\Resources\RCM as RcmResource;
use App\Http\Resources\RcmCollection;
use App\Rcm;
use Illuminate\Http\Request;

class RcmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        new SaveStats();
        return new RcmCollection(Rcm::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rcm  $rcm
     * @return \Illuminate\Http\Response
     */
    public function show(Rcm $rcm)
    {
        new SaveStats();
        return new RcmResource($rcm);
    }
}
