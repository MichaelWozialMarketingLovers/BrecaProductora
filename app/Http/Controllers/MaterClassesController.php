<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterClasses;

class MaterClassesController extends Controller
{
    public function index() {
        $masterclass = MasterClasses::all();

        return view('configs.masterclass.index', compact('masterclass'));
    }

    public function create() {
        return view('configs.masterclass.create');
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required',
            'descripcion' => 'required',
            'contacto' => 'required',
        ]);
        
        $input = $request->all();

        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'img2/photos/masterclass/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }

        $masterclass = new MasterClasses;

        $masterclass->imagen = $profileImage;
        $masterclass->titulo = $request->titulo;
        $masterclass->descripcion = $request->descripcion;
        $masterclass->contacto = $request->contacto;

        $masterclass->save();
      
        return redirect()->route('config.masterclass.index')
                        ->with('success', 'Añadido exitosamente');
    }

    public function edit(MasterClasses $masterclass) {
        return view('configs.masterclass.edit', compact('masterclass'));
    }


    public function update(Request $request, MasterClasses $masterclass) {
        $valid = $request->validate([
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => '',
            'descripcion' => '',
            'contacto' => '',
        ]);
        
        
        $input = $request->all();
        
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'img2/photos/masterclass/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        } else {
            unset($input['imagen']);
        }

        $masterclass->update($input);
      
        return redirect()->route('config.masterclass.index')
                        ->with('success', 'Modificado exitosamente');
    }


    public function destroy(MasterClasses $masterclass) {
        $ruta1 = 'img2/photos/masterclass/'.$masterclass->imagen;

        unlink($ruta1);

        $masterclass->delete();

        return redirect()->route('config.masterclass.index')
            ->with('success', 'Eliminado exitosamente');
    }
}
