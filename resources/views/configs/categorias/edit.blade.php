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
        <h1> Actualizar categoria </h1>
    </div>
</div>

<div class="container-fluid mx-auto">
    <div class="card" style="border-radius: 16px;">
        <div class="card-body">
            <form action="{{ route('config.categorias.update', [$categoria->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
                        <label for="categoria"><h5>Nuevo nombre</h5></label>
                        <input type="text" name="categoria" id="categoria" value="{{ $categoria->categoria }}" class="form-control">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Actualizar artista</button>
                </div>
            </form>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</div>

@endsection

@section('jsLibExtras2')
@endsection
