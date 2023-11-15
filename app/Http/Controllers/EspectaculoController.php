<?php

namespace App\Http\Controllers;

use App\Espectaculo;
use App\EspectaculoCategoria;
use App\Subespectaculo;
use App\Galeriasubespectaculo;
use Illuminate\Http\Request;

class EspectaculoController extends Controller
{
    public function index() {
        $espectaculos = Espectaculo::all();

        return view('configs.espectaculos.index', compact('espectaculos'));
    }


    public function create() {
        $espectaculos_categorias = EspectaculoCategoria::all();

        return view('configs.espectaculos.create', compact('espectaculos_categorias'));
    }


    public function store(Request $request) {
        $valid = $request->validate([
            'fotoshow' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tituloshow' => 'required',
            'subtituloshow' => 'required',
            'fotocentro' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulocentro' => 'required',
            'subtitulocentro' => 'required',
            'fotolateral' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulolateral' => 'required',
            'subtitulolateral' => 'required',
            'descripcionlateral' => 'required',
            'fotoizq' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fotoder' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categoria' => 'required',
        ]);
        
        $input = $request->all();
        
        if ($fotoshow = $request->file('fotoshow')) {
            $destinationPath1 = 'img2/photos/espectaculos/1/';
            $profileImage1 = date('YmdHis') . "." . $fotoshow->getClientOriginalExtension();
            $fotoshow->move($destinationPath1, $profileImage1);
            $input['fotoshow'] = "$profileImage1";
        }

        if ($fotocentro = $request->file('fotocentro')) {
            $destinationPath2 = 'img2/photos/espectaculos/2/';
            $profileImage2 = date('YmdHis') . "." . $fotocentro->getClientOriginalExtension();
            $fotocentro->move($destinationPath2, $profileImage2);
            $input['fotocentro'] = "$profileImage2";
        }

        if ($fotolateral = $request->file('fotolateral')) {
            $destinationPath3 = 'img2/photos/espectaculos/3/';
            $profileImage3 = date('YmdHis') . "." . $fotolateral->getClientOriginalExtension();
            $fotolateral->move($destinationPath3, $profileImage3);
            $input['fotolateral'] = "$profileImage3";
        }

        if ($fotoizq = $request->file('fotoizq')) {
            $destinationPath4 = 'img2/photos/espectaculos/4/';
            $profileImage4 = date('YmdHis') . "." . $fotoizq->getClientOriginalExtension();
            $fotoizq->move($destinationPath4, $profileImage4);
            $input['fotoizq'] = "$profileImage4";
        }

        if ($fotoder = $request->file('fotoder')) {
            $destinationPath5 = 'img2/photos/espectaculos/5/';
            $profileImage5 = date('YmdHis') . "." . $fotoder->getClientOriginalExtension();
            $fotoder->move($destinationPath5, $profileImage5);
            $input['fotoder'] = "$profileImage5";
        }

        // dd([$profileImage1, $profileImage2, $profileImage3, $profileImage4, $profileImage5]);

        $espectaculos_resources = new Espectaculo;

        $espectaculos_resources->fotoshow = $profileImage1;
        $espectaculos_resources->tituloshow = $request->tituloshow;
        $espectaculos_resources->subtituloshow = $request->subtituloshow;
        $espectaculos_resources->fotocentro = $profileImage2;
        $espectaculos_resources->titulocentro = $request->titulocentro;
        $espectaculos_resources->subtitulocentro = $request->subtitulocentro;
        $espectaculos_resources->fotolateral = $profileImage3;
        $espectaculos_resources->titulolateral = $request->titulolateral;
        $espectaculos_resources->subtitulolateral = $request->subtitulolateral;
        $espectaculos_resources->descripcionlateral = $request->descripcionlateral;
        $espectaculos_resources->fotoizq = $profileImage4;
        $espectaculos_resources->fotoder = $profileImage5;
        $espectaculos_resources->categoria = $request->categoria;

        $espectaculos_resources->save();
      
        return redirect()->route('config.espectaculos.index')
                        ->with('success', 'El espectaculo ha sido añadido exitosamente');
    }


    public function show(Espectaculo $espectaculo) {
        return view('configs.espectaculos.show', compact('espectaculo'));
    }


    public function edit(Espectaculo $espectaculo) {
        $espectaculos_categorias = EspectaculoCategoria::all();

        return view('configs.espectaculos.edit', compact('espectaculo', 'espectaculos_categorias'));
    }


    public function update(Request $request, Espectaculo $espectaculo) {
        $valid = $request->validate([
            'fotoshow' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tituloshow' => 'required',
            'subtituloshow' => 'required',
            'fotocentro' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulocentro' => 'required',
            'subtitulocentro' => 'required',
            'fotolateral' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulolateral' => 'required',
            'subtitulolateral' => 'required',
            'descripcionlateral' => 'required',
            'fotoizq' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fotoder' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categoria' => 'required',
        ]);
        
        $input = $request->all();
        
        if ($fotoshow = $request->file('fotoshow')) {
            $destinationPath1 = 'img2/photos/espectaculos/1/';
            $profileImage1 = date('YmdHis') . "." . $fotoshow->getClientOriginalExtension();
            $fotoshow->move($destinationPath1, $profileImage1);
            $input['fotoshow'] = "$profileImage1";
        }else{
            unset($input['fotoshow']);
        }

        if ($fotocentro = $request->file('fotocentro')) {
            $destinationPath2 = 'img2/photos/espectaculos/2/';
            $profileImage2 = date('YmdHis') . "." . $fotocentro->getClientOriginalExtension();
            $fotocentro->move($destinationPath2, $profileImage2);
            $input['fotocentro'] = "$profileImage2";
        }else{
            unset($input['fotocentro']);
        }

        if ($fotolateral = $request->file('fotolateral')) {
            $destinationPath3 = 'img2/photos/espectaculos/3/';
            $profileImage3 = date('YmdHis') . "." . $fotolateral->getClientOriginalExtension();
            $fotolateral->move($destinationPath3, $profileImage3);
            $input['fotolateral'] = "$profileImage3";
        }else{
            unset($input['fotolateral']);
        }

        if ($fotoizq = $request->file('fotoizq')) {
            $destinationPath4 = 'img2/photos/espectaculos/4/';
            $profileImage4 = date('YmdHis') . "." . $fotoizq->getClientOriginalExtension();
            $fotoizq->move($destinationPath4, $profileImage4);
            $input['fotoizq'] = "$profileImage4";
        }else{
            unset($input['fotoizq']);
        }

        if ($fotoder = $request->file('fotoder')) {
            $destinationPath5 = 'img2/photos/espectaculos/5/';
            $profileImage5 = date('YmdHis') . "." . $fotoder->getClientOriginalExtension();
            $fotoder->move($destinationPath5, $profileImage5);
            $input['fotoder'] = "$profileImage5";
        }else{
            unset($input['fotoder']);
        }

        $espectaculo->update($input);
      
        return redirect()->route('config.espectaculos.index')
                        ->with('success', 'El espectaculo ha sido modificado exitosamente');
    }


    public function destroy(Espectaculo $espectaculo) {

        foreach(Subespectaculo::all() as $subespectaculo) {
            if($espectaculo->id == $subespectaculo->espectaculo) {
                foreach(Galeriasubespectaculo::all() as $galeria) {
                    if($subespectaculo->id == $galeria->subespectaculo) {
                        $galeria->delete();
                    }
                }
                $subespectaculo->delete();
            }
        }

        $espectaculo->delete();

        return redirect()->route('config.espectaculos.index')
            ->with('success', 'El espectaculo fue eliminado exitosamente');
    }
} 
