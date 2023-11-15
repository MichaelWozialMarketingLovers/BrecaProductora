<?php

namespace App\Http\Controllers;

use App\Espectaculo;
use App\Subespectaculo;
use App\Galeriasubespectaculo;
use Illuminate\Http\Request;

class SubespectaculoController extends Controller
{
    public function index($espectaculo) {
        $esp = Espectaculo::find($espectaculo);
        
         $aux = 0;


        // dd($esp);
        // if(!empty($esp->subespectaculo)){
        //     dd("no esta vacio");
        //     $esp->boton = 0;
        // }else{
        //     dd("vacio");
        //     $esp->boton = 1;
        // }

        $subespectaculo = Subespectaculo::all();

        foreach($subespectaculo as $s) {
            if($s->espectaculo == $espectaculo) {
                $aux = 1;
                break;
            } 
            $aux = 0;
        }
        
        $galeria = Galeriasubespectaculo::all();

        return view('configs.espectaculos.subespectaculos.index', compact('esp', 'subespectaculo', 'galeria', 'aux'));
    }


    public function create($espectaculo) {
        $esp = Espectaculo::find($espectaculo);

        return view('configs.espectaculos.subespectaculos.create', compact('espectaculo', 'esp'));
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'espectaculo' => 'required',
            'categoriapadre' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contactodetalle' => 'required',
        ]);
        
        $input = $request->all();
        
        if ($foto = $request->file('foto')) {
            $destinationPath = 'img2/photos/espectaculos/subespectaculos/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $subespectaculos_resources = new Subespectaculo;

        $subespectaculos_resources->espectaculo = $request->espectaculo;
        $subespectaculos_resources->categoriapadre = $request->categoriapadre;
        $subespectaculos_resources->titulo = $request->titulo;
        $subespectaculos_resources->descripcion = $request->descripcion;
        $subespectaculos_resources->foto = $profileImage;
        $subespectaculos_resources->contactodetalle = $request->contactodetalle;

        $subespectaculos_resources->save();
      
        return redirect()->route('config.espectaculos.subespectaculos.index', ['espectaculo' => $request->espectaculo])
                        ->with('success', 'El espectaculo ha sido añadido exitosamente');
    }


    public function show($subespectaculo) {
        $se = Subespectaculo::find($subespectaculo);
        return view('configs.espectaculos.subespectaculos.show', compact('se'));
    }


    public function edit(Subespectaculo $subespectaculo) {
        return view('configs.espectaculos.subespectaculos.edit', compact('subespectaculo'));
    }


    public function update(Request $request, Subespectaculo $subespectaculo) {
        $valid = $request->validate([
            'espectaculo' => 'required',
            'categoriapadre' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contactodetalle' => 'required',
        ]);
        
        $input = $request->all();
        
        if ($foto = $request->file('foto')) {
            $destinationPath = 'img2/photos/espectaculos/subespectaculos/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }else{
            unset($input['foto']);
        }

        $subespectaculo->update($input);
      
        return redirect()->route('config.espectaculos.subespectaculos.index', ['espectaculo' => $request->espectaculo])
                        ->with('success', 'El espectaculo ha sido añadido exitosamente');
    }


    public function destroy(Subespectaculo $subespectaculo) {
       
        foreach(Galeriasubespectaculo::all() as $galeria) {
            if($subespectaculo->id == $galeria->subespectaculo) {
                $galeria->delete();
            }
        }
        
        $subespectaculo->delete();

        return redirect()->route('config.espectaculos.index')
            ->with('success', 'Eliminado exitosamente');
    }
}
 
