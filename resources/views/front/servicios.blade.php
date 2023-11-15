@extends('layouts.front')

@section('cssExtras')
@endsection

@section('styleExtras')
<style>
	header {
		background-color: #552482;
	}

	.menu-img {
		background-color: #552482;
	}
</style>
@endsection

@section('content')

<main class="pagina-servicios" style="background-color: #552482;">
	<div class="container-fluid py-5">
		<div class="row">
			<div class="col">
				<h1 class="display-1 text-center text-white">Nuestros servicios</h1>
			</div>
		</div>
		<div class="row px-xl-5 px-lg-5 px-md-5 px-sm-0 px-xs-0">
			@foreach ($servicios as $s)
				@if (( $contador + 2 ) % 3 == 0) 
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 px-5">
						<div class="card animated fadeInUp delay-2s bg-transparent mt-5 border-0 efecto-fade--servicios efecto-grow--cont__servicios">
							{{-- <img src="{{ asset('img2/photos/servicios/'.$s->foto) }}" alt="" class="img-fluid imagen" style="width: 100%; height: 500px;"> --}}
							<div style="background-image: url('{{ asset('img2/photos/servicios/'.$s->foto) }}'); background-color: black; background-position: center center; background-repeat: no-repeat; background-size: contain; height: 500px; width: 100%;"></div>
							<div class="card-body border border-white">
								<div class="row">
									<div class="col text-center">
										<h2 class="text-white">{{ $s->titulo }}</h2>
									</div>
								</div>
								<div class="row mb-5">
									<div class="col text-white text-start" style="overflow: auto; max-height: 200px;">
										<p>
											{!! $s->descripcion !!}
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col text-center">
										{{--
										<a class="uk-button uk-button-default text-white" href="#modal-center" uk-toggle>Contactar</a>
										--}}
										<div id="modal-center" class="uk-flex-top" uk-modal>
    										<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    										    <button class="uk-modal-close-default" type="button" uk-close></button>
	    									    <p>{!! $s->contacto !!}</p>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@php $contador++; @endphp

				@else

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 py-5 mt-5 px-5">
						<div class="card animated fadeInUp delay-2s bg-transparent mt-5 border-0 efecto-fade--servicios efecto-grow--cont__servicios">
							{{-- <img src="{{ asset('img2/photos/servicios/'.$s->foto) }}" alt="" class="img-fluid imagen" style="width: 100%; height: 500px;"> --}}
							<div style="background-image: url('{{ asset('img2/photos/servicios/'.$s->foto) }}'); background-color: black; background-position: center center; background-repeat: no-repeat; background-size: contain; height: 500px; width: 100%;"></div>
							<div class="card-body border border-white">
								<div class="row">
									<div class="col text-center">
									<h2 class="text-white">{{ $s->titulo }}</h2>
									</div>
								</div>
								<div class="row mb-5">
									<div class="col text-white text-start" style="overflow: auto; max-height: 200px;">
										<p>
											{!! $s->descripcion !!}
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col text-center">
										{{--
										<a class="uk-button uk-button-default text-white" href="#modal-center" uk-toggle>Contactar</a>
										--}}
										<div id="modal-center" class="uk-flex-top" uk-modal>
											<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
												<button class="uk-modal-close-default" type="button" uk-close></button>
												<p>{!! $s->contacto !!}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@php $contador++; @endphp

				@endif
			@endforeach
		</div>
	</div>
</main>

@endsection

@section('jsLibExtras2')
@endsection
