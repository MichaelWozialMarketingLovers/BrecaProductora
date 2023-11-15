<?php

namespace App\Http\Controllers;

use App\Subespectaculo;
use App\CarruselSubespectaculo;
use Illuminate\Http\Request;

class CarruselSubespectaculoController extends Controller
{
    public function index() {
        return view('configs.espectaculos.index');
    }


    public function create() {
        return view('configs.espectaculos.create');
    }


    public function store(Request $request) {
        
    }


    public function show(CarruselSubespectaculo $cse) {
        return view('configs.espectaculos.show', compact('cse'));
    }


    public function edit(CarruselSubespectaculo $cse) {
        return view('configs.espectaculos.edit', compact('cse'));
    }


    public function update(Request $request, CarruselSubespectaculo $cse) {
       
    }


    public function destroy(CarruselSubespectaculo $cse) {
      
    }
}
