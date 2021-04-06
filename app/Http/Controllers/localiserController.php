<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localiser = localiser::all();

        return view('localiser.index',compact('localiser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('localiser.create');
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
            'region' => 'required',
            'zone_geographique_id' => 'required',
            'produit_id' => 'required',
            
        ]);
  
        localiser::create($request->all());
   
        return redirect()->route('localiser.index')
                        ->with('success','localiser created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(localiser $localiser)
    {
        return view('localiser.show',compact('localiser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(localiser $localiser)
    {
        return view('localiser.edit',compact('localiser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, localiser $localiser)
    {
        $request->validate([
            'region' => 'required',
            'zone_geographique_id' => 'required',
            'produit_id' => 'required',
            
        ]);
  
        $localiser->update($request->all());
  
        return redirect()->route('localiser.index')
                        ->with('success','localiser updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(localiser $localiser)
    {
        $localiser->delete();
  
        return redirect()->route('localiser.index')
                        ->with('success','localiser deleted successfully');
    }
}
