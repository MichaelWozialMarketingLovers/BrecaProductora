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
        <div class="col-12">
            <a href="{{ route('config.artistas.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
        </div>
        <div class="col-12 text-center">
            <h1>Editar artista</h1>
        </div>
    </div>

    <div class="container-fluid mx-auto">
		<div class="card border" style="border-radius: 16px;">
			<div class="card-body">
				<form action="{{ route('config.artistas.update', [$artista->id]) }}" method="post" enctype="multipart/form-data">
					@csrf
                    @method('PUT')

					<div class="form-group row text-center">
						<div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<label for="nombre"><h5>Nombre</h5></label>
							<input type="text" name="nombre" id="nombre" value="{{ $artista->nombre }}" class="form-control">
						</div>
                        <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<label for="apellidos"><h5>Apellidos</h5></label>
							<input type="text" name="apellidos" id="apellidos" value="{{ $artista->apellidos }}" class="form-control">
						</div>
					</div>
                    <div class="form-group row text-center">
						<div class="col-xl-6 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<label for="tipo_artista"><h5>Tipo de artista</h5></label>
							<input type="text" name="tipo_artista" id="tipo_artista" value="{{ $artista->tipo_artista }}" class="form-control">
							
							<input type="hidden" name="facebook" id="facebook" value=".">
							<input type="hidden" name="instagram" id="instagram" value=".">
							<input type="hidden" name="whatsapp" id="whatsapp" value=".">
							
						</div>
					</div>
					<div class="form-group text-center">
						<label for="descripcion"><h5>Descripción del artista</h5></label>
						<textarea name="descripcion" id="descripcion" rows="10" class="texteditor form-control" style="resize:none;">{{ $artista->descripcion }}</textarea>
					</div>
					{{--
                    <div class="form-group row text-center">
						<div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<label for="facebook"><h5>Facebook</h5></label>
							<input type="text" name="facebook" id="facebook" value="{{ $artista->facebook }}" class="form-control">
						</div>
                        <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<label for="instagram"><h5>Instagram</h5></label>
							<input type="text" name="instagram" id="instagram" value="{{ $artista->instagram }}" class="form-control">
						</div>
                        <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<label for="whatsapp"><h5>Whatsapp</h5></label>
							<input type="text" name="whatsapp" id="whatsapp" value="{{ $artista->whatsapp }}" class="form-control">
						</div>
					</div>
					--}}
					<div class="row">
						<div class="col-xl-6 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto form-group text-center">
							<label for="foto"><h5>Fotografía del artista</h5></label><br>
							<input type="file" id="foto" name="foto"  value="{{ $artista->foto }}" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-weight="7em"/>
							<div class="text-center">
								<small class="text-muted">Dimensiones sugeridas: 1900 x 700 px</small>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary">Actualizar artista</button>
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
