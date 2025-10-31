<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillesFranceFreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes_france_free', function (Blueprint $table) {
            $table->mediumIncrements('ville_id');
            $table->string('ville_departement', 3)->nullable()->index('ville_departement');
            $table->string('ville_slug')->nullable()->unique('ville_slug');
            $table->string('ville_nom', 45)->nullable()->index('ville_nom');
            $table->string('ville_nom_simple', 45)->nullable()->index('ville_nom_simple');
            $table->string('ville_nom_reel', 45)->nullable()->index('ville_nom_reel');
            $table->string('ville_nom_soundex', 20)->nullable()->index('ville_nom_soundex');
            $table->string('ville_nom_metaphone', 22)->nullable()->index('ville_nom_metaphone');
            $table->string('ville_code_postal')->nullable()->index('ville_code_postal');
            $table->string('ville_commune', 3)->nullable();
            $table->string('ville_code_commune', 5)->index()->unique();
            $table->unsignedSmallInteger('ville_arrondissement')->nullable();
            $table->string('ville_canton', 4)->nullable();
            $table->unsignedSmallInteger('ville_amdi')->nullable();
            $table->unsignedMediumInteger('ville_population_2010')->nullable()->index('ville_population_2010');
            $table->unsignedMediumInteger('ville_population_1999')->nullable();
            $table->unsignedMediumInteger('ville_population_2012')->nullable()->comment("approximatif");
            $table->integer('ville_densite_2010')->nullable();
            $table->float('ville_surface')->nullable();
            $table->float('ville_longitude_deg')->nullable();
            $table->float('ville_latitude_deg')->nullable();
            $table->string('ville_longitude_grd', 9)->nullable();
            $table->string('ville_latitude_grd', 8)->nullable();
            $table->string('ville_longitude_dms', 9)->nullable();
            $table->string('ville_latitude_dms', 8)->nullable();
            $table->mediumInteger('ville_zmin')->nullable();
            $table->mediumInteger('ville_zmax')->nullable();
            
            $table->index(['ville_longitude_deg', 'ville_latitude_deg'], 'ville_longitude_latitude_deg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villes_france_free');
    }
}
