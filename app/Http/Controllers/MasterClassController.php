<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterClass;

class MasterClassController extends Controller
{
    public function index() {
        $masterclass = MasterClass::all();

        return view('configs.masterclass.index', compact('masterclass'));
    }

    public function create() {
        return view('configs.masterclass.create');
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'imagen1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo1' => 'required',
            'descripcion1' => 'required',
            'contacto' => 'required',
        ]);
        
        $input = $request->all();

        if ($imagen1 = $request->file('imagen1')) {
            $destinationPath1 = 'img2/photos/masterclass/';
            $profileImage1 = date('YmdHis') . "." . $imagen1->getClientOriginalExtension();
            $imagen1->move($destinationPath1, $profileImage1);
            $input['imagen1'] = "$profileImage1";
        }

        $masterclass = new MasterClass;

        $masterclass->imagen1 = $profileImage1;
        $masterclass->titulo1 = $request->titulo1;
        $masterclass->descripcion1 = $request->descripcion1;
        $masterclass->contacto = $request->contacto;
        $masterclass->imagen2 = '';
        $masterclass->titulo2 = '';
        $masterclass->descripcion2 = '';

        $masterclass->save();
      
        return redirect()->route('config.masterclass.index')
                        ->with('success', 'Añadido exitosamente');
    }

    public function edit(MasterClass $masterclass) {
        return view('configs.masterclass.edit', compact('$masterclass'));
    }


    public function update(Request $request, BrecaEspectaculo $espectaculo) {
        $valid = $request->validate([
            'imagen1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo1' => 'required',
            'descripcion1' => 'required',
            'contacto' => 'required',
        ]);
        
        
        $input = $request->all();
        
        if ($imagen1 = $request->file('imagen1')) {
            $destinationPath1 = 'img2/photos/masterclass/';
            $profileImage1 = date('YmdHis') . "." . $imagen1->getClientOriginalExtension();
            $imagen1->move($destinationPath1, $profileImage1);
            $input['imagen1'] = "$profileImage1";
        } else {
            unset($input['imagen1']);
        }

        $masterclass->update($input);
      
        return redirect()->route('config.masterclass.index')
                        ->with('success', 'Modificado exitosamente');
    }


    public function destroy(MasterClass $masterclass) {
        $ruta1 = 'img2/photos/masterclass/'.$masterclass->imagen1;

        unlink($ruta1);

        $masterclass->delete();

        return redirect()->route('config.masterclass.index')
            ->with('success', 'Eliminado exitosamente');
    }
}
