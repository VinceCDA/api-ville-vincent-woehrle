<?php

namespace App\Http\Controllers;

use App\Models\VillesFranceFree;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Resources\VillesFranceFreeResource;

class VilleDeFranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$test = VillesFranceFree::chunkMap();
        //dd($test);
        return VillesFranceFreeResource::collection(VillesFranceFree::cursor());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VillesFranceFree $villesFranceFree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VillesFranceFree $villesFranceFree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VillesFranceFree $villesFranceFree)
    {
        //
    }
}
