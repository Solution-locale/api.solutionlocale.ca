<?php

namespace App\Http\Controllers;

use App\Helpers\SaveStats;
use App\Http\Resources\Partner as PartnerResource;
use App\Http\Resources\PartnerCollection;
use App\Partner;
use Illuminate\Support\Facades\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        new SaveStats();
        return new PartnerCollection(Partner::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        new SaveStats();
        return new PartnerResource($partner);
    }
}
