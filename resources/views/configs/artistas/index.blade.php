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
		<a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
    
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
				<h1>Listado de artistas</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
				<a href="{{ route('config.artistas.create') }}" class="boton btn btn-outline bg-white">Agregar nuevo artista</a>
			</div>
		</div>

		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif

		<div class="container">
			<div class="row">
				<div class="col-9 mx-auto">
					<input class="form-control mt-3 mb-3" id="myInput" type="text" placeholder="Buscar artista">
				</div>
			</div>
			<div class="row" id="myList">
				@foreach ($artistas as $a)
					<div class="row py-2">
				<div class="col lcol border bg-white mt-2" style="border-radius: 16px;">
					<div class="row py-2">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
							<div class="card" style="border-radius: 16px;">
								<img src="{{ asset('img2/photos/artistas/'.$a->foto) }}" alt="" class="img-fluid" style="border-radius: 16px;">
								<div class="card-body text-center">
									<div class="row">
										<div class="col py-2">
											<h4	>{{ $a->nombre }} {{ $a->apellidos }}</h4	>
										</div>
									</div>
									<div class="row">
										<div class="col py-2">
											<h4>{{ $a->tipo_artista }}</h4>
										</div>
									</div>
									{{--
									<div class="row">						
										@if ($a->facebook != "")
											<div class="col-4">
												<h1><a href="{{ $a->facebook }}" class="fab fa-facebook-square facebook"></a></h1>
											</div>
										@else
											<h1></h1>
										@endif

										@if ($a->instagram != "")
											<div class="col-4">
												<h1><a href="{{ $a->instagram }}" class="fab fa-instagram instagram"></a></h1>
											</div>
										@else
											<h1></h1>
										@endif
										
										@if ($a->whatsapp != "")
											<div class="col-4">
												<h1><a href="https://wa.me/{{ $a->whatsapp }}" class="fab fa-whatsapp-square whatsapp"></a></h1>
											</div>
										@else
											<h1></h1>
										@endif 
									</div>
									--}}
								</div>
								<div class="card-footer text-center">
									<div class="row">
                                        <div class="col">                
                                            <!-- Button trigger modal -->
                                            <a class="btn btn-outline bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $a->id }}">
                                                <h1><i class="far fa-images text-dark"></i></h1>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-{{ $a->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                            @if ($g->artista == $a->id)
                                                                                <li class="uk-width-1-1">
                                                                                    <img src="{{ asset('img2/photos/artista_galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;">
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
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xd-12 py-1">
									<div class="row">
										<div class="col">
											<h4>Acerca de:</h4>
										</div>
									</div>
									<div class="row">
										<div class="col" style="overflow: auto; max-height: 500px;">
											{!! $a->descripcion !!}
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col">
											<div class="row">
												<div class="col text-center">
													<h4>Administrar</h4>
												</div>
											</div>
											<div class="row">
												<div class="col mb-1">
													<a class="btn btn-block bg-white border" href="{{ route('config.artistas.artista_galeria.index', [$a->id]) }}"><i class="fas fa-camera fa-xl"></i> Galeria de fotos</a>
												</div>	
											</div>
											<div class="row">
												<div class="col mb-1">
													<a class="btn btn-block bg-white border" href="{{ route('config.artistas.show' ,$a->id) }}">Ver</a>
												</div>	
											</div>
											<div class="row">
												<div class="col mb-1">
													<a class="btn btn-block bg-white border" href="{{ route('config.artistas.edit' ,$a->id) }}">Editar</a>
												</div>
											</div>
											<div class="row">
												<div class="col mb-1">
													<form action="{{ route('config.artistas.destroy', $a->id) }}" method="POST" style="display: inline;">						
														@csrf
														@method('DELETE') 
														<button type="submit" class="btn btn-danger btn-block bg-white" onclick="return confirm('Deseas eliminar a este artista')">Eliminar</button>
													</form>
												</div>	
											</div>
										</div>
									</div>
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
