@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">

	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection

@section('styleExtras')

    <style>

    .video_s {
        height: 690px;
        width: 100%;
    }

     .padre {
  width: 100%;
  height: 500px;
  position: relative; /* Establecer posición relativa */
  border: 1px solid black; /* Solo para visualización */
  /* background-image: url(https://picsum.photos/seed/picsum/200/300); Agregar imagen de fondo */
  /* background-size: cover;*/ /* Escalar imagen para llenar el contenedor */
  background-position: center; /* Centrar la imagen en el contenedor */
  overflow: hidden; /* Ocultar contenido que sobresalga del contenedor */
}

.overlay {
  position: absolute; /* Establecer posición absoluta */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9); /* Establecer color de fondo semi-transparente */
  opacity: 0; /* Establecer opacidad inicial en 0 */
  transform: translateX(-100%); /* Desplazar hacia la izquierda */
  transition: opacity 0.5s ease-in-out, transform 0.8s ease-in-out; /* Establecer transición de opacidad y desplazamiento */
}

.padre:hover .overlay {
  opacity: 1; /* Establecer opacidad al 100% al pasar el cursor por encima */
  transform: translateX(0); /* Desplazar hacia la derecha */
}

.contenido {
  position: absolute; /* Establecer posición absoluta */
  top: 50%; /* Centrar verticalmente */
  left: 50%; /* Centrar horizontalmente */
  transform: translate(-50%, -50%); /* Centrar en el medio */
  color: white; /* Establecer color de texto */
  font-size: 24px; /* Establecer tamaño de fuente */
}
</style>

<style>
                    .circulo {
                        background-color: white;
                    }

                    .circulo:hover {
                        background-color: #3B1263;
                        color: white;
                    }

                    .circulo:focus {
                        color: white;
                    }

                    #prevButton:hover {
                        color: white;
                    }

                    #nextButton:hover {
                        color: white;
                    }
                </style>

@endsection

@section('content')



<div class="container-fluid px-3">
    <div class="row">
        <div class="col">
            @php
                $co = 1;
                $bandera = 0;
                $co0 = 1;
            @endphp
            <div class="row px-lg-5 px-sm-0 px-xs-0">
 
                <div id="carruselEspectaculos">

                @for ($contador = 0; $contador < $total; $contador++)
    @if ($espectaculos[$contador]->activo != 0)
        
    
                @if ($co0 == 1)
                    <div class="col">
                        <div class="row">
                @endif

                @if ($co == 1)
                    @php
                        $bandera++; 
                    @endphp

                    @if($bandera++ % 3 == 0)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-1">
                    @else 
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-2" style="margin-top: 160px;">
                    @endif
                @endif

                        <div class="row p-3 mt-2">
                            <div class="col">
                                <div class="padre" style="background-image: url('{{ asset('img2/photos/breca_espectaculos/'.$espectaculos[$contador]->imagen) }}'); background-size: contain; background-repeat: no-repeat; background-color: black;">
                                    <div class="overlay">
                                      <div class="contenido">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 titulo-overlay">
                                                <div class="titulo-overlay">
                                                    {!! $espectaculos[$contador]->titulo !!}                         
                                                </div>                         	         
                                            </div>			                                 
                                        </div>                                                
                                        <div class="row">                                 
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 mx-auto border-bottom border-white border-1 linea-overlay py-1"></div>
                                        </div>
                                        <div class="row py-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-white">
                                                <div class="subtitulo-overlay">
                                                    @foreach ($categorias as $c)
                                                        @if($c->id == $espectaculos[$contador]->categoria)
                                                            <p class="m-0" style="font-size: 14px;">
                                                                {{ $c->categoria }}
                                                            </p>
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">		
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="texto-overlay" style="font-size: 14px; text-align: justify; padding: 0%; overflow: hidden; text-overflow: ellipsis; white-space: wrap;">
                                                    {!! strip_tags($espectaculos[$contador]->descripcion) !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-end">
                                                <a class="icono-overlay" href="{{ route('front.espectaculoDetalle', [$espectaculos[$contador]->id]) }}"><i class="fas fa-chevron-circle-right" style="font-size:32px; color:white"></i></a>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($co == 2)
                            @php
                                $co = 0;
                            @endphp
                            </div>
                        @endif


                        @php 
                            $co++;
                        @endphp

                        @if ($co0 == 6)
                    </div>
                            </div>
                            @php
                                $co0 = 0;
                            @endphp
                        @endif

                        @php
                            $co0++;
                        @endphp
    @endif
                    @endfor
                </div>
            </div>
            </div>
        </div>
        
        
        <div class="row">
                    <div class="col position-relative">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-xs-5 mt-5 py-5 position-absolute top-100 start-50 translate-middle">
                            <div class="row  mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-xs-5 mt-5">
                                <div class="col  mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-5 mt-xs-5 mt-5 py-5 position-relative">
                                    <div class="col-6 py-5 position-absolute top-0 start-50 translate-middle">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 py-5 text-center">
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12 py-xxl-4 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-xs-3 py-3 mx-auto border border-2 border-dark rounded-circle circulo">
                                                    <a href="#/" id="prevButton" class="" uk-icon="icon: chevron-left; ratio: 2;" style="text-decoration: none;"></a>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 py-5 text-center">
                                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12 py-xxl-4 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-xs-3 py-3 mx-auto border border-2 border-dark rounded-circle circulo">
                                                    <a href="#/" id="nextButton" class="" uk-icon="icon: chevron-right; ratio: 2;" style="text-decoration: none;"></a>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
        
        
    </div>
</div>






<div class="container-fluid mt-5 mb-5 py-3">
    <div class="row px-0">
        <div class="col mx-auto mt-0 position-absolute" style="z-index: 1;">
            <div id="encabezado-sm-xs">
                <br><br><br>
            </div>
            <div id="encabezado-sm-xs">
                <br><br><br>
            </div>
            <div class="row">  
                {{-- xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 --}}
                <div class="py-2 gx-5 col bg-white position-relative">
                    <div class="col px-2">
                        <div class="row mt-5">
            <div id="espectaculos_carrusel">
                
            </div>
            
        </div>
            </div>
            <div class="row mt-5 mb-5 py-1 px-5">
                <div class="row">
                    <div class="col">
                        <div class="row mb-3">
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 mx-auto text-center">
                                <img src="{{ asset('img/photos/seccions/'.$elements[0]->imagen) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto text-center">
                                <p>
                                    {!! $elements[1]->texto !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="col">
                    
                    @if ($elements[2]->imagen == '' and $elements[2]->texto != '')
                        <div class="row">
                            <div class="col">
                                <iframe width="100%" class="video_s" src="https://www.youtube.com/embed/{{ $youtube }}?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    @else
                        @if($formato[1] == 'mp4')
                            <video class="video_s" width="100%" autoplay controls>
                                <source src="{{ asset('img/photos/seccions/'.$elements[2]->imagen) }}" type="video/mp4">
                            </video> 
                        @else   
                            <img src="{{ asset('img/photos/seccions/'.$elements[2]->imagen) }}" alt="" class="img-fluid" width="100%">
                        @endif
                    @endif

                </div>
            </div>
            <div class="row mt-5 px-5">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 py-5 rounded" style="background-color: #3B1263;">
                    <div class="row">
                        <div class="col text-center">
                            <img src="{{ asset('img/design/home/foquito.png') }}" alt="" class="img-fluid" width="20%">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-9 mx-auto text-white">
                            <div class="accordion bg-transparent" id="accordionExample">

                                @foreach ($servicios as $s)
                                    <div class="accordion-item bg-transparent border-0">
                                    <h2 class="accordion-header" id="heading{{ $s->id }}">
                                        <button class="accordion-button text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $s->id }}" aria-expanded="true" aria-controls="collapse{{ $s->id }}">
                                            <h2 class="text-white">{{ $s->titulo }}</h2>
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $s->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $s->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-white">
                                            {!! $s->descripcion !!}
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-11 col-lg-11 col-md-11 col-sm-9 col-xs-9 mt-2"><div class="row py-1"><div class="col border border-white "></div></div></div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3 col-xs-3"><input class="uk-checkbox" type="checkbox" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                {{--
                                                <a class="uk-button uk-button-default text-white" href="{{ route('front.servicios') }}">Contactar</a>
                                                --}}
                                                {{-- <a class="uk-button uk-button-default text-white" href="#modal-center" uk-toggle>Contactar</a>
				            					<div id="modal-center" class="uk-flex-top" uk-modal>
    						            			<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    									                <button class="uk-modal-close-default" type="button" uk-close></button>
    	            								    <p>{!! $s->contacto !!}</p>
					            				    </div>
								            	</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12 py-5">
                    <div class="row">
                        <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 col-xs-12 text-end">
                            <h1 class="display-1">
                                {!! $elements[3]->texto !!}
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 mx-auto" style="text-align: justify;">
                            <p>
                                {!! $elements[4]->texto !!}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 mx-auto text-end">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-2">
                                    <img src="{{ asset('img/photos/seccions/'.$elements[5]->imagen) }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-2">
                                    <img src="{{ asset('img/photos/seccions/'.$elements[6]->imagen) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="col mt-5">
                    <div class="row py-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <p class="display-1">
                                {{ strip_tags($elements[7]->texto) }}
                            </p>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mx-auto text-center">
                            <p style="color: #552482;">
                                {{ strip_tags($elements[8]->texto) }}
                            </p>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 text-center mx-auto">
                            <div class="row">
                                <div id="carrusel-empresas">
                                    @foreach ($carruselEmpresas as $ce)
                                        <div class="col text-center">
                                            <img src="{{ asset('img2/photos/carrusel_marcas/'.$ce->foto) }}" alt="" class="img-fluid px-5">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer">
        <div class="container-fluid px-5" style="background-image: url({{ asset('img/design/home/footerbg.png') }}); background-size: cover;">
            <div class="row py-5">
                <div class="col-12 mx-auto border border-white">
                    <div class="row mt-3 mb-3">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 px-5 py-5 border-end border-white">
                            <div class="row">
                                <div class="col-9">
                                    <h3 class="text-white m-0">Necesitas ayuda?</h3>
                                    <h3 class="text-white m-0">Escribenos</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col py-1 text-white">
                                    Deja tu correo y tu comentario y un asesor se reportará contigo a la brevedad.
                                </div>
                            </div>
                            <form action="{{ route('formularioContac') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
                                        <input type="text" name="nombre" id="nombre" class="form-control text-white bg-transparent py-2" placeholder="NOMBRE" required/>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2">
                                        <input type="email" name="correo" id="correo" class="form-control text-white bg-transparent py-2" placeholder="CORREO" required/>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2">
                                        <input type="text" name="whatsapp" id="whatsapp" class="form-control text-white bg-transparent py-2" placeholder="WHATSAPP" required/>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="mensaje" name="mensaje" cols="30" rows="2" style="color: white;" class="form-control py-2 bg-transparent text-white" placeholder="MENSAJE" required></textarea>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col text-center">
                                        <input type="submit" value="enviar" class="btn btn-outline px-5 border border-secondary text-white" style="background-color: #8E38E8;">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-xs-12 mt-5 border-bottom border-white">
                                    <div class="row px-5 mt-5">
                                        <div class="col mt-5 py-5 text-start">
                                            <img src="{{ asset('img/design/home/empresab.png') }}" alt="" class="img-fluid mt-5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 align-items-end border-bottom border-white">
                                    <div class="row px-3 mt-5">
                                        <div class="col mt-5 text-white text-end">
                                            <a href="https://wa.me/{!! $data->whatsapp ?? '' !!}" uk-icon="icon: whatsapp; ratio: 1.5"></a>
                                            <a href="{!! $data->facebook ?? '' !!}" uk-icon="icon: facebook; ratio: 1.5"></a>
                                            <a href="{!! $data->instagram ?? '' !!}" uk-icon="icon: instagram; ratio: 1.5"></a>
                                        </div>
                                    </div>
                                    <div class="row px-3 mt-3">
                                        <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0 col-xs-0"></div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-white text-end">
                                            {{ $data->direccion }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3 text-white text-start">
                                    <a href="{{ route('front.avisoPrivacidad') }}" class="text-white" style="text-decoration: none;">aviso de privacidad</a> <br>
                                    <a href="{{ route('front.preguntas') }}" class="text-white" style="text-decoration: none;">preguntas frecuentes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-2 text-center text-white">
                    breca 2023 todos los derechos reservados diseño por wozial
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-image: url(img/home/footerbg.png); background-size: cover; background-color: #3B1263;">
            <div class="modal-header text-center">
                <img src="img/home/empresa.png" alt="" class="img-fluid">
                <button type="button"  class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <div class="container text-center" style="background-image: url(img/home/foquito.png); background-size: contain; background-repeat: no-repeat; background-position:center; background-position-x: center;"> -->
                <div class="container text-center">
                    <div class="row">
                        <div class="col text-center">
                            <a href="index.html"><p class="texto-animado-1 display-3 text-white">Home</p></a>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="artistas.html"><p class="display-3 text-white">Artistas</p></a>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="espectaculos.html"><p class="display-3 text-white">Espectaculos</p></a>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="servicios.html"><p class="display-3 text-white">Servicios</p></a>	
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center text-white">
                Breca 2023 todos los derechos reservados. Diseño por WOZIAL.
            </div>
        </div>
    </div>
</div>
	
@endsection

@section('jqueryExtra')


<script>
    $('#espectaculos_carrusel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        rows: 2,
        slidesPerRow: 3,
        prevArrow: '.anteriorr',
        nextArrow: '.siguientee',
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                rows: 2,
                slidesPerRow: 2,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                rows: 1,
                slidesPerRow: 1,
            }
        },
        {
            breakpoint: 375,
            settings: {
                rows: 1,
                slidesPerRow: 1,

            }
        }
        
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
</script>

<script>
    $('#carruselEspectaculos').slick({
        dots: false,
        autoplay: false,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '#anterior',
        nextArrow: '#siguiente',
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
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

<script>
    $(document).ready(function(){
    
      $('#prevButton').click(function(event) {
        event.preventDefault();
        $('#carruselEspectaculos').slick('slickPrev');
      });
    
      $('#nextButton').click(function(event) {
        event.preventDefault();
        $('#carruselEspectaculos').slick('slickNext');
      });
    });
    </script>

<script>
    $('#carrusel-empresas').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
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
