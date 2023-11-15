<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarruselMarca;

class CarruselMarcasController extends Controller
{
    public function index() {
        $carrusel = CarruselMarca::all();

        return view('configs.carrusel_marcas.index', compact('carrusel'));
    }

    public function store(Request $request) {
        $valid = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $input = $request->all();
        
        if ($foto = $request->file('foto')) {
            $destinationPath = 'img2/photos/carrusel_marcas/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $carrusel = new CarruselMarca;
        $carrusel->foto = $profileImage;

        $carrusel->save();
      
        return redirect()->route('config.carrusel_marcas.index', ['id' => $request->id])
                        ->with('success', 'El artista ha sido añadido exitosamente');
    }


    public function destroy(CarruselMarca $carrusel) {
        $ruta = 'img2/photos/carrusel_marcas/'.$carrusel->foto;
        $carrusel->delete();
        unlink($ruta);

        return redirect()->route('config.carrusel_marcas.index', ['carrusel' => $carrusel->id])
            ->with('success', 'Eliminado exitosamente');
    }
}
