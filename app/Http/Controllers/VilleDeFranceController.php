<?php

namespace App\Http\Controllers;

use App\Models\VillesFranceFree;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Resources\VillesFranceFreeResource;
use Ramsey\Uuid\Type\Integer;

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
    public function rechercheParDepartement(int $codeDerpartement)
    {
        return VillesFranceFreeResource::collection(VillesFranceFree::where('ville_departement', $codeDerpartement)->cursor());
    }

    /**
     * Display the specified resource.
     */
    public function rechercheParNom(string $nomDeVille)
    {
        return VillesFranceFreeResource::collection(VillesFranceFree::where('ville_nom', $nomDeVille)->orWhere('ville_nom', 'like', '%' . $nomDeVille . '%')->cursor());
    }

    /**
     * Update the specified resource in storage.
     */
    public function rechercheParCodePostal(int $codePostal)
    {
        return VillesFranceFreeResource::collection(VillesFranceFree::where('ville_code_postal', $codePostal)->cursor());
    }
}
