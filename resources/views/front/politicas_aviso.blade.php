@extends('layouts.front')

@section('title') {{$politica->titulo}} @endsection
{{-- @section('cssExtras')@endsection --}}
{{-- @section('styleExtras')@endsection --}}
@section('content')
	<section>
		<div class="bg-global">
			<div class="col-12 text-center p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;"> {{ $politica->titulo }} </div>
			</div>
		</div>
	</section>
	
	<div class="container"  style="min-height:25vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-8 p-4 mx-auto bg-white" style="border: .5em solid #e6e6e6;">
				{!! $politica->descripcion !!}
			</div>
		</div>
	</div>
	
	<section>
		<div class="bg-global">
			<div class="col-12 text-center p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;"> {{ $metodos_pago->titulo }} </div>
			</div>
		</div>
	</section>
	
	<div class="container"  style="min-height:25vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-8 p-4 mx-auto bg-white" style="border: .5em solid #e6e6e6;">
				{!! $metodos_pago->descripcion !!}
			</div>
		</div>
	</div>
	
	<section>
		<div class="bg-global">
			<div class="col-12 text-center p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;"> {{ $devoluciones->titulo }} </div>
			</div>
		</div>
	</section>
	
	<div class="container"  style="min-height:25vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-8 p-4 mx-auto bg-white" style="border: .5em solid #e6e6e6;">
				{!! $devoluciones->descripcion !!}
			</div>
		</div>
	</div>
	
	<section>
		<div class="bg-global">
			<div class="col-12 text-center p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;"> {{ $terminos_condiciones->titulo }} </div>
			</div>
		</div>
	</section>
	
	<div class="container"  style="min-height:25vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-8 p-4 mx-auto bg-white" style="border: .5em solid #e6e6e6;">
				{!! $terminos_condiciones->descripcion !!}
			</div>
		</div>
	</div>
	
	<section>
		<div class="bg-global">
			<div class="col-12 text-center p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;"> {{ $garantias->titulo }} </div>
			</div>
		</div>
	</section>
	
	<div class="container"  style="min-height:25vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-8 p-4 mx-auto bg-white" style="border: .5em solid #e6e6e6;">
				{!! $garantias->descripcion !!}
			</div>
		</div>
	</div>
	
	<section>
		<div class="bg-global">
			<div class="col-12 text-center p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;"> {{ $politica_envio->titulo }} </div>
			</div>
		</div>
	</section>
	
	<div class="container"  style="min-height:25vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-8 p-4 mx-auto bg-white" style="border: .5em solid #e6e6e6;">
				{!! $politica_envio->descripcion !!}
			</div>
		</div>
	</div>
@endsection

@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$('iframe').attr('width', '100%');
		$('iframe').attr('height', '460');

		// window.onload = function() {
		//
		// };
		//
		// $(document).ready(function() {
		// });

	</script>
@endsection
