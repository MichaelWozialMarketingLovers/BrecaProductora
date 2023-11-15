@extends('layouts.front')

@section('cssExtras')
@endsection

@section('styleExtras')
    <!-- UiKit -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
    <!-- UiKit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <style>
        a {
            text-decoration: none;
        }
    </style>

@endsection

@section('content')

<main>
    <div class="container-fluid">
        <div class="row mt-5 px-5">
            <div class="col efecto-fade--artistas"> <!-- efecto-fade--artistas -->
                <img src="{{ asset('img/photos/seccions/'.$elements[0]->imagen) }}" alt="" class="img-fluid" width="100%">
            </div>
        </div>
        <div class="row px-5">
            <div class="col text-center display-1 py-5 mt-5 mb-5">
                Nuestros artistas
            </div>
        </div>
        @php
            $contador = 0;
            $bandera = 1;
        @endphp

        <div class="row px-5">
            <div class="col">
                <div class="row">
                    @foreach ($artistas as $a)

                    @if ($bandera == 1)
                        <div class="row">
                    @endif

                    @if ($bandera == 2)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto py-5">
                            {{-- {{ $bandera }} - {{ $contador }} --}}
                            <div class="row" style="z-index: 1;">                    
                                    {{-- {{ $contador++ }} - {{ $contador+1 }} --}}
                                    <div class="col py-5 text-center efecto-grow--artistas"> <!-- efecto-grow--artistas -->
                                        <img src="{{ asset('img2/photos/artistas/'.$a->foto) }}" alt="" class="img-fluid rounded-circle" width="220px" height="220px">
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h2 style="color: #8E38E8;"> {{ $a->nombre }} {{ $a->apellidos }} </h2>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9 col-xs-9 text-center mx-auto">
                                        <div style="color: #8E38E8; border: blueviolet 1px solid;"></div>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h2>{{ $a->tipo_artista }}</h2>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h3 class="texto-detalle-artistas" style="font-size: 16px;">
                                            {!! $a->descripcion !!}
                                        </h3>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col py-3 text-center">
                                        {{-- <a href="{{ $a->facebook }}" class="px-1" uk-icon="icon: facebook; ratio: 1.2"></a>
                                        <a href="{{ $a->instagram }}" class="px-1" uk-icon="icon: instagram; ratio: 1.2"></a>
                                        <a href="https://wa.me/{{ $a->whatsapp }}" class="px-1" uk-icon="icon: whatsapp; ratio: 1.2"></a> --}}
                                        <!-- Button trigger modal -->
                                        <a class="btn btn-outline px-0 bg-white mt-1 btn-pro" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $a->id }}">
                                            <h1><i class="far fa-images text-dark"></i></h1>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{ $a->id }}" tabindex="" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-header px-5">
                                                        {{-- <h3 class="modal-title text-white" id="exampleModalLabel">Galeria de imagenes</h3> --}}
                                                        <button type="button" class="btn-close text-white bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <div class="uk-slider-container-offset" uk-slider>
                                                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                                                    @foreach ($galeria as $g)
                                                                        @if ($g->artista == $a->id)
                                                                            <li class="uk-width-1-1">
                                                                                <div class="bg-dark" style="
                                                                                background-image: url('{{ asset('img2/photos/artista_galeria/'.$g->foto) }}');
                                                                                background-size: contain;
                                                                                background-position: center center;
                                                                                background-repeat: no-repeat;
                                                                                width: 100%;
                                                                                height: 500px;
                                                                                ">

                                                                                </div>
                                                                                {{-- <img src="{{ asset('img2/photos/artista_galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;"> --}}
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
                                                    <div class="modal-footer text-white">
                                                        <p class="" style="color: white;">
                                                            {!! $a->descripcion !!}
                                                        </p>
                                                        <button type="button" class="btn btn-secondary btn-salir" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    @else 
                        @if ($contador == $total - 2)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto py-5">
                                {{-- {{ $bandera }} - {{ $contador }} --}}
                                <div class="row" style="z-index: 1;">                    
                                    {{-- {{ $contador++ }} - {{ $contador+1 }} --}}
                                    <div class="col py-5 text-center efecto-grow--artistas"> <!-- efecto-grow--artistas -->
                                        <img src="{{ asset('img2/photos/artistas/'.$a->foto) }}" alt="" class="img-fluid rounded-circle" width="220px" height="220px">
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h2 style="color: #8E38E8;"> {{ $a->nombre }} {{ $a->apellidos }} </h2>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9 col-xs-9 text-center mx-auto">
                                        <div style="color: #8E38E8; border: blueviolet 1px solid;"></div>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h2>{{ $a->tipo_artista }}</h2>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h3 class="texto-detalle-artistas" style="font-size: 16px;">
                                            {!! $a->descripcion !!}
                                        </h3>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col py-3 text-center">
                                        {{-- <a href="{{ $a->facebook }}" class="px-1" uk-icon="icon: facebook; ratio: 1.2"></a>
                                        <a href="{{ $a->instagram }}" class="px-1" uk-icon="icon: instagram; ratio: 1.2"></a>
                                        <a href="https://wa.me/{{ $a->whatsapp }}" class="px-1" uk-icon="icon: whatsapp; ratio: 1.2"></a> --}}
                                        <!-- Button trigger modal -->
                                        <a class="btn btn-outline px-0 bg-white mt-1 btn-pro" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $a->id }}">
                                            <h1><i class="far fa-images text-dark"></i></h1>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{ $a->id }}" tabindex="" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-header px-5">
                                                        {{-- <h3 class="modal-title text-white" id="exampleModalLabel">Galeria de imagenes</h3> --}}
                                                        <button type="button" class="btn-close text-white bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <div class="uk-slider-container-offset" uk-slider>
                                                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                                                    @foreach ($galeria as $g)
                                                                        @if ($g->artista == $a->id)
                                                                            <li class="uk-width-1-1">
                                                                                <div class="bg-dark" style="
                                                                                background-image: url('{{ asset('img2/photos/artista_galeria/'.$g->foto) }}');
                                                                                background-size: contain;
                                                                                background-position: center center;
                                                                                background-repeat: no-repeat;
                                                                                width: 100%;
                                                                                height: 500px;
                                                                                ">

                                                                                </div>
                                                                                {{-- <img src="{{ asset('img2/photos/artista_galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;"> --}}
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
                                                    <div class="modal-footer text-white">
                                                        <p class="" style="color: white;">
                                                            {!! $a->descripcion !!}
                                                        </p>
                                                        <button type="button" class="btn btn-secondary btn-salir" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        @else 
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto py-5" style="margin-top: 160px;">
                                {{-- {{ $bandera }} - {{ $contador }} --}}
                                <div class="row" style="z-index: 1;">                    
                                    {{-- {{ $contador++ }} - {{ $contador+1 }} --}}
                                    <div class="col py-5 text-center efecto-grow--artistas"> <!-- efecto-grow--artistas -->
                                        <img src="{{ asset('img2/photos/artistas/'.$a->foto) }}" alt="" class="img-fluid rounded-circle" width="220px" height="220px">
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h2 style="color: #8E38E8;"> {{ $a->nombre }} {{ $a->apellidos }} </h2>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9 col-xs-9 text-center mx-auto">
                                        <div style="color: #8E38E8; border: blueviolet 1px solid;"></div>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h2>{{ $a->tipo_artista }}</h2>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col text-center">
                                        <h3 class="texto-detalle-artistas" style="font-size: 16px;">
                                            {!! $a->descripcion !!}
                                        </h3>
                                    </div>
                                </div>
                                <div class="row" style="z-index: 1;">
                                    <div class="col py-3 text-center">
                                        {{-- <a href="{{ $a->facebook }}" class="px-1" uk-icon="icon: facebook; ratio: 1.2"></a>
                                        <a href="{{ $a->instagram }}" class="px-1" uk-icon="icon: instagram; ratio: 1.2"></a>
                                        <a href="https://wa.me/{{ $a->whatsapp }}" class="px-1" uk-icon="icon: whatsapp; ratio: 1.2"></a> --}}
                                        <!-- Button trigger modal -->
                                        <a class="btn btn-outline px-0 bg-white mt-1 btn-pro" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $a->id }}">
                                            <h1><i class="far fa-images text-dark"></i></h1>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{ $a->id }}" tabindex="" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-header px-5">
                                                       {{-- <h3 class="modal-title text-white" id="exampleModalLabel">Galeria de imagenes</h3> --}}
                                                        <button type="button" class="btn-close text-white bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <div class="uk-slider-container-offset" uk-slider>
                                                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                                                    @foreach ($galeria as $g)
                                                                        @if ($g->artista == $a->id)
                                                                            <li class="uk-width-1-1">
                                                                                <div class="bg-dark" style="
                                                                                background-image: url('{{ asset('img2/photos/artista_galeria/'.$g->foto) }}');
                                                                                background-size: contain;
                                                                                background-position: center center;
                                                                                background-repeat: no-repeat;
                                                                                width: 100%;
                                                                                height: 500px;
                                                                                ">

                                                                                </div>
                                                                                {{-- <img src="{{ asset('img2/photos/artista_galeria/'.$g->foto) }}" alt="img-fluid" style="border-radius: 16px; width: 600px; height: 600px;"> --}}
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
                                                    <div class="modal-footer text-white">
                                                        <p class="" style="color: white;">
                                                            {!! $a->descripcion !!}
                                                        </p>
                                                        <button type="button" class="btn btn-secondary btn-salir" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        @endif
                        
                    @endif
                    

                    @if ($bandera == 3 or $contador + 1 == $total)
                </div>
                        @php
                            $bandera = 0;
                        @endphp
                    @endif
                    
                    @php
                        $contador++;
                        $bandera++;
                    @endphp
                      
                @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(".btn-pro").click(function(){
        $(".efecto-grow--cont__artistas").removeClass("efecto-grow--cont__artistas");
    });

    $(".btn-close").click(function() {
        $(".root-cont").addClass("efecto-grow--cont__artistas");
    });

    $(".btn-salir").click(function() {
        $(".root-cont").addClass("efecto-grow--cont__artistas");
    });
</script>

@endsection

@section('jsLibExtras2')
@endsection
