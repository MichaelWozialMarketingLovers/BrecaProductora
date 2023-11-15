@extends('layouts.admin')

<!-- UiKit -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
<!-- UiKit -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>

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
		<a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
        <div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
				<h1>Listado de servicios</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
				<a href="{{ route('config.servicios.create') }}" class="boton btn btn-outline bg-white">Agregar nuevo servicio</a>
			</div>
		</div>
    </div>

	<div class="container">
        <div class="row">
			<div class="col-9 mx-auto">
				<input class="form-control mt-5" id="myInput" type="text" placeholder="Buscar servicio">
			</div>
		</div>
        <br>
        <div class="row" id="myList">
			@foreach ($servicios as $s)
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 py-2 mx-auto lcol">
					<div class="card">
						<div class="row">
							<div class="col">
							    {{--
								<img src="{{ asset('img2/photos/servicios/'.$s->foto) }}" alt="" class="img-fluid rounded">
								--}}
								<div style="background-image: url('{{ asset('img2/photos/servicios/'.$s->foto) }}'); background-color: black; background-position: center center; background-repeat: no-repeat; background-size: contain; height: 400px; width: 100%;"></div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col text-center">
									<h3>{{ $s->titulo }}</h3>
								</div>
							</div>
							<div class="row">
								<div class="col mt-5 mb-5" style="overflow: auto; height: 220px; max-height: 200px;">
									<p>{!! $s->descripcion !!}</p>
								</div>
							</div>
							{{--
							<div class="row">
								<div class="col text-center">
									<a class="uk-button uk-button-default" href="#modal-center" style="border-radius: 16px;" uk-toggle>Informaci¨®n de contacto</a>
									<div id="modal-center" class="uk-flex-top" uk-modal>
    									<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="border-radius: 16px;">
    									    <button class="uk-modal-close-default" type="button" uk-close></button>
    									    <p>{!! $s->contacto !!}</p>
									    </div>
									</div>
								</div>
							</div>
							--}}
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-12 py-1">
									<a href="{{ route('config.servicios.edit', [$s->id]) }}" class="btn btn-block py-2 px-5 border bg-white">Editar</a>
								</div>
								<div class="col-12 py-1">
									<form action="{{ route('config.servicios.destroy',$s->id) }}" method="POST" style="display: inline;">						
										@csrf
										@method('DELETE') 
										<button type="submit" class="btn btn-block btn-md btn-danger bg-white" onclick="return confirm('Deseas eliminar el servicio')">Eliminar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
    </div>

	<div class="container-fluid">
		
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

@endsection

@section('jsLibExtras2')
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList .lcol").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection

@section('jqueryExtra')

@endsection
