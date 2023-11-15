@extends('layouts.admin')

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
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
		<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
	<div>
		<div class="row">
			@if (!empty($seccion->portada))
			<div class="col-12 col-md-6 py-3">
				<div class="card h-100" style="box-shadow: none; border-radius: 16px;">
					<form action="{{route('config.seccion.updatePortada',$seccion->id)}}" class="card-body" method="post" enctype="multipart/form-data">
						@csrf
						@method('put')
						<div class="text-center">
							<label class="h5 text-capitalize"> Portada</label>
						</div>
						<div class="form-group">
							<input type="file" id="portada" name="portada" class="dropify"  data-weight="7em" @if ($seccion->portada) data-default-file="{{ asset("/img/photos/seccions/".$seccion->portada)}}" @endif required />
							<div class="text-center">
								<small class="text-muted">Dimensiones sugeridas: 1500 x 500 px</small>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</form>
				</div>
			</div>
			@endif

			@foreach ($elements as $elem)
				@if (!$elem->contenido)
				<div class="col-12 col-md-6 py-3">
					<div class="card" style="box-shadow: none; border-radius: 16px;">
						<form action="{{route('config.seccion.update',$elem->id)}}" class="card-body" method="post">
							@csrf
							@method('put')
							<div class="text-center">
								<label class="h5 text-capitalize">{{ $elem->elemento}}</label>
							</div>
							<div class=" form-group">
								<textarea name="descripcion" class="texteditor" rows="10">{!! $elem->texto !!}</textarea>
							</div>
							<div class="text-center mt-1">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</form>
					</div>
				</div>
				@else
				<div class="col-12 col-md-6 py-3">
					<div class="card h-100" style="box-shadow: none; border-radius: 16px;">
						
						@if($elem->id == 7) 
							<div class="container text-center">
								<div class="row" id="formu">
									<div class="col">
										<form action="{{route('config.seccion.update',$elem->id)}}" class="card-body" method="post" enctype="multipart/form-data">
											@csrf
											@method('put')
											<div class="text-center">
												<label class="h5 text-capitalize">Subir archivo</label>
											</div>
											<div class="form-group">
												<input type="hidden" name="url" value="archivo">
												<input type="file" id="imagen" name="imagen" class="dropify"  data-weight="7em" @if ($elem->imagen) data-default-file="{{ asset("/img/photos/seccions/".$elem->imagen)}}" @endif data-show-remove="false" required />
											</div>
											<div class="text-center mt-1">
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>
										</form>
									</div>
								</div>
								<div class="row" id="formu2">
									<div class="col">
										<form action="{{route('config.seccion.update',$elem->id)}}" class="card-body" method="post" enctype="multipart/form-data">
											@csrf
											@method('put')
											<div class="text-center">
												<label class="h5 text-capitalize">Ingresa el link de YouTube</label>
											</div>
											<div class=" form-group">
												<input type="hidden" name="url" value="youtube">
												<textarea name="descripcion" class="texteditor" rows="10">{!! $elem->texto !!}</textarea>
											</div>
											<div class="text-center mt-1">
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>
										</form>
									</div>
								</div>
								<div class="row mt-5">
									<div class="col text-ceneter">
										<h5 class="h5">Imágen/video Grande</h5>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<button class="btn btn-primary" id="img">
											Añadir imágen
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<button class="btn btn-primary" id="vid">
											Añadir video desde mis archivos
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<button class="btn btn-primary" id="vidyt">
											Añadir video de youtube
										</button>
									</div>
								</div>
							</div>
						@else
						<form action="{{route('config.seccion.update',$elem->id)}}" class="card-body" method="post" enctype="multipart/form-data">
							@csrf
							@method('put')
							<div class="text-center">
								<label class="h5 text-capitalize">{{ $elem->elemento}} - imágen</label>
							</div>
							<div class="form-group">
								<input type="file" id="imagen" name="imagen" class="dropify"  data-weight="7em" @if ($elem->imagen) data-default-file="{{ asset("/img/photos/seccions/".$elem->imagen)}}" @endif data-show-remove="false" required />
								{{-- <div class="text-center">
									@switch($elem->seccion)
										@case(1)
											@if (strpos($elem->elemento, 'card') !== false)
												<small class="text-muted">Dimensiones sugeridas: 500 x 500 px</small>
											@else
												<small class="text-muted">Dimensiones sugeridas: 950 x 950 px</small>
											@endif
										@break
										@case(4)
											@if (strpos($elem->elemento, 'card') !== false)
												<small class="text-muted">Dimensiones sugeridas: 500 x 500 px</small>
											@else
												<small class="text-muted">Dimensiones sugeridas: 650 x 350 px</small>
											@endif
										@break
										@case(5)
										<small class="text-muted">Dimensiones sugeridas: 900 x 650 px</small>
										@break
									@endswitch
								</div> --}}
							</div>
							<div class="text-center mt-1">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</form>
						@endif

						
					</div>
				</div>
				@endif

			@endforeach
		</div>
	</div>
@endsection
@section('jsLibExtras2')
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
@endsection
@section('jqueryExtra')
<script type="text/javascript">
	$(document).ready(function() {
		$('.dropify').dropify();
	});
</script>
<script>

	$('#formu').hide();
	$('#formu2').hide();

	$("#img").click(function(){
		$('#formu').show();
		$('#formu2').hide();
	});

	$("#vid").click(function(){
		$('#formu').show();
		$('#formu2').hide();
	});

	$("#vidyt").click(function(){
		$('#formu2').show();
		$('#formu').hide();
	});
	
</script>
@endsection
