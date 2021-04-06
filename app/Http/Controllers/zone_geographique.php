<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zone_geographique extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('zone_geographique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $request->validate([
            'id' => 'required',
            'nom_zone' => 'required',
            'superficie' => 'required',
            
            
        ]);
  
        zone_geographique::create($request->all());
   
        return redirect()->route('zone_geographique.index')
                        ->with('success','zone_geographique created successfully.');
                        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(zone_geographique $zone_geographique)
    {
       // return view('zone_geographique.show',compact('zone_geographique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(zone_geographique $zone_geographique)
    {
      //  return view('zone_geographique.edit',compact('zone_geographique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,zone_geographique $zone_geographique)
    {
      /*  $request->validate([
            'id' => 'required',
            'nom_zone' => 'required',
            'superficie' => 'required',
            
        ]);
  
        $zone_geographique->update($request->all());
  
        return redirect()->route('zone_geographique.index')
                        ->with('success','zone_geographique updated successfully');
     */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(zone_geographique $zone_geographique)
    {
      /*  $zone_geographique->delete();
  
        return redirect()->route('zone_geographique.index')
                        ->with('success','zone_geographique deleted successfully');
                        */
    }
}
