<?php

namespace App\Http\Controllers;

use App\Services;
use App\Xaragne;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services=Services::All();
        return view('panel',compact('services'));
        
    }
    public function envoi()
    {
        //
        $services=Services::All();
        return view('index',compact('services'));

        
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recuperation des données

        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $services= new \App\Services;
        $services->titre=$request->get('titre');
        $services->descriptions=$request->get('descriptions');       
        $services->file=$name;
        $services->save();
        
        return redirect('services')->with('success', 'services ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //envoyer les champs id et services à la vue
        $services = Services::find($id);
        return view('edit',compact('services','id'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services =Services::find($id);
        //  $services= \App\services::find($id);
        if($request->hasfile('filename'))
        {
           $file = $request->file('filename');
           $name=time().$file->getClientOriginalName();
           $file->move(public_path().'/images/', $name);
        }
        $services->titre=$request->get('titre');
        $services->descriptions=$request->get('descriptions');
        
        $services->save();
        return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //pour effacer
        $services = Services::find($id);
        $services->delete();
        return redirect('services')->with('success','services supprimé avec succées');

    }
}
