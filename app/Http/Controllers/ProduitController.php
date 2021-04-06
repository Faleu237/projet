<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
   public function index()
   {
       $produit =Produit::all();
       return view('welcome', compact('produit'));
   }

   public function show($id)
   {
    $produit= Produit::all()->where('id', $id)->first();
    return view('produit.show', compact('produit'));
   }
}
