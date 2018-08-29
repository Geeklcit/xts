<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $team=Team::All();
        
        return view('team/pane',compact('team'));
        
    }
    public function envoi_membre()
    {
        //
        $team=Team::All();
        return view('index',compact('team'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('team/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //recuperation des données

         if($request->hasfile('photo'))
         {
            $photo = $request->file('photo');
            $name=time().$photo->getClientOriginalName();
            $photo->move(public_path().'/images/', $name);
         }
      
        $team = new \App\Team;
        $team->nom=$request->get('nom');
        $team->poste=$request->get('poste');       
        $team->photo=$name;
        $team->save();
        
        return redirect('/')->with('success', 'membre ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //envoyer les champs id et services à la vue
          $team = Team::find($id);
          return view('team/edit',compact('team','id'));
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   $team =Team::find($id);
        if($request->hasfile('photo'))
         {
            $photo = $request->file('photo');
            $name = time().$photo->getClientOriginalName();
            $photo->move(public_path().'/images/',$name);
            
         }
        $team = new \App\Team;
        $team->nom=$request->get('nom');
        $team->poste=$request->get('poste'); 
        $team->photo=$name;      
        $team->save();
        return redirect('/team')->with('success','membre modifié avec succés');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('team')->with('success','membre supprimé avec succées');
    }
}
