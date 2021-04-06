<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable =[ 'nom', 'description', 'espece_id' ];

    public function fournisseur()
    {
        return $this->hasMany('App\Fournisseur');
    }

    public function formateur()
    {
        return $this->hasMany('App\Formateur');
    }
}
