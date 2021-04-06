<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zone_geographique extends Model
{
    protected $fillable = [
        'id',
        'nom_zone',
        'superficie',     
    ];
    public function produit()
    {
        return $this->belongsToMany(produit::class);
    }
}
