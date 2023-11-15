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
                        <form action="{{ route('config.espectaculos.subespectaculos.update', [$subespectaculo->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
							@method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row text-start">
                                        <div class="col-12 mx-auto text-start">
                                            <input type="hidden" name="espectaculo" id="espectaculo" value="{{ $subespectaculo->espectaculo }}" class="form-control" required>
                                            <input type="hidden" name="categoriapadre" id="categoriapadre" value="{{ $subespectaculo->categoriapadre }}" class="form-control" required>
                                            <label for="titulo"><h2>Titulo</h2></label>
                                            <input type="text" name="titulo" id="titulo" value="{{ $subespectaculo->titulo }}" class="form-control" required>
                                            <div class="form-group text-center">
                                                <label for="descripcion"><h2>Descripción</h2></label>
                                                <textarea name="descripcion" id="descripcion" rows="10" value="{{ $subespectaculo->descripcion }}" class="texteditor form-control" style="resize:none;">{{ $subespectaculo->descripcion }}</textarea>
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="form-group row text-center">
                                        <div class="col mx-auto text-center">
                                            <label for="foto"><h2>Foto</h2></label>
                                            <label for="foto" class="drop-container">
                                                <span class="drop-title">Arrastra o</span>
                                                or
                                                <input type="file" class=""  id="foto" name="foto" value="{{ $subespectaculo->foto }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                            </label>
                                        </div>        
                                    </div>  
                                    <div class="form-group row text-center">
                                        <div class="col text-center">
                                            <label for="contactodetalle"><h2>Sección de contacto</h2></label>
                                            <textarea name="contactodetalle" id="contactodetalle" value="{{ $subespectaculo->contactodetalle }}" rows="10" class="texteditor form-control" style="resize:none;">{{ $subespectaculo->contactodetalle }}</textarea>
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
