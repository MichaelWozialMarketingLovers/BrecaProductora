@extends('layouts.admin')

<!-- UiKit -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
<!-- UiKit -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>
<!-- SlickJS -->
<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
<!-- SlickJS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
		<a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <h1>Master class y talleres</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <a href="{{ route('config.masterclass.create') }}" class="boton btn btn-outline bg-white">Agregar nuevo</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-9 mx-auto">
                <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
            </div>
        </div>
        <div class="row mt-1" id="myList">
            @foreach ($masterclass as $m)                              
            <div class="col-4 py-3 lcol mx-auto">
                <div class="card border">
                    {{--
                    <img src="{{ asset('img2/photos/masterclass/'.$m->imagen) }}" alt="" class="img-fluid rounded" style="width: 500px; height: 500px;">
                    --}}
                    <div style="background-image: url('{{ asset('img2/photos/masterclass/'.$m->imagen) }}'); background-color: black; background-position: center center; background-repeat: no-repeat; background-size: contain; height: 500px; width: 100%;"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <h3 class="text-dark">{!! $m->titulo !!}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center text-dark">
                                <a class="uk-button uk-button-default border text-dark" href="#modal-cente-{{ $m->id }}" uk-toggle>Descripción</a>
                                <div id="modal-cente-{{ $m->id }}" class="uk-flex-top" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <p>
                                            {!! $m->descripcion !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--
                            <div class="col text-center">
                                <a class="uk-button uk-button-default border text-dark" href="#modal-center-{{ $m->id }}" uk-toggle>Contacto</a>
                                <div id="modal-center-{{ $m->id }}" class="uk-flex-top" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <p>
                                            {!! $m->contacto !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row py-1">
                            <div class="col text-center">
                                <a href="{{ route('config.masterclass.edit', [$m->id]) }}" class="btn btn-block px-3 btn-md border bg-white text-dark">Modificar</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-2 text-center">
                                <form action="{{ route('config.masterclass.destroy',$m->id) }}" method="POST" style="display: inline;">						
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-md btn-danger btn-block bg-danger" onclick="return confirm('Deseas eliminar')">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
