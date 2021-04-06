<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fiche_techniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiche_technique = fiche_technique::all();

        return view('fiche_technique.index',compact('fiche_technique'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fiche_technique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nom_fiche' => 'required',
            'description_fiche' => 'required',
            'cout' => 'required',
            'produit_id' => 'required',
        ]);
  
        fiche_technique::create($request->all());
   
        return redirect()->route('fiche_technique.index')
                        ->with('success','fiche_technique created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  fiche_technique $fiche_technique
     * @return \Illuminate\Http\Response
     */
    public function show(fiche_technique $fiche_technique)
    {
        return view('fiche_technique.show',compact('fiche_technique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  fiche_technique $fiche_technique
     * @return \Illuminate\Http\Response
     */
    public function edit(fiche_technique $fiche_technique)
    {
        return view('fiche_technique.edit',compact('fiche_technique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fiche_technique $fiche_technique)
    {
        $request->validate([
            'id' => 'required',
            'nom_fiche' => 'required',
            'description_fiche' => 'required',
            'cout' => 'required',
            'produit_id' => 'required',
            
        ]);
  
        $fiche_technique->update($request->all());
  
        return redirect()->route('fiche_technique.index')
                        ->with('success','fiche_technique updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  fiche_technique $fiche_technique
     * @return \Illuminate\Http\Response
     */
    public function destroy(fiche_technique $fiche_technique)
    {
        $fiche_technique->delete();
  
        return redirect()->route('fiche_technique.index')
                        ->with('success','fiche_technique deleted successfully');
    }
}
