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
    </style>
    <style>
        
/* -----------------------------
Switch */

.uk-switch {
  position: relative;
  display: inline-block;
  height: 34px;
  width: 60px;
}

/* Hide default HTML checkbox */
.uk-switch input {
  display:none;
}
/* Slider */
.uk-switch-slider {
  background-color: rgba(0,0,0,0.22);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  border-radius: 500px;
  bottom: 0;
  cursor: pointer;
  transition-property: background-color;
	transition-duration: .2s;
  box-shadow: inset 0 0 2px rgba(0,0,0,0.07);
}
/* Switch pointer */
.uk-switch-slider:before {
  content: '';
  background-color: #fff;
  position: absolute;
  width: 30px;
  height: 30px;
  left: 2px;
  bottom: 2px;
  border-radius: 50%;
  transition-property: transform, box-shadow;
	transition-duration: .2s;
}
/* Slider active color */
input:checked + .uk-switch-slider {
  background-color: #39f !important;
}
/* Pointer active animation */
input:checked + .uk-switch-slider:before {
  transform: translateX(26px);
}

/* Modifiers */
.uk-switch-slider.uk-switch-on-off {
  background-color: #f0506e;
}
input:checked + .uk-switch-slider.uk-switch-on-off {
  background-color: #32d296 !important;
}

/* Style Modifier */
.uk-switch-slider.uk-switch-big:before {
  transform: scale(1.2);
  box-shadow: 0 0 6px rgba(0,0,0,0.22);
}
.uk-switch-slider.uk-switch-small:before {
  box-shadow: 0 0 6px rgba(0,0,0,0.22);
}
input:checked + .uk-switch-slider.uk-switch-big:before {
  transform: translateX(26px) scale(1.2);
}

/* Inverse Modifier - affects only default */
.uk-light .uk-switch-slider:not(.uk-switch-on-off) {
  background-color: rgba(255,255,255,0.22);
}
    </style>
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.breca_espectaculos.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <form action="{{ route('config.breca_espectaculos.update', [$espectaculo->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mx-auto text-center col-xs-12 mt-5 px-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="imagen" class="drop-container">
                                                    <span class="drop-title">Arrastra o</span>
                                                    or
                                                    <input type="file" class=""  id="imagen" name="imagen" value="{{ $espectaculo->imagen }}" data-allowed-file-extensions="jpg png jpeg" data-weight="7em">
                                                </label>
                                            </div>
                                        </div>                                          
                                    </div>            
                                </div>  
                            </div>
                            <div class="row mx-auto">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mx-auto text-end">
                                    <div class="row">
                                        <div class="col">
                                            @foreach ($espectaculos_categorias as $ec)
                                                @if($ec->id == $espectaculo->categoria)
                                                    Categor&iacute;a Actual: {{ $ec->categoria }}
                                                    @break
                                                @endif
                                            @endforeach
                                            {{-- <h4>Categoria: {{ $ }}</h4> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 text-center">

                                            <input type="hidden" name="categoriai" id="inc" value="{{ $espectaculo->categoria }}">

                                            <button type="button" id="modificarc" class="btn btn-primary" >
                                                Modificar categoría
                                            </button>
                                            <input type="hidden" name="centinela" value="0">
                                            <select name="categorias" id="sec" value="{{ $espectaculo->categoria }}" id="" class="form-control">
                                                @foreach ($espectaculos_categorias as $ec)
                                                    <option value="{{ $ec->id }}">{{ $ec->categoria }}</option>
                                                @endforeach
                                            </select> 
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-start">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <h4>Mostrar en home</h4>
                                                <label class="uk-switch" for="activo">
                                                    <input type="checkbox" name="activo" id="activo" @if($espectaculo->activo == 1) checked @endif>
                                                    <div class="uk-switch-slider"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mx-auto text-center col-xs-12 mt-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="titulo">Titulo</label>
                                                <input type="text" name="titulo" class="texteditor form-control" value="{{ $espectaculo->titulo }}">
                                            </div>
                                        </div>                                
                                    </div>            
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mx-auto text-center col-xs-12 mt-5">
                                    <div class="form-group row text-center">
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="descripcion">descripción</label>
                                                <input type="text" name="descripcion" class="texteditor form-control" value="{{ $espectaculo->descripcion }}">
                                            </div>
                                        </div>                                
                                    </div>            
                                </div>  
                            </div>
                            <input type="hidden" name="contacto" class="" value="{{ $espectaculo->contacto }}">
                            {{--
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mx-auto text-center col-xs-12 mt-5">
                                    <div class="form-group row text-center"> 
                                        <div class="row">
                                            <div class="col mx-auto text-center">
                                                <label for="contacto">Contacto</label>
                                                <input type="text" name="contacto" class="texteditor form-control" value="{{ $espectaculo->contacto }}">
                                            </div>
                                        </div>                                          
                                    </div>            
                                </div>  
                            </div>
                            --}}
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modificar Espectaculo</button>
                                    </div>
                                </div>
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
        </div>
    </div>

@endsection

@section('jsLibExtras2')

<script>
    $('#sec').hide();

    $('#modificarc').click(function(){
        $('#inc').hide();
        $('#sec').show();
        $('input[name=centinela]').val('1');
    });
</script>

@endsection
