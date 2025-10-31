<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ville_departement
 * @property string $ville_slug
 * @property string $ville_nom
 * @property string $ville_nom_simple
 * @property string $ville_nom_reel
 * @property string $ville_nom_soundex
 * @property string $ville_nom_metaphone
 * @property string $ville_code_postal
 * @property string $ville_commune
 * @property string $ville_code_commune
 * @property string $ville_canton
 * @property string $ville_longitude_grd
 * @property string $ville_latitude_grd
 * @property string $ville_longitude_dms
 * @property string $ville_latitude_dms
 * @property int    $ville_densite_2010
 * @property float  $ville_surface
 * @property float  $ville_longitude_deg
 * @property float  $ville_latitude_deg
 */
class VillesFranceFree extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'villes_france_free';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ville_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ville_departement', 'ville_slug', 'ville_nom', 'ville_nom_simple', 'ville_nom_reel', 'ville_nom_soundex', 'ville_nom_metaphone', 'ville_code_postal', 'ville_commune', 'ville_code_commune', 'ville_arrondissement', 'ville_canton', 'ville_amdi', 'ville_population_2010', 'ville_population_1999', 'ville_population_2012', 'ville_densite_2010', 'ville_surface', 'ville_longitude_deg', 'ville_latitude_deg', 'ville_longitude_grd', 'ville_latitude_grd', 'ville_longitude_dms', 'ville_latitude_dms', 'ville_zmin', 'ville_zmax'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ville_departement' => 'string', 'ville_slug' => 'string', 'ville_nom' => 'string', 'ville_nom_simple' => 'string', 'ville_nom_reel' => 'string', 'ville_nom_soundex' => 'string', 'ville_nom_metaphone' => 'string', 'ville_code_postal' => 'string', 'ville_commune' => 'string', 'ville_code_commune' => 'string', 'ville_canton' => 'string', 'ville_densite_2010' => 'int', 'ville_surface' => 'float', 'ville_longitude_deg' => 'float', 'ville_latitude_deg' => 'float', 'ville_longitude_grd' => 'string', 'ville_latitude_grd' => 'string', 'ville_longitude_dms' => 'string', 'ville_latitude_dms' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
