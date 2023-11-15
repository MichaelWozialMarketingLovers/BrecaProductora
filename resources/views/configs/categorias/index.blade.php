@extends('layouts.admin')

@section('cssExtras')
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


        {{-- <div class="col">
            <a href="{{ route('config.espectaculos.create') }}" class="col btn btn-lg grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar a los espectaculos</a>
        </div> --}}
        <div class="row mb-4 px-2">
            <a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
        </div>

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <h1 class="display-4"> Lista de categor&iacute;as </h1>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <a href="{{ route('config.categorias.create') }}" class="boton btn btn-outline bg-white">A&ntilde;adir una nueva categor&iacute;a</a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @foreach ($categorias as $c)
                    <div class="card mt-2 border" style="border-radius: 16px;">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 py-3 px-5">
                                <h3>
                                    {{ $c->categoria }}
                                </h3>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 py-1">
                                <div class="row">
                                    <div class="col-12 text-center px-5">
                                        <a href="{{ route('config.categorias.edit', [$c->id]) }}" class="btn btn-block btn-outline border">Modificar categoria</a>
                                    </div>
                                    <div class="col-12 text-center px-5 mt-2 mx-auto">
                                        <form action="{{ route('config.categorias.destroy', $c->id) }}" method="POST" style="display: inline;">						
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-block bg-white" onclick="return confirm('IMPORTANTE, si eliminas una categor&iacute;a, todos los espectaculos pertenecientes a dicha categor&iacute;a tambi&eacute;n ser&aacute;n eliminados')">Eliminar</button>
                                        </form>
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
