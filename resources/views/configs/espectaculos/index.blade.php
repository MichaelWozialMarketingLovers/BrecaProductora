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
		
		@media (min-width: 1281px) {
            .img-g {
                height: 90px;
                width: 100%;
            }
        }
        
        @media (min-width: 1025px) and (max-width: 1280px) {
            .img-g {
                height: 90px;
                width: 100%;
            }
        }
        
        @media (min-width: 768px) and (max-width: 1024px) {
            .img-g {
                height: 120px;
                width: 100%;
            }
        }
        
        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
            .img-g {
                height: 120px;
                width: 100%;
            }
        }
        
        @media (min-width: 481px) and (max-width: 767px)  {
            .img-g {
                height: 120px;
                width: 100%;
            }
        }
        
        @media (min-width: 320px) and (max-width: 480px) {
            .img-g {
                height: 120px;
                width: 100%;
            }
        }

	</style>
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
        <div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
				<h1 class="display-4">Listado de espectaculos</h1>
			</div>
		</div>
		<div class="row m-2">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
				<a href="{{ route('config.espectaculos.create') }}" class="boton btn btn-outline bg-white">Agregar nuevo espectaculo</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				@foreach ($espectaculos as $e)
					<div class="card m-2 bg-white border" style="border-radius: 16px;">
						<div class="card-body rounded">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-3">
									<div class="row">
										<div class="col-4">
											<img src="{{ asset('img2/photos/espectaculos/1/'.$e->fotoshow) }}" alt="" class="img-fluid rounded-circle img-g">
										</div>
										<div class="col-4">
											<img src="{{ asset('img2/photos/espectaculos/2/'.$e->fotocentro) }}" alt="" class="img-fluid rounded-circle img-g">
										</div>
										<div class="col-4">
											<img src="{{ asset('img2/photos/espectaculos/3/'.$e->fotolateral) }}" alt="" class="img-fluid rounded-circle img-g">
										</div>
									</div>
									<div class="row">
										<div class="col-2"></div>
										<div class="col-4">
											<img src="{{ asset('img2/photos/espectaculos/4/'.$e->fotoizq) }}" alt="" class="img-fluid rounded-circle img-g">
										</div>
										<div class="col-4">
											<img src="{{ asset('img2/photos/espectaculos/5/'.$e->fotoder) }}" alt="" class="img-fluid rounded-circle img-g">
										</div>
										<div class="col-2"></div>
									</div>
								</div>
								{{-- <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 text-center">
									<div class="row">
										<div class="col py-1">
											<a class="boton btn bg-white border" href="#modal-center" uk-toggle>Textos</a>
											<div id="modal-center" class="uk-flex-top" style="border-radius: 16px;" uk-modal>
											    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
											        <button class="uk-modal-close-default" type="button" uk-close></button>
        											<p>
														<div class="row">
															<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 border">
																<div class="row">
																	<div class="col border">
																		{{ $e->tituloshow }}
																	</div>
																</div>
																<div class="row">
																	<div class="col border">
																		{{ $e->subtituloshow }}
																	</div>
																</div>
															</div>
															<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
																<div class="row">
																	<div class="col border">
																		{{ $e->titulocentro }}
																	</div>
																</div>
																<div class="row">
																	<div class="col border">
																		{{ $e->subtitulocentro }}
																	</div>
																</div>
															</div>
															<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
																<div class="row">
																	<div class="col border">
																		{{ $e->titulolateral }}
																	</div>
																</div>
																<div class="row">
																	<div class="col border">
																		{{ $e->subtitulolateral }}
																	</div>
																</div>
																<div class="row">
																	<div class="col border">
																		{{ $e->descripcionlateral }}
																	</div>
																</div>
															</div>
														</div>
													</p>
											    </div>
											</div>
										</div>
									</div>
								</div> --}}
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
									<div class="row">
										<div class="col text-center">
											<div class="card py-2 px-5" style="border-radius: 16px;">
												<h5>Detalles</h5>
												El siguiente botón nos mandará a una página que nos permitirá administrar los detalles del espectaculo
												<div class="card-body">
													<a href="{{ route('config.espectaculos.subespectaculos.index', [$e->id]) }}" class="btn btn-md btn-outline border">Administrar</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 text-center">
									<div class="row">
										<div class="col">
											<a href="{{ route('config.espectaculos.show', [$e->id]) }}" class="btn px-2 btn-md border">Vista previa del espectaculo</a>
											<a href="{{ route('config.espectaculos.edit', [$e->id]) }}" class="btn px-2 btn-md border">Modificar espectaculo</a>
											{{-- <a href="{{ route('config.espectaculos.destroy', [$e->id]) }}" class="btn px-2 btn-sm btn-outline bg-danger">Eliminar espectaculo</a> --}}
											<form action="{{ route('config.espectaculos.destroy',$e->id) }}" method="POST" style="display: inline;">						
												@csrf
												@method('DELETE') 
												<button type="submit" class="btn btn-sm btn-danger btn-block bg-white">Eliminar</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
    </div>

@endsection
@section('jsLibExtras2')

@endsection
@section('jqueryExtra')

@endsection
