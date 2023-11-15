<?php

namespace App\Http\Controllers;

use App\Artista;
use App\ArtistaGaleria;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        $galeria = ArtistaGaleria::all();

        return view('configs.artistas.index', compact('artistas', 'galeria'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configs.artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'tipo_artista' => 'required',
            'descripcion' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'whatsapp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();
        
        if ($imagen = $request->file('foto')) {
            $destinationPath = 'img2/photos/artistas/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $artistas_resources = new Artista;
        $artistas_resources->nombre = $request->nombre;
        $artistas_resources->apellidos = $request->apellidos;
        $artistas_resources->tipo_artista = $request->tipo_artista;
        $artistas_resources->descripcion = $request->descripcion;
        $artistas_resources->facebook = $request->facebook;
        $artistas_resources->instagram = $request->instagram;
        $artistas_resources->whatsapp = $request->whatsapp;
        $artistas_resources->foto = $profileImage;

        $artistas_resources->save();
      
        return redirect()->route('config.artistas.index')
                        ->with('success', 'El artista ha sido añadido exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        return view('configs.artistas.show', compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artista)
    {
        return view('configs.artistas.edit', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artista $artista)
    {
        $valid = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'tipo_artista' => 'required',
            'descripcion' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'whatsapp' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();
        
        if ($imagen = $request->file('foto')) {
            $destinationPath = 'img2/photos/artistas/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }else{
            unset($input['foto']);
        }

        $artista->update($input);

        return redirect()->route('config.artistas.index')
                        ->with('success', 'El artista ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artista $artista)
    {
        $artista->delete();
      
        return redirect()->route('config.artistas.index')
                        ->with('success','El artista fue eliminado');
    }
}
