@extends('layouts.front')

<!-- SlickJS -->
<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
<!-- SlickJS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@section('cssExtras')
@endsection

@section('styleExtras')
    <style>
        
        body {
            background-color: black;
        }

        .slick-slide { 
            padding:10px;
        }

    </style>
@endsection

@section('content')

<main class="mb-5">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-5">
                <div class="row">
                    <div class="col text-white">
                        <div class="mt-5 py-5">
                            <div class="row mt-5">
                                <div class="col py-3 text-end">
                                    <img src="{{ asset('img/design/servicios_detalle/foco.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <h1 style="color: #552482;" class="fw-bolder display-4">Masterclass y talleres</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <a href="#" class="border border-3 border-white rounded-circle p-3" id="anterior" uk-icon="icon: chevron-left; ratio: 2.5"></a>&nbsp;&nbsp;
                                    <a href="#" class="border border-3 border-white rounded-circle p-3" id="siguiente" uk-icon="icon: chevron-right; ratio: 2.5"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col text-white text-end">
                        <a href="#" id="anterior" uk-icon="icon: chevron-left; ratio: 4" class=""></a>
                        <a href="#" id="siguiente" uk-icon="icon: chevron-right; ratio: 4"></a>
                    </div>
                </div> --}}
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-xs-12 text-white">
                <div class="row">
                    <div class="col">
                        <div class="carrusel">
                            @foreach ($masterclass as $m)
                            <div>
                                <div class="row">
                                   
                                    <div class="col">
                                        <div class="card bg-transparent mt-5 border-0 efecto-fade--detalle_servicios efecto-grow--cont__detalle_servicios">
                                            {{-- <img src="{{ asset('img2/photos/masterclass/'.$m->imagen) }}" alt="" class="img-fluid" style="height: 800px; width: 100%;"> --}}
                                            <div style="background-image: url('{{ asset('img2/photos/masterclass/'.$m->imagen) }}'); background-color: black; background-position: center center; background-repeat: no-repeat; background-size: contain; height: 700px; width: 100%;"></div>
                                            <div class="card-body bg-white">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <h2 class="fw-bolder" style="color: #552482;">{!! $m->titulo !!}</h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-5">
                                                    <div class="col-11 mx-auto text-dark text-start py-1 mb-5" style="overflow-y: scroll; height: 220px; max-height: 200px;">
                                                        <p>
                                                            {!! $m->descripcion !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                {{-- <div class="row">
                                                    <div class="col py-3 text-center">
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
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('jsLibExtras2')

<script>
    $('.carrusel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '#anterior',
        nextArrow: '#siguiente',
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
</script>

@endsection
