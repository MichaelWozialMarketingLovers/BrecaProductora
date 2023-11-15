@extends('layouts.admin')
@section('cssExtras')

@endsection
@section('jsLibExtras')

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

@endsection
@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
	<div class="row justify-content-center">
		@foreach ($seccion as $card)
			@if (!empty($card->elements))
				<div class="col-6 col-lg-2 p-2">
					<a href="{{route('config.seccion.show',$card->slug)}}"  class="card h-100" style="box-shadow: none; border-radius: 16px;">
						<span class="card-body text-muted text-center">
							<i class="{{$card->icon}} fa-3x mb-3"></i> <br>
							<span class="text-dark text-capitalize"> {{$card->seccion}}</span>
						</span>
					</a>
				</div>
			@endif
		@endforeach
	</div>
@endsection
@section('jsLibExtras2')

@endsection
@section('jqueryExtra')

@endsection
