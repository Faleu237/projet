<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    public function produits()
    {
        return $this->belongsTo('App\Produit');
    }
}
