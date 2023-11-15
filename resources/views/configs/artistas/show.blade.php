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

		.boton {
			border-radius: 16px; 
			box-shadow: none;
		}

		.boton:hover {
			box-shadow: 2px;
		}

		.facebook {
			color: #38529A;
		}

		.instagram {
			color: transparent;
  			background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  			background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  			background-clip: text;
  			-webkit-background-clip: text;  
		}

		.whatsapp {
			color: #1AD03F;
		}
	</style>

@endsection

@section('content')
	
	<div class="row mb-4 px-2">
		<a href="{{ route('config.artistas.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
    
	<div class="container-fluid">

		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif
	
			<div class="row py-2">
				<div class="col border rounded mt-2">
					{{-- <div class="row">
						<div class="col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 mx-auto">
							<h1 class="lead">Fotografia/nombre</h1>
						</div>
						<div class="col-2">
							Tipo de artista
						</div>
						<div class="col-4">
							Descripción y trayectoria
						</div>
						<div class="col-2">
							Redes sociales
						</div>
						<div class="col-2">
							Administrar
						</div>
					</div> --}}
					<div class="row py-2">
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto">
							<div class="card">
								<img src="{{ asset('img2/photos/artistas/'.$artista->foto) }}" alt="" class="img-fluid">
								<div class="card-body text-center">
									<h3>{{ $artista->nombre }} {{ $artista->apellidos }}</h3>
                                    <div class="row">
										<div class="col-9 mx-auto text-center">
                                            <div class="row">
                                                <div class="col-3 mx-auto">
                                                    <h1><a href="{{ $artista->facebook }}" class="fab fa-facebook-square facebook"></a></h1>
                                                </div>
                                                <div class="col-3 mx-auto">
                                                    <h1><a href="{{ $artista->instagram }}" class="fab fa-instagram instagram"></a></h1>
                                                </div>
                                                <div class="col-3 mx-auto">
                                                    <h1><a href="{{ $artista->whatsapp }}" class="fab fa-whatsapp-square whatsapp"></a></h1>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="card-footer text-center">
									<!-- This is a button toggling the modal -->
									<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example"><h1><i class="far fa-images text-dark"></i></h1></button>
									<!-- This is the modal -->
									<div id="modal-example" uk-modal>
    									<div class="uk-modal-dialog uk-modal-body">
											<p class="uk-text-right">
        								    	<button class="uk-button uk-button-default border-0 uk-modal-close" type="button"><h1><b><i class="far fa-window-close"></i></b></h1></button>
   		     								</p>
        									<div uk-slider>
												<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">                                    
													<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
														<li>
															<img src="{{ asset('img2/photos/artistas/20230314223456.jpg') }}" alt="" class="img-fluid">
														</li>
														<li>
															<img src="{{ asset('img2/photos/artistas/20230314223456.jpg') }}" alt="" class="img-fluid">
														</li>
														<li>
															<img src="{{ asset('img2/photos/artistas/20230314223456.jpg') }}" alt="" class="img-fluid">
														</li>
													</ul>                                 
													<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
													<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>                                       
												</div>                                     
												<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>                     
											</div>
    									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center py-1">
									<h1>{{ $artista->tipo_artista }}</h1>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xd-12 py-1">
									{!! $artista->descripcion !!}
								</div>
							</div>
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
