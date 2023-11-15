@extends('layouts.admin')

<!-- UiKit -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
<!-- UiKit -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>

@section('cssExtras')

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script> --}}



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
    
    @media (min-width: 1281px) {
        .img-g {
            height: 90px;
            width: 100%;
        }
    }
    
    @media (min-width: 1025px) and (max-width: 1280px) {
        .img-g {
            height: 90px;
            width: 100%;
        }
    }
    
    @media (min-width: 768px) and (max-width: 1024px) {
        .img-g {
            height: 120px;
            width: 100%;
        }
    }
    
    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        .img-g {
            height: 120px;
            width: 100%;
        }
    }
    
    @media (min-width: 481px) and (max-width: 767px)  {
        .img-g {
            height: 120px;
            width: 100%;
        }
    }
    
    @media (min-width: 320px) and (max-width: 480px) {
        .img-g {
            height: 120px;
            width: 100%;
        }
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
</style>
@endsection

@section('content')
<div class="row mb-4 px-2">
    <a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
</div>

{{-- <div class="container">
    <h2>Filterable List</h2>
    <p>Type something in the input field to search the list for specific items:</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <ul class="list-group" id="myList">
      <li class="list-group-item">First item</li>
      <li class="list-group-item">Second item</li>
      <li class="list-group-item">Third item</li>
      <li class="list-group-item">Fourth</li>
    </ul>  
  </div>

  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> --}}
  
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <h1 class="display-4">Listado de espectáculos</h1>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
            <a href="{{ route('config.breca_espectaculos.create') }}" class="boton btn btn-outline bg-white">Agregar nuevo espect&aacute;culo</a>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row">
        <div class="col">
            <div uk-filter="target: .js-filter">

                <ul class="uk-subnav uk-subnav-pill">
                    @foreach ($categorias as $c)
                        <li uk-filter-control="{{ $c->categoria }}"><a href="#">{{ $c->categoria }}</a></li>
                    @endforeach
                </ul>
            
                <ul class="js-filter uk-text-center">
                    @foreach ($categorias as $c)
                        <li class="{{ $c->categoria }}">
                            <div class="uk-card uk-card-default uk-card-body">
                                
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div> --}}

    {{-- <div class="container">
        <h2>Filterable List</h2>
        <p>Type something in the input field to search the list for specific items:</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <div class="row" id="myList">
            <div class="col">

            </div>
        </div>  
    </div> --}}
  


    <div class="container">
        <h2>Buscar espect&aacute;culos</h2> 
        <input class="form-control" id="myInput" type="text" placeholder="Ingresa el titulo o algo relacionado al espect&aacute;culo deseado">
        <div class="row" id="myList">
    
            @foreach ($espectaculos as $e)
           
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 px-4 mt-1 py-5 lcol mx-auto">
                    
                    <div class="row">
                        
                        <div class="card px-0">
                            {{--
                            <img src="{{ asset('img2/photos/breca_espectaculos/'.$e->imagen) }}" alt="" class="img-fluid w-100 rounded" style="height: 300px;">
                            --}}
                            <div style="background-image: url('{{ asset('img2/photos/breca_espectaculos/'.$e->imagen) }}'); background-color: black; background-position: center center; background-repeat: no-repeat; background-size: contain; height: 400px; width: 100%;"></div>
                            <div class="card-body">
                                <div class="col-12 text-center">
                                    <h1>{!! $e->titulo !!}</h1>
                                </div>
                                <div class="col-12 py-1 mt-2 mb-2" style="overflow: auto; max-height: 200px;">
                                    <p>{!! $e->descripcion !!}</p>
                                </div>
                                <div class="col-6 mx-auto">
                                    <div class="row">
                                        <div class="col-12 mx-auto">
                                            <div class="row">
                                                <div class="col">
                                                    <!-- Button trigger modal -->
                                                <a class="btn btn-outline bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $e->id }}">
                                                    <h1 class="m-0"><i class="far fa-images text-dark"></i></h1>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal-{{ $e->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content bg-light" style="border-radius: 16px;">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel">Galería de imágenes</h3>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="uk-slider-container-offset" uk-slider>
                                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                                                        <ul class="uk-slider-items uk-child-width-1-1@s uk-grid">
                                                                            @foreach ($galeria as $g)
                                                                                @if ($g->espectaculo == $e->id)
                                                                                    <li class="text-center">
                                                                                        <img src="{{ asset('img2/photos/breca_espectaculos/galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;">
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
                                {{--
                                <div class="col-12 text-center py-3 mx-auto">
                                    <a class="uk-button uk-button-default" href="#modal-center" uk-toggle>Contacto</a>
                                    <div id="modal-center" class="uk-flex-top" uk-modal>
                                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            <p>
                                                {!! $e->contacto !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                --}}
                            </div>
                            <div class="card-footer">
                                <div class="col mx-auto">
                                    <div class="row py-1">
                                        <div class="col text-center">
                                            <a href="{{ route('config.breca_espectaculos.breca_espectaculos_imagenes.index', [$e->id]) }}" class="btn btn-block px-3 btn-md border bg-white">Administrar galeria de fotos</a>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col text-center">
                                            <a href="{{ route('config.breca_espectaculos.edit', [$e->id]) }}" class="btn btn-block px-3 btn-md border bg-white">Modificar espectaculo</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-2 text-center">
                                            <form action="{{ route('config.breca_espectaculos.destroy',$e->id) }}" method="POST" style="display: inline;">						
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-md btn-danger btn-block bg-danger" onclick="return confirm('Deseas eliminar este espectaculo')">Eliminar</button>
                                            </form>
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
  
{{-- 
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </div>
    </div>
    <div class="row">
    
        @foreach ($espectaculos as $e)
       
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 px-4 mt-5 py-5">
                
                <div class="row">
                    
                    <div class="card px-0">
                        <img src="{{ asset('img2/photos/breca_espectaculos/'.$e->imagen) }}" alt="" class="img-fluid w-100 rounded" style="height: 300px;">
                        <div class="card-body">
                            <div class="col-12 text-center">
                                <h1>{!! $e->titulo !!}</h1>
                            </div>
                            <div class="col-12 py-1 mt-2 mb-2" style="overflow: auto; max-height: 200px;">
                                <p>{!! $e->descripcion !!}</p>
                            </div>
                            <div class="col-6 mx-auto">
                                <div class="row">
                                    <div class="col-12 mx-auto">
                                        <div class="row">
                                            <div class="col">
                                                <!-- Button trigger modal -->
                                            <a class="btn btn-outline bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $e->id }}">
                                                <h1 class="m-0"><i class="far fa-images text-dark"></i></h1>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-{{ $e->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content bg-light" style="border-radius: 16px;">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title" id="exampleModalLabel">Galeria de imagenes</h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="uk-slider-container-offset" uk-slider>
                                                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                                                    <ul class="uk-slider-items uk-child-width-1-1@s uk-grid">
                                                                        @foreach ($galeria as $g)
                                                                            @if ($g->espectaculo == $e->id)
                                                                                <li class="text-center">
                                                                                    <img src="{{ asset('img2/photos/breca_espectaculos/galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;">
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
                            <div class="col-12 text-center py-3 mx-auto">
                                <a class="uk-button uk-button-default" href="#modal-center" uk-toggle>Contacto</a>
                                <div id="modal-center" class="uk-flex-top" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <p>
                                            {!! $e->contacto !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="col mx-auto">
                                <div class="row py-1">
                                    <div class="col text-center">
                                        <a href="{{ route('config.breca_espectaculos.breca_espectaculos_imagenes.index', [$e->id]) }}" class="btn btn-block px-3 btn-md border bg-white">Administrar galeria de fotos</a>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col text-center">
                                        <a href="{{ route('config.breca_espectaculos.edit', [$e->id]) }}" class="btn btn-block px-3 btn-md border bg-white">Modificar espectaculo</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-2 text-center">
                                        <form action="{{ route('config.breca_espectaculos.destroy',$e->id) }}" method="POST" style="display: inline;">						
                                            @csrf
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-md btn-danger btn-block bg-danger"  onclick="return confirm('Deseas eliminar este espectaculo')">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        
            </div>
        @endforeach

    </div>
</div> --}}

@endsection

@section('jsLibExtras2')
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myList li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

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

<script>
    function myFunction() {
        let text = "Press a button!\nEither OK or Cancel.";
        
        if (confirm(text) == true) {
            text = "You pressed OK!";
        } else {
            text = "You canceled!";
        }
        
        document.getElementById("demo").innerHTML = text;
    }
</script>

<br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('jqueryExtra')

@endsection



