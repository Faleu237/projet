<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localiser extends Model
{
    protected $fillable = [
        'region',
        'zone_geographique_id',
        'produit_id',      
    ];
	
}
