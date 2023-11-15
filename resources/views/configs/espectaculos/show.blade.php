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

    <div class="container-fluid bg-white border" style="border-radius: 16px;">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col py-2">
						<img src="{{ asset('img2/photos/espectaculos/1/'.$espectaculo->fotoshow) }}" alt="img-fluid" width="100%" height="300px" style="border-radius: 16px;">
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<h4>{{ $espectaculo->tituloshow }}</h4>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<h4>{{ $espectaculo->subtituloshow }}</h4>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col py-2">
						<img src="{{ asset('img2/photos/espectaculos/2/'.$espectaculo->fotocentro) }}" alt="img-fluid" width="100%" height="300px" style="border-radius: 16px;">
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<h4>{{ $espectaculo->titulocentro }}</h4>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<h4>{{ $espectaculo->subtitulocentro }}</h4>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-xs-12 mx-auto">
				<div class="row">
					<div class="col py-2">
						<img src="{{ asset('img2/photos/espectaculos/3/'.$espectaculo->fotolateral) }}" alt="img-fluid" width="100%" height="300px" style="border-radius: 16px;">
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<h4>{{ $espectaculo->titulolateral }}</h4>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<h4>{{ $espectaculo->subtitulolateral }}</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col text-center py-2">
				<h6>{{ $espectaculo->descripcionlateral }}</h6>
			</div>
		</div>
		<div class="row mt-5 px-5">
			<div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-xs-12 mx-auto py-2">
				<div class="row">
					<div class="col">
						<img src="{{ asset('img2/photos/espectaculos/4/'.$espectaculo->fotoizq) }}" alt="img-fluid" width="100%" height="300px" style="border-radius: 16px;">
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-xs-12 mx-auto py-2">
				<div class="row">
					<div class="col">
						<img src="{{ asset('img2/photos/espectaculos/5/'.$espectaculo->fotoder) }}" alt="img-fluid" width="100%" height="300px" style="border-radius: 16px;">
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>

@endsection
@section('jsLibExtras2')

@endsection
@section('jqueryExtra')

@endsection
