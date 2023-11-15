<?php

namespace App\Http\Controllers;

use App\Artista;
use App\ArtistaGaleria;
use Illuminate\Http\Request;

class ArtistaGaleriaController extends Controller
{ 
    public function index($id) {
        $artista_galeria = ArtistaGaleria::where('artista',$id)->get();
        $artistap = $id;

        return view('configs.artistas.galeria_artista.index', compact('artistap', 'artista_galeria'));
    }


    public function create(Artista $artista) {
        $id = $artista->id;

        return view('configs.artistas.galeria_artista.create', compact('id'));
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'artista' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();

        // dd($request->artista);
        
        if ($imagen = $request->file('foto')) {
            $destinationPath = 'img2/photos/artista_galeria/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $artistas_galeria = new ArtistaGaleria;
        $artistas_galeria->artista = $request->artista;
        $artistas_galeria->foto = $profileImage;

        $artistas_galeria->save();
      
        return redirect()->route('config.artistas.artista_galeria.index', ['id' => $request->artista])
                        ->with('success', 'El artista ha sido añadido exitosamente');
    }


    // public function show(Artista $artista)
    // {
    //     return view('configs.artistas.galeria_artista.show', compact('artista'));
    // }


    // public function edit(Artista $artista)
    // {
    //     return view('configs.artistas.galeria_artista.edit', compact('artista'));
    // }


    // public function update(Request $request, Artista $artista)
    // {
    //     $valid = $request->validate([
    //         'nombre' => 'required',
    //         'apellidos' => 'required',
    //         'tipo_artista' => 'required',
    //         'descripcion' => 'required',
    //         'facebook' => 'required',
    //         'instagram' => 'required',
    //         'whatsapp' => 'required',
    //         'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
        
    //     $input = $request->all();
        
    //     if ($imagen = $request->file('foto')) {
    //         $destinationPath = 'img2/photos/artistas/';
    //         $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
    //         $imagen->move($destinationPath, $profileImage);
    //         $input['foto'] = "$profileImage";
    //     }else{
    //         unset($input['foto']);
    //     }

    //     $artista->update($input);

    //     return redirect()->route('config.artistas.galeria_artista.index')
    //                     ->with('success', 'El artista ha sido actualizado');
    // }


    public function destroy(ArtistaGaleria $artista) {
        $artista->delete();
      
        return redirect()->route('config.artistas.artista_galeria.index', ['id' => $artista->artista])
                        ->with('success','El artista fue eliminado');
    }
}
