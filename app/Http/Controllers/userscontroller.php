<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = users::all();

        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name_users' => 'required',
            'adresse_users' => 'required',
            'telephone' => 'required',
            'fournisseur_id' => 'required',
            'formateur_id' => 'required',
        ]);
  
        fournisseur::create($request->all());
   
        return redirect()->route('users.index')
                        ->with('success','users created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        return view('users.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,users $users)
    {
        $request->validate([
            'id' => 'required',
            'name_users' => 'required',
            'adresse_users' => 'required',
            'telephone' => 'required',
            'fournisseur_id' => 'required',
            'formateur_id' => 'required',
            
        ]);
  
        $users->update($request->all());
  
        return redirect()->route('users.index')
                        ->with('success','users updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        $users->delete();
  
        return redirect()->route('users.index')
                        ->with('success','users deleted successfully');
    }
}
