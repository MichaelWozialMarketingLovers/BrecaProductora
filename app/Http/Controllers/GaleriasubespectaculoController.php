<?php

namespace App\Http\Controllers;

use App\Subespectaculo;
use App\Galeriasubespectaculo;
use Illuminate\Http\Request;

class GaleriasubespectaculoController extends Controller
{
    public function index($subespectaculo) {
        $galeria_subespectaculo = Galeriasubespectaculo::all();

        return view('configs.espectaculos.subespectaculos.galeriasubespectaculos.index', compact('subespectaculo', 'galeria_subespectaculo'));
    }


    public function create($subespectaculo) {
        
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'subespectaculo' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();
        
        if ($imagen = $request->file('foto')) {
            $destinationPath = 'img2/photos/espectaculos/subespectaculos/galeria/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $galeriase = new Galeriasubespectaculo;
        $galeriase->subespectaculo = $request->subespectaculo;
        $galeriase->foto = $profileImage;

        $galeriase->save();
      
        return redirect()->route('config.espectaculos.subespectaculos.galeriasubespectaculos.index', ['subespectaculo' => $request->subespectaculo])
                        ->with('success', 'El artista ha sido añadido exitosamente');
    }


    public function destroy(Galeriasubespectaculo $galeriasubespectaculo) {
        $galeriasubespectaculo->delete();

        return redirect()->route('config.espectaculos.subespectaculos.galeriasubespectaculos.index', ['subespectaculo' => $galeriasubespectaculo->subespectaculo])
            ->with('success', 'Eliminado exitosamente');
    }
}
 