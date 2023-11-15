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
		<a href="{{ route('config.servicios.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
		<div class="row">
			<div class="col">
				<form action="{{ route('config.servicios.update', [$servicios->id]) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="form-group text-center">
						<div class="col-9 mx-auto">
							<label for="titulo"><h5>Titulo</h5></label>
							<input type="text" class="form-control" value="{{ $servicios->titulo }}" name="titulo" required>
							<input type="hidden" value="{{ $servicios->contacto }}" name="contacto" required>
						</div>
					</div>
					<div class="form-group text-center">
						<label for="descripcion"><h5>Descripción del servicio</h5></label>
						<textarea name="descripcion" id="descripcion" rows="10" value="{{ $servicios->descripcion }}" class="texteditor form-control" style="resize:none;">{{ $servicios->descripcion }}</textarea>
					</div>
					<div class="form-group text-center">
						<label for="foto"><h5>Fotografía</h5></label><br>
						<label for="foto" class="drop-container">
							<span class="drop-title">Arrastra o</span>
							or
							<input type="file" class="" id="foto" name="foto" value="{{ $servicios->foto }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
						</label>
						<div class="text-center">
							<small class="text-muted">Dimensiones sugeridas: 1900 x 700 px</small>
						</div>
					</div>
					{{--
					<div class="form-group text-center">
						<label for="contacto"><h5>Contacto</h5></label>
						<textarea name="contacto" id="contacto" rows="10" value="{{ $servicios->contacto }}" class="texteditor form-control" style="resize:none;">{{ $servicios->contacto }}</textarea>
					</div>
					--}}
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Actualizar servicio</button>
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

@endsection
@section('jsLibExtras2')

@endsection
@section('jqueryExtra')

@endsection
