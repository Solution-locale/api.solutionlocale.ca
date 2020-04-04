<?php

namespace App\Http\Controllers;

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
        return Rcm::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rcm  $rcm
     * @return \Illuminate\Http\Response
     */
    public function show(Rcm $rcm)
    {
        return $rcm;
    }
}
