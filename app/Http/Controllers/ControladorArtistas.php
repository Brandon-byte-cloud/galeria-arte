<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artistas;
class ControladorArtistas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista_artistas=Artistas::all();
        return $lista_artistas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {/*
        $artista = new Artistas();
        $artista->Artista = $request->Artista;
        $artista->Obra = $request->Obra;
        $artista->QR = $request->QR;
        $artista->save();
        return $artista; 
        */
        if ($request->has('id')) {
            $artista = Artistas::findOrFail($request->id);
        } else {
            $artista = new Artistas();
        }
        $artista->fill($request->all());
        $artista->save();
        return $artista;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artista = Artistas::findOrFail($id);
        return $artista;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artista = Artistas::findOrFail($id);
        return $artista;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $actualizar = Artistas::findOrFail($id);
        $actualizar->fill($request->all()); 
        $actualizar->save();
        return $actualizar;
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(string $id){
            $artista = Artistas::findOrFail($id);
            $artista->delete();
            return response()->json(["message" => "Eliminado correctamente", "id" => $id]);
        }
}
