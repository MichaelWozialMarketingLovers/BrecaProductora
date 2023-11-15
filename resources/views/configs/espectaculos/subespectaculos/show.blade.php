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

	<div class="container-fluid bg-white p-5 border" style="border-radius: 16px;">
		<div class="row">
			<div class="col-6 text-center">
				<img src="{{ asset('img2/photos/espectaculos/subespectaculos/'.$se->foto) }}" alt="" class="img-fluid" style="border-radius: 16px;">
				<h1 class="py-5">{{ $se->titulo }}</h1>
			</div>
			<div class="col-6 text-center">
				<div class="row">
					<div class="col-12">
						<h1>Descripción</h1>
						{!! $se->descripcion !!}
					</div>
					<div class="col-12 mt-5">
						<h1>Contacto</h1>
						{!! $se->contactodetalle !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('jsLibExtras2')

@endsection
@section('jqueryExtra')

@endsection