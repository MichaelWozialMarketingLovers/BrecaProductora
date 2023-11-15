<style>
    .at {
        text-decoration: none !important;
    }

    .at:hover {
        background-color: white;
        opacity: 0.5;
    }
</style>

<header class="py-3 px-5">
  	<div class="row">
    	<div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3 text-center">
      		<!-- Button trigger modal -->
			@if ($pagina == 'servicios')
				<button type="button" class="btn btn-outline bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal">
        			<a href="#" class="bg-transparent"><img src="{{ asset('img/design/servicios/000.png') }}" alt="" class="img-fluid menu-img bg-transparent"></a>
        		</button>
			@elseif ($pagina == 'masterclass')
				<button type="button" class="btn btn-outline bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal">
					<a href="#" class="bg-transparent"><img src="{{ asset('img/design/servicios_detalle/000__.png') }}" alt="" class="img-fluid menu-img bg-transparent"></a>
				</button>
			@else
				<button type="button" class="btn btn-outline bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal">
        			<a href="#" class="bg-transparent"><img src="{{ asset('img/design/home/menu.png') }}" alt="" class="img-fluid menu-img bg-transparent"></a>
        		</button>
			@endif
    	</div>
    	<div class="py-4 col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3 text-center">
      		@if ($pagina == 'masterclass')
			  	<a href="{{ route('front.index') }}"><img src="{{ asset('img/design/servicios/empresa2.png') }}" alt="" class="img-fluid bg-transparent" style=""></a>
			@elseif ($pagina == 'servicios')
			    <a href="{{ route('front.index') }}"><img src="{{ asset('img/design/servicios/empresa2.png') }}" alt="" class="img-fluid bg-transparent" style=""></a>
			@else
				<a href="{{ route('front.index') }}"><img src="{{ asset('img/design/home/empresa.png') }}" alt="" class="img-fluid bg-transparent" style=""></a>
			@endif
    	</div>
    	<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-xs-12"></div>
    	<div class="col-xl-2 col-lg-2 col-md-4 py-1 col-sm-6 col-xs-6 text-center">
      		<div class="row">
        		@if ($pagina == 'masterclass')
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-white">
						<a href="https://wa.me/{!! $data->whatsapp ?? '' !!}" class="px-1" uk-icon="icon: whatsapp; ratio: 1.5"></a>
						<a href="{!! $data->facebook ?? '' !!}" class="px-1" uk-icon="icon: facebook; ratio: 1.5"></a>
						<a href="{!! $data->instagram ?? '' !!}" class="px-1" uk-icon="icon: instagram; ratio: 1.5"></a>
			  		</div>
				@else
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="https://wa.me/{!! $data->whatsapp ?? '' !!}" class="px-1" uk-icon="icon: whatsapp; ratio: 1.5"></a>
						<a href="{!! $data->facebook ?? '' !!}" class="px-1" uk-icon="icon: facebook; ratio: 1.5"></a>
						<a href="{!! $data->instagram ?? '' !!}" class="px-1" uk-icon="icon: instagram; ratio: 1.5"></a>
			  		</div>
				@endif
      		</div>
    	</div>
  	</div>
</header>



<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%; height: 100%;">
		<div class="modal-dialog modal-fullscreen" style="background-image: url({{ asset('img/design/home/footerbg.png') }}); background-size: cover; background-color: #3B1263;">
			<div class="modal-content" style="background-image: url({{ asset('img/design/home/footerbg.png') }}); background-size: cover; background-color: #3B1263;">
				<div class="container-fluid px-xl-5 px-lg-5 px-md-5 px-sm-5 px-xs-5">
					<div class="row mt-2">
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-xs-auto text-start">
							<div class="modal-header border-0 text-center">
								<button type="button" class="bg-transparent border border-white border-2 text-white rounded-circle p-3" data-bs-dismiss="modal" aria-label="Close">
									<a href="" uk-icon="icon: close; ratio: 2;"></a>
								</button>
							</div>
						</div>
					</div>
					<div class="row px-xl-5 px-lg-5 px-md-5 px-sm-0 px-xs-0">
						<div class="col">
							<div class="modal-body">
								<!-- <div class="container text-center" style="background-image: url(img/home/foquito.png); background-size: contain; background-repeat: no-repeat; background-position:center; background-position-x: center;"> -->
								<div class="container text-center">
									<div class="row">
										<div class="col text-center">
											<a class="at" href="{{ route('front.index') }}"><p class="display-1 text-white">Home</p></a>	
										</div>
									</div>
									<div class="row">
										<div class="col text-center">
											<a href="{{ route('front.artistas') }}" class="at"><p class="display-1 text-white">Artistas</p></a>	
										</div>
									</div>
									<div class="row">
										<div class="col text-center">
											<a href="{{ route('front.espectaculos') }}" class="at"><p class="display-1 text-white">Espectáculos</p></a>	
										</div>
									</div>
									<div class="row">
										<div class="col text-center">
											<a href="{{ route('front.servicios') }}" class="at"><p class="display-1 text-white">Servicios</p></a>	
										</div>
									</div>
									<div class="row">
										<div class="col text-center">
											<a href="{{ route('front.masterClass') }}" class="at"><p class="display-1 text-white">Masterclass y talleres</p></a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row px-5">
						<div class="col">
							<div class="modal-footer border-0 text-center text-white">
								<img src="{{ asset('img2/design/modal.png') }}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>