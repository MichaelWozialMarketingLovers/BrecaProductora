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

    <div class="row mb-4 px-2">
        <a href="{{ route('config.categorias.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <h1> Nueva categoria </h1>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card" style="border-radius: 16px;">
            <div class="card-body">
                <form action="{{ route('config.categorias.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
                            <label for="categoria"><h5>Nombre de la categoria</h5></label>
                            <input type="text" class="form-control" id="categoria" name="categoria">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Crear categoria</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

@endsection

@section('jsLibExtras2')
@endsection
