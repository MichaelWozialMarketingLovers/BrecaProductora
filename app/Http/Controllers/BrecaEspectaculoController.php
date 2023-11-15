<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrecaEspectaculo;
use App\BrecaEspectaculoImagenes;
use App\EspectaculoCategoria;

class BrecaEspectaculoController extends Controller
{
    public function index() {
        $espectaculos = BrecaEspectaculo::all();
        $galeria = BrecaEspectaculoImagenes::all();
        $categorias = EspectaculoCategoria::all();

        return view('configs.breca_espectaculos.index', compact('espectaculos', 'galeria', 'categorias'));
    }


    public function create() {
        $espectaculos_categorias = EspectaculoCategoria::all();

        return view('configs.breca_espectaculos.create', compact('espectaculos_categorias'));
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required',
            'descripcion' => 'required',
            'contacto' => 'required',
            'activo' => '',
            'categoria' => 'required',
        ]);
        
        $input = $request->all();
        $active = 0;

        if ($imagen = $request->file('imagen')) {
            $destinationPath1 = 'img2/photos/breca_espectaculos/';
            $profileImage1 = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath1, $profileImage1);
            $input['imagen'] = "$profileImage1";
        }

        if($request->activo == 'on') {
            $active = 1;
        } else {
            $active = 0;
        }

        $breca_espectaculos_resources = new BrecaEspectaculo;

        $breca_espectaculos_resources->imagen = $profileImage1;
        $breca_espectaculos_resources->titulo = $request->titulo;
        $breca_espectaculos_resources->descripcion = $request->descripcion;
        $breca_espectaculos_resources->contacto = $request->contacto;
        $breca_espectaculos_resources->activo = $active;
        $breca_espectaculos_resources->categoria = $request->categoria;

        $breca_espectaculos_resources->save();

        // $gale = new BrecaEspectaculoImagenes;
        // $defaultPic = 'img2/photos/default.png';
        // $gale->espectaculo = $breca_espectaculos_resources->id;
        // $gale->foto = $defaultPic;
        // $gale->save();
      
        return redirect()->route('config.breca_espectaculos.index')
                        ->with('success', 'El espectaculo ha sido a«Ðadido exitosamente');
    }

    public function edit(BrecaEspectaculo $espectaculo) {
        $espectaculos_categorias = EspectaculoCategoria::all();

        return view('configs.breca_espectaculos.edit', compact('espectaculo', 'espectaculos_categorias'));
    }


    public function update(Request $request, BrecaEspectaculo $espectaculo) {
        $valid = $request->validate([
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => '',
            'descripcion' => '',
            'contacto' => '',
            'categoriai' => '',
            'categorias' => '',
            'centinela' => '',
            'activo' => '',
        ]);
        
        $input = $request->all();
        $active = 0;
        $catAux = '';
        
        if ($imagen = $request->file('imagen')) {
            $destinationPath1 = 'img2/photos/breca_espectaculos/';
            $profileImage1 = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath1, $profileImage1);
            $input['imagen'] = "$profileImage1";
        }else{
            unset($input['imagen']);
        }

        if($request->activo == 'on') {
            $active = 1;
        } else {
            $active = 0;
        }

        if($request->centinela == '0') {
            $catAux = $request->categoriai;
        } else {
            $catAux = $request->categorias;
        }

        $input['activo'] = $active;
        $input['categoria'] = $catAux;

        $espectaculo->update($input);
      
        return redirect()->route('config.breca_espectaculos.index')
                        ->with('success', 'El espectaculo ha sido modificado exitosamente');
    }


    public function destroy(BrecaEspectaculo $espectaculo) {

        foreach(BrecaEspectaculoImagenes::all() as $galeria) {
            if($espectaculo->id == $galeria->espectaculo) {
                $galeria->delete();
            }
        }

        $espectaculo->delete();

        return redirect()->route('config.breca_espectaculos.index')
            ->with('success', 'El espectaculo fue eliminado exitosamente');
    }
}
