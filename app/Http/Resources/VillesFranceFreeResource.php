<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VillesFranceFreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ville_id' => $this->ville_id,
            'ville_nom' => $this->ville_nom,
            'ville_code_postal' => $this->ville_code_postal,
            'ville_departement' => $this->ville_departement,
            'ville_longitude_deg' => $this->ville_longitude_deg,
            'ville_latitude_deg' => $this->ville_latitude_deg,
            'ville_population_2012' => $this->ville_population_2012,
        ];
    }
}
