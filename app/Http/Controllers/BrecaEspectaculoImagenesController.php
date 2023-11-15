<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrecaEspectaculoImagenes;

class BrecaEspectaculoImagenesController extends Controller
{
    public function index($espectaculo) {
        $galeria = BrecaEspectaculoImagenes::all();

        return view('configs.breca_espectaculos.galeria_imagenes.index', compact('espectaculo', 'galeria'));
    }

    public function store(Request $request) {
        $valid = $request->validate([
            'espectaculo' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();
        
        if ($foto = $request->file('foto')) {
            $destinationPath = 'img2/photos/breca_espectaculos/galeria/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $galeria = new BrecaEspectaculoImagenes;
        $galeria->espectaculo = $request->espectaculo;
        $galeria->foto = $profileImage;

        $galeria->save();
      
        return redirect()->route('config.breca_espectaculos.breca_espectaculos_imagenes.index', ['espectaculo' => $request->espectaculo])
                        ->with('success', 'El artista ha sido añadido exitosamente');
    }


    public function destroy(BrecaEspectaculoImagenes $galeria) {
        $ruta = 'img2/photos/breca_espectaculos/galeria/'.$galeria->foto;
        $galeria->delete();
        unlink($ruta);

        return redirect()->route('config.breca_espectaculos.breca_espectaculos_imagenes.index', ['espectaculo' => $galeria->espectaculo])
            ->with('success', 'Eliminado exitosamente');
    }
}
