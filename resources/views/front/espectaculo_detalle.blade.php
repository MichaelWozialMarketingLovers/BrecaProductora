@extends('layouts.front')

@section('cssExtras')
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
@endsection

@section('styleExtras')
    <style>
        @media (min-width: 1281px) {
            .com {
                background: rebeccapurple; 
                position: absolute; 
                width: 550px; 
                height: 500px; 
                top: -500px;
            }

            .cov {
                height: 800px;
                
            }

            .covi {
                height: 300px;
                width: 360px;
            }

            .gal {
                height: 800px;
            }

            .subgal {
                height: 800px;
            }

            .desc {
                overflow: auto; 
                max-height: 270px; 
                color: black !important;
            }
        }

        @media (min-width: 1025px) and (max-width: 1280px) {
            .com {
                background: rebeccapurple; 
                position: absolute; 
                width: 450px; 
                height: 500px; 
                top: -500px;
            }

            .cov {
                height: 800px;
              
            }

            .covi {
                height: 300px;
                width: 360px;
            }


            .gal {
                height: 800px;
            }

            .subgal {
                height: 800px;
            }

            .desc {
                overflow: auto; 
                max-height: 270px; 
                color: black !important;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .com {
                background: rebeccapurple; 
                position: absolute; 
                width: 450px; 
                height: 500px; 
                top: -500px;
            }

            .cov {
                height: 800px;
                
            }

            .covi {
                height: 300px;
                width: 460px;
            }


            .gal {
                height: 800px;
            }

            .subgal {
                height: 800px;
            }

            .desc {
                overflow: auto; 
                max-height: 200px; 
                color: black !important;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
            .com {
                background: rebeccapurple; 
                position: absolute; 
                width: 550px; 
                height: 500px; 
                top: -500px;
            }

            .cov {
                height: 800px;
              
            }

            .covi {
                height: 300px;
                width: 360px;
            }


            .gal {
                height: 800px;
            }

            .subgal {
                height: 800px;
            }

            .desc {
                overflow: auto; 
                max-height: 270px; 
                color: black !important;
            }
        }

        @media (min-width: 481px) and (max-width: 767px) {
            .com {
                background: rebeccapurple; 
                position: absolute; 
                width: 380px; 
                height: 500px; 
                top: -500px;
            }
            
            .cov {
                height: 150px;
                width: 93px;
                background-size: 330px 300px; 
            }

            .covi {
                height: 10px;
                width: 160px;
            }


            .gal {
                height: 300px;
            }

            .subgal {
                height: 300px;
            }

            .desc {
                overflow: auto; 
                max-height: 150px; 
                color: black !important;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .com {
                background: rebeccapurple; 
                position: absolute; 
                width: 380px; 
                height: 500px; 
                top: -500px;
            }
            
            .cov {
                height: 150px;
                width: 93px;
                background-size: 330px 300px; 
            }

            .covi {
                height: 100px;
                width: 160px;
            }


            .gal {
                height: 300px;
            }

            .subgal {
                height: 300px;
            }

            .desc {
                overflow: auto; 
                max-height: 150px; 
                color: black !important;
            }
        }
    </style>
@endsection

@section('content')

{{-- <main class="mb-5">
    <div class="container-fluid mt-5">
        <div class="row" style="background: red;">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-9 col-xs-9 mx-auto">
                
                <div class="row">
                    <div id="espacios-sm-xs">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></b>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-4 col-xs-4 px-5" style="background-color: #8E38E8; z-index: 2; position: absolute; bottom: 0px; ">
      
                                <div class="row">
                                    <div class="col">
                                        <div class="py-3">
                                            <h1>{!! $espectaculos->titulo !!}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p style="text-align: justify;" style="overflow: auto; max-height: 500px;">
                                            {!! $espectaculos->descripcion !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col py-5 text-center">
                                        
                                        <a class="uk-button uk-button-default bg-white" href="#modal-container" uk-toggle>Contactar</a>
                                        <div id="modal-container" class="uk-modal-container" uk-modal>
                                            <div class="uk-modal-dialog uk-modal-body">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <h2 class="uk-modal-title">Información de contacto</h2>
                                                <p>{!! $espectaculos->contacto !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    </div> 
                </div>
            </div>
            
            <div class="md-d">
                <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            </div>
            
            <div class="sm-d">
                <br>
            </div>
            
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col" style="z-index: 1;">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">
                            <ul class="uk-slider-items uk-grid">
                                @foreach ($galeria as $g)
                                    @if ($g->espectaculo == $espectaculo)
                                        <li class="uk-width-1">
                                            <div class="uk-panel">
                                                <img src="{{ asset('img2/photos/breca_espectaculos/galeria/'.$g->foto) }}" alt="" class="img-fluid">
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="espacios-md-sm-xs">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</main> --}}


<div class="col-12 mt-4">

    <div class="container d-flex  flex-wrap p-0">
        
        <div class="col-3 cov">
            <img class="col-12 img-fluid covi" src="{{ asset('img2/photos/breca_espectaculos/'.$espectaculos->imagen) }}" alt="">
        </div>

        <div class="col-9 p-0" style="background: palevioletred; height: 800px;">
            <div class="row">
              
                <div class="galeria gal">
                    @foreach ($galeria as $g)
                    @if ($g->espectaculo == $espectaculos->id)
                         <div class="col-12 subgal" style="background-size: cover; background-image: url({{ asset('img2/photos/breca_espectaculos/galeria/'.$g->foto) }});">
                             <img src="" alt=""  class="">            
                         </div>
                    @endif
                 @endforeach
                </div>
            </div>
        </div>
{{-- 
        <div class="container p-0" style="background: ; height: 500px; position: absolute; bottom: 43px;">
            <div class="col-5 p-4"  style="background-color: #8E38E8; height: 100%;">
                <div class="row">
                    <div class="col">
                        <div class="py-3">
                            <h1>{!! $espectaculos->titulo !!}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: justify;" style="overflow: auto; max-height: 500px;">
                            {!! $espectaculos->descripcion !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-5 text-center">
                        <a class="uk-button uk-button-default bg-white" href="#modal-container" uk-toggle>Contactar</a>
                        <div id="modal-container" class="uk-modal-container" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <h2 class="uk-modal-title">Informaci贸n de contacto</h2>
                                <p>{!! $espectaculos->contacto !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        
            {{-- <div class="col-4 p-4"  style="background-color: #8E38E8; height: 500px; width: 500px;  position: absolute; bottom: 20px;">
                <div class="row">
                    <div class="col">
                        <div class="py-3">
                            <h1>{!! $espectaculos->titulo !!}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: justify;" style="overflow: auto; max-height: 500px;">
                            {!! $espectaculos->descripcion !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-5 text-center">
                        <a class="uk-button uk-button-default bg-white" href="#modal-container" uk-toggle>Contactar</a>
                        <div id="modal-container" class="uk-modal-container" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <h2 class="uk-modal-title">Informaci贸n de contacto</h2>
                                <p>{!! $espectaculos->contacto !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        

    </div>

</div>

<div class="col-12 mb-5" style="">
    <div class="container p-0" style="position: relative;">

        <div class="p-4 com">
            <div class="row">
                <div class="col">
                    <div class="py-3">
                        <h1 style="color: ;">{!! $espectaculos->titulo !!}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col desc" style="">
                    <div style="text-align: justify;" >
                        {!! $espectaculos->descripcion !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-5 text-center">
                    {{--
                    <a class="uk-button uk-button-default bg-white" href="#modal-container" uk-toggle>Contactar</a>
                    --}}
                    <div id="modal-container" class="uk-modal-container" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <h2 class="uk-modal-title">Informaci贸n de contacto</h2>
                            <p>{!! $espectaculos->contacto !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

</div>








@endsection

@section('jsLibExtras2')
<script>
    

    $('.galeria').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
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
