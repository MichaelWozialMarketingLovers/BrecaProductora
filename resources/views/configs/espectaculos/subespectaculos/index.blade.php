@extends('layouts.admin')

<!-- UiKit -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
<!-- UiKit -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

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

        /* change transition duration to control the speed of fade effect */
.carousel-item {
  transition: transform 2.6s ease-in-out;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  transition: opacity 0s 2.6s;
}
    </style>
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.espectaculos.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <h1 class="display-4">Apartado del espectaculo <br></h1>
        </div>
    </div>

     @if ($aux == 0)
    {{ $aux }}
    <div class="row m-2">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <a href="{{ route('config.espectaculos.subespectaculos.create', [$esp->id]) }}" class="boton btn btn-outline bg-white">Agregar</a>
        </div>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @foreach ($subespectaculo as $se)
                    @if ($se->espectaculo == $esp->id)
                    <div class="card mt-5" style="border-radius: 16px;">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-md-12 col-xs-12">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ asset('img2/photos/espectaculos/subespectaculos/'.$se->foto) }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-2">
                                            <h3>
                                                {{ $se->titulo }}
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a class="uk-button uk-button-default border" style="border-radius: 16px;" href="#modal-center" uk-toggle>Contacto</a>
                                            <div id="modal-center" class="uk-flex-top" uk-modal>
                                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                    <p>
                                                        {!! $se->contactodetalle !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">                
                                            <!-- Button trigger modal -->
                                            <a class="btn btn-outline bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $se->id }}">
                                                <h1><i class="far fa-images text-dark"></i></h1>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-{{ $se->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content bg-light" style="border-radius: 16px;">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title" id="exampleModalLabel">Galeria de imagenes</h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="uk-slider-container-offset" uk-slider>
                                                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                                                    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                                                        @foreach ($galeria as $g)
                                                                            @if ($g->subespectaculo == $se->id)
                                                                                <li class="uk-width-1-1">
                                                                                    <img src="{{ asset('img2/photos/espectaculos/subespectaculos/galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;">
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                                                </div>
                                                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                                            </div> 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-4 col-md-12 col-xs-12">
                                    <div class="texto-detalle-admin-sub">
                                        {!! $se->descripcion !!}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-md-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12">
											<a href="{{ route('config.espectaculos.subespectaculos.galeriasubespectaculos.index', [$se->id]) }}" class="btn px-2 btn-md btn-outline border">Modificar galeria</a>
										</div>
										<div class="col-12">
											<a href="{{ route('config.espectaculos.subespectaculos.show', ['subespectaculo' => $se->id]) }}" class="btn px-2 btn-md btn-outline border">Vista previa del espectaculo</a>
										</div>
                                        <div class="col-12">
                                            <a href="{{ route('config.espectaculos.subespectaculos.edit', [$se->id]) }}" class="btn px-2 btn-md btn-outline border">Modificar espectaculo</a>
                                        </div>
                                        <div class="col-9 px-5 mx-auto">
                                            <form action="{{ route('config.espectaculos.subespectaculos.destroy', $se->id) }}" method="POST" style="display: inline;">						
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-md btn-danger btn-block bg-white">Eliminar</button>
											</form>
                                        </div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
              
                    @endif
                    
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('jsLibExtras2')
@endsection

@section('jqueryExtra')
@endsection