<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fiche_technique extends Model
{
    protected $fillable = [
        'id',
        'nom_fiche',
        'description_fiche',
        'cout',
    ];
         
    public function produit()
    {
        return $this->belongsTo('App\produit');
    }
}
