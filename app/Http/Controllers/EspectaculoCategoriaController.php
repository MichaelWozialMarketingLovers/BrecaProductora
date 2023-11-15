<?php

namespace App\Http\Controllers;

use App\BrecaEspectaculo;
use App\BrecaEspectaculoImagenes;
use App\EspectaculoCategoria;
use Illuminate\Http\Request;

class EspectaculoCategoriaController extends Controller
{
    public function index() {
        $categorias = EspectaculoCategoria::all();

        return view('configs.categorias.index', compact('categorias'));
    }


    public function create() {
        return view('configs.categorias.create');
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'categoria' => 'required',
        ]);
        
        $input = $request->all();

        $categorias_resources = new EspectaculoCategoria;
        $categorias_resources->categoria = $request->categoria;
        $categorias_resources->save();
      
        return redirect()->route('config.categorias.index')
                        ->with('success', 'El espectaculo ha sido añadido exitosamente');
    }


    public function edit(EspectaculoCategoria $categoria) {
        return view('configs.categorias.edit', compact('categoria'));
    }


    public function update(Request $request, EspectaculoCategoria $categoria) {
        $valid = $request->validate([
            'categoria' => 'required',
        ]);
        
        $input = $request->all();

        $categoria->update($input);

        return redirect()->route('config.categorias.index')
                        ->with('success', 'La categoria ha sido actualizado');
    }


    // public function test() {
    //     $espectaculo = Espectaculo::all();
    //     $categorias = EspectaculoCategoria::all();

    //     return view('configs.categorias.test', compact('espectaculo', 'categorias'));
    // }


    public function destroy(EspectaculoCategoria $categoria) {

        foreach(BrecaEspectaculo::all() as $espectaculo) {
            if($categoria->id == $espectaculo->categoria) {
                foreach(BrecaEspectaculoImagenes::all() as $galeria) {
                    if($espectaculo->id == $galeria->espectaculo) {
                        $galeria->delete();
                    }
                }
                $espectaculo->delete();
            }
        }

        // foreach(Espectaculo::all() as $espectaculo) {
        //     if($categoria->id == $espectaculo->categoria) {
        //         foreach(Subespectaculo::all() as $subespectaculo) {
        //             if($espectaculo->id == $subespectaculo->espectaculo) {
        //                 foreach(Galeriasubespectaculo::all() as $galeria) {
        //                     if($subespectaculo->id == $galeria->subespectaculo) {
        //                         $galeria->delete();
        //                     }
        //                 }
        //                 $subespectaculo->delete();
        //             }
        //         }
        //         $espectaculo->delete();
        //     }
        // }
        
        $categoria->delete();

        return redirect()->route('config.categorias.index')
            ->with('success', 'La categoria fue eliminada');
    }
}
