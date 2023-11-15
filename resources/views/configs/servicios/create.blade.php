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
	
	.drop-container {
		position: relative;
		display: flex;
		gap: 10px;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		height: 200px;
		padding: 20px;
		border-radius: 10px;
		border: 2px dashed #555;
		color: #444;
		cursor: pointer;
		transition: background .2s ease-in-out, border .2s ease-in-out;
	}

	.drop-container:hover {
		background: #eee;
		border-color: #111;
	}

	.drop-container:hover .drop-title {
		color: #222;
	}

	.drop-title {
		color: #444;
		font-size: 20px;
		font-weight: bold;
		text-align: center;
		transition: color .2s ease-in-out;
	}

	input[type=file] {
		width: 350px;
		max-width: 100%;
		color: #444;
		padding: 5px;
		background: #fff;
		border-radius: 10px;
		border: 1px solid #555;
	}

	input[type=file]::file-selector-button {
		margin-right: 0px;
		border: none;
		background: #084cdf;
		padding: 10px 20px;
		border-radius: 10px;
		color: #fff;
		cursor: pointer;
		transition: background .2s ease-in-out;
	}

	input[type=file]::file-selector-button:hover {
		background: #0d45a5;
	}

</style>
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.servicios.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
		<div class="row">
			<div class="col">
				<form action="{{ route('config.servicios.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group text-center">
						<div class="col-9 mx-auto">
							<label for="titulo"><h5>Titulo</h5></label>
							<input type="text" class="form-control" name="titulo" required>
							<input type="hidden" name="contacto" value="." required>
						</div>
					</div>
					<div class="form-group text-center">
						<label for="descripcion"><h5>Descripción del servicio</h5></label>
						<textarea name="descripcion" id="descripcion" rows="10" class="texteditor form-control" style="resize:none;">{{old('descripcion')}}</textarea>
					</div>
					<div class="form-group text-center">
						<label for="foto"><h5>Fotografía</h5></label><br>
						<label for="foto" class="drop-container">
							<span class="drop-title">Arrastra o</span>
							or
							<input type="file" class="" id="foto" name="foto" data-allowed-file-extensions="jpg png jpeg" data-weight="7em" required>
						</label>
						<div class="text-center">
							<small class="text-muted">Dimensiones sugeridas: 1900 x 700 px</small>
						</div>
					</div>
					{{--
					<div class="form-group text-center">
						<label for="contacto"><h5>Contacto</h5></label>
						<textarea name="contacto" id="contacto" rows="10" class="texteditor form-control" style="resize:none;">{{old('')}}</textarea>
					</div>
					--}}
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Agregar servicio</button>
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
