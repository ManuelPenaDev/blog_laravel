<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Models\Artefacto;

class ArtefactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artefactos = Artefacto::all();
        return view('artefacto.index')->with('artefactos',$artefactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('artefacto.create');
    }

   
   
   
   
   
   
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artefactos = new Artefacto();
        $artefactos->codigo =$request->get('codigo');
        $artefactos->descripcion =$request->get('descripcion');
        $artefactos->cantidad =$request->get('cantidad');
        $artefactos->precio =$request->get('precio');

        $artefactos->save();
        return redirect()->route('artefacto'); 
 



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
