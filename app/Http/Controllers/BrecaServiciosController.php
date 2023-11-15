<?php

namespace App\Http\Controllers;

use App\BrecaServicio;
use Illuminate\Http\Request;

class BrecaServiciosController extends Controller
{
    public function index() {
        $servicios = BrecaServicio::all();

        return view('configs.servicios.index', compact('servicios'));
    }


    public function create() {
        return view('configs.servicios.create');
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contacto' => 'required',
        ]);
        
        $input = $request->all();

        if ($imagen = $request->file('foto')) {
            $destinationPath = 'img2/photos/servicios/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $servicios_resources = new BrecaServicio;

        $servicios_resources->titulo = $request->titulo;
        $servicios_resources->descripcion = $request->descripcion;
        $servicios_resources->foto = $profileImage;
        $servicios_resources->contacto = $request->contacto;
        $servicios_resources->save();
      
        return redirect()->route('config.servicios.index')
                        ->with('success', 'El servicio ha sido creado exitosamente');
    }


    public function show(BrecaServicio $servicios) {
        return view('configs.servicios.show', compact('servicios'));
    }


    public function edit(BrecaServicio $servicios) {
        return view('configs.servicios.edit', compact('servicios'));
    }


    public function update(Request $request, BrecaServicio $servicios) {
        $valid = $request->validate([
            'titulo' => '',
            'descripcion' => '',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contacto' => '',
        ]);
        
        $input = $request->all();

        if ($imagen = $request->file('foto')) {
            $destinationPath = 'img2/photos/servicios/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }else{
            unset($input['foto']);
        }

        
        $servicios->update($input);
      
        return redirect()->route('config.servicios.index')
                        ->with('success', 'El servicio ha sido actualizado exitosamente');
    }


    public function destroy(BrecaServicio $servicios) {
        $servicios->delete();

        return redirect()->route('config.servicios.index')
                        ->with('success', 'El servicio ha sido eliminado');
    }
}
