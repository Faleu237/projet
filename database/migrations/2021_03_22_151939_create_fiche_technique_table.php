<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('fiche_technique', function (Blueprint $table) {
        //     $table->string('description');
        //     $table->integer('cout');
        //     $table->foreignId('produit_id')->constrained('produit')->onDelete('cascade');
        //     $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('fiche_technique');
    }
}
