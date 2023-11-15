<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\ServicioDetalle;
use Illuminate\Http\Request;

class ServiciosDetallesController extends Controller
{
    public function index() {
        return view('configs.servicios.index');
    }


    public function create() {
        return view('configs.servicios.create');
    }


    public function store(Request $request) {
        
    }


    public function show(Servicio $servicios) {
        return view('configs.servicios.show', compact('servicios'));
    }


    public function edit(Servicio $servicios) {
        return view('configs.servicios.edit', compact('servicios'));
    }


    public function update(Request $request, Servicios $servicios) {
       
    }


    public function destroy(Servicios $servicios) {
      
    }
}
