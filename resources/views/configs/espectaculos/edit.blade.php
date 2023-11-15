@extends('layouts.admin')

@section('cssExtras')
@endsection

@section('jsLibExtras')
@endsection

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
		<a href="{{ route('config.espectaculos.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card border" style="border-radius: 16px;">
                    <div class="card-body text-center">
                        <form action="{{ route('config.espectaculos.update', [$espectaculo->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
							@method('PUT')

                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5 px-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="fotoshow">Fotografia</label>
                                                <label for="fotoshow" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="fotoshow" name="fotoshow" value="{{ $espectaculo->fotoshow }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                                </label>
                                            </div>
                                        </div>                                          
                                    </div>
                                    <div class="form-group row text-start">
                                        <div class="col-12 mx-auto text-start">
                                            <label for="tituloshow" style="display: none;">Titulo</label>
                                            <input type="hidden" name="tituloshow" id="tituloshow" value="{{ $espectaculo->tituloshow }}" class="form-control" required>
                                            <label for="subtituloshow" style="display: none;">Subtitulo</label>
                                            <input type="hidden" name="subtituloshow" id="subtituloshow" value="{{ $espectaculo->subtituloshow }}" class="form-control" required> 
                                        </div>
                                    </div>            
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 px-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="fotocentro">Imágen</label>
                                                <label for="fotocentro" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="fotocentro" name="fotocentro" value="{{ $espectaculo->fotocentro }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                                </label>
                                            </div>
                                        </div>                                          
                                    </div>
                                    <div class="form-group row text-start">
                                        <div class="col-12 mx-auto text-start">
                                            <label for="titulocentro" style="display: none;">Titulo</label>
                                            <input type="hidden" name="titulocentro" id="titulocentro" value="{{ $espectaculo->titulocentro }}" class="form-control" required>
                                            <label for="subtitulocentro" style="display: none;">Subtitulo</label>
                                            <input type="hidden" name="subtitulocentro" id="subtitulocentro" value="{{ $espectaculo->subtitulocentro }}" class="form-control" required> 
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5 px-5 mx-auto">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="fotolateral">Fotografia</label>
                                                <label for="fotolateral" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="fotolateral" name="fotolateral" value="{{ $espectaculo->fotolateral }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                                </label>
                                            </div>
                                        </div>                                          
                                    </div>
                                    <div class="form-group row text-start">
                                        <div class="col-12 mx-auto text-start">
                                            <label for="titulolateral" style="display: none;">Titulo</label>
                                            <input type="hidden" name="titulolateral" id="titulolateral" value="{{ $espectaculo->titulolateral }}" class="form-control" required>
                                            <label for="subtitulolateral" style="display: none;">Subtitulo</label>
                                            <input type="hidden" name="subtitulolateral" id="subtitulolateral" value="{{ $espectaculo->subtitulolateral }}" class="form-control" required> 
                                            <label for="descripcionlateral" style="display: none;">Descripción</label>
                                            <input type="hidden" name="descripcionlateral" id="descripcionlateral" value="{{ $espectaculo->descripcionlateral }}" class="form-control" required> 
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5 px-5 mx-auto">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="fotoizq">Imágen</label>
                                                <label for="fotoizq" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="fotoizq" name="fotoizq" value="{{ $espectaculo->fotoizq }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                                </label>
                                            </div>
                                        </div>                                          
                                    </div>        
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center mx-auto">
                                    {{-- <div class="row">
                                        <div class="col">
                                            <p>Categoria del espectaculo</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <a href="{{ route('config.categorias.index') }}" class="btn btn-outline">Crear o modificar categorias</a>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 text-center">
                                            <select name="categoria" id="" class="form-control">
                                                @foreach ($espectaculos_categorias as $ec)
                                                    <option value="{{ $espectaculo->categoria }}">{{ $ec->categoria }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
									<input type="hidden" name="categoria" value="{{ $espectaculo->categoria }}">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5 px-5 mx-auto">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="fotoder">Imágen</label>
                                                <label for="fotoder" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="fotoder" name="fotoder" value="{{ $espectaculo->fotoder }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                                </label>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Actualizar Espectaculo</button>
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
@section('jqueryExtra')

@endsection
