<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    public function fournisseur()
    {
        return $this->belongsTo('App\Produit');
    }
}
