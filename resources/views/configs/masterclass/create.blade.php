@extends('layouts.admin')

@section('styleExtras')
<style>
    /* mas estilisado */	
    body{
        background-color: #e5e8eb  !important;
    }

    .card-header {
        background-color: #b0c1d1  !important;
        border-radius: 25px;
    }

    .black-skin .btn-primary {
        background-color: #b0c1d1  !important;
    }

    .btn {
        box-shadow: none;
        border-radius: 15px;
    }
    /* mas estilisado */
</style>
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.masterclass.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Nuevo en Master Class</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <form action="{{ route('config.masterclass.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mx-auto text-center col-xs-12 mt-5 px-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="imagen" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="imagen" name="imagen" data-allowed-file-extensions="jpg png jpeg" data-weight="7em" required>
                                                </label>
                                            </div>
                                        </div>                                          
                                    </div>            
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mx-auto text-center col-xs-12 mt-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="titulo">Titulo</label>
                                                <input type="text" name="titulo" class="texteditor form-control">
                                                <input type="hidden" name="contacto" value=".">
                                            </div>
                                        </div>                                
                                    </div>            
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mx-auto text-center col-xs-12 mt-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="descripcion">descripción</label>
                                                <input type="text" name="descripcion" class="texteditor form-control">
                                            </div>
                                        </div>                                
                                    </div>            
                                </div>  
                            </div>
                            {{--
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mx-auto text-center col-xs-12 mt-5">
                                    <div class="form-group row text-center"> 
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="contacto">Contacto</label>
                                                <input type="text" name="contacto" class="texteditor  '¿'  form-control">
                                            </div>
                                        </div>                                          
                                    </div>            
                                </div>  
                            </div>
                            --}}
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Crear Espectaculo</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
        
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsLibExtras2')

@endsection
