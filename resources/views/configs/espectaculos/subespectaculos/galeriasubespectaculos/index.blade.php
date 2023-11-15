@extends('layouts.admin')
@section('cssExtras')

@endsection
@section('jsLibExtras')

@endsection
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
@section('styleExtras')

@endsection
@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.espectaculos.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto" style="border-radius: 16px;"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid mx-auto">
		<div class="card border" style="border-radius: 16px">
			<div class="card-body">
				<form action="{{ route('config.espectaculos.subespectaculos.galeriasubespectaculos.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-xl-6 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto form-group text-center">
							<label for="foto"><h5>Fotografía</h5></label><br>
                            <input type="hidden" name="subespectaculo" id="subespectaculo" value="{{ $subespectaculo }}" required/>
							<label for="foto" class="drop-container">
								<span class="drop-title">Arrastra o</span>
								or
								<input type="file" class=""  id="foto" name="foto" data-allowed-file-extensions="jpg png jpeg" data-weight="7em" required>
							</label>
							<div class="text-center">
								<small class="text-muted">Dimensiones sugeridas: 1900 x 700 px</small>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary" style="border-radius: 16px;">Insertar a la galeria</button>
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

    <div class="container-fluid p-5">
        <div class="row">
            @foreach ($galeria_subespectaculo as $gse)
                @if ($gse->subespectaculo == $subespectaculo)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
					<div class="card border" style="border-radius: 16px;">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<img src="{{ asset('img2/photos/espectaculos/subespectaculos/galeria/'.$gse->foto) }}" alt="" class="img-fluid px-2" width="100%" height="100%">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col">
									<form action="{{ route('config.espectaculos.subespectaculos.galeriasubespectaculos.destroy', [$gse->id]) }}" method="POST" style="display: inline;">						
										@csrf
										@method('DELETE') 
										<button type="submit" class="btn btn-danger btn-block bg-white" style="border-radius: 16px;">Eliminar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endif
            @endforeach
        </div>
    </div>

@endsection
@section('jsLibExtras2')

@endsection
@section('jqueryExtra')

@endsection
