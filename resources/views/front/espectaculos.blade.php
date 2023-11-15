@extends('layouts.front')

@section('cssExtras')


@endsection

@section('styleExtras')


<link href="
https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css
" rel="stylesheet">

<style>
    .uk-search-icon-flip svg{
        padding: 0 !important;
        cursor: pointer;
    }

    .visible{
        display: block !important;
    }

    .uk-animation-shake{
        animation-name: uk-shake !important;
    }

    /* .img-gris {
        -webkit-filter: grayscale(80%);
        filter: grayscale(80%);
    } */

</style>

<style>
    .containerX {
        position: relative;
        width: 100%;
    }
    
    .middle {
        width: 80%;
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .containerX:hover .image {
        opacity: 0.1;
    }

    .containerX:hover .middle {
        opacity: 1;
    }

    .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 1px 1px;
    }


 .padre {
  width: 100%;
  height: 550px;
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

/*
    @media (min-width: 1281px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 400px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 1025px) and (max-width: 1280px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 360px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 360px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 500px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 481px) and (max-width: 767px) {

    }

    @media (min-width: 320px) and (max-width: 480px) {

    }
    
    @media (min-width: 1381px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 600px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 1025px) and (max-width: 1280px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 360px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 360px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 500px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 481px) and (max-width: 767px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 400px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .image {
            opacity: 1;
            display: block;
            width: 100%; 
            height: 400px;
            transition: .5s ease;
            backface-visibility: hidden;
        }
    }
*/
    
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }
    
</style>

@endsection

@section('content')
{{--
<div class="container-fluid px-xl-5 px-lg-5 px-md-3 px-sm-0 px-xs-0 mt-5 mb-5">
    <div uk-filter="target: .filter" class="filter-main">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarNav">
                    <ul class="navbar-nav px-5">
                        @foreach ($categorias as $c)
                            <li class=" px-5" onclick="resetSearchBar();" uk-filter-control="filter: [tag='f{{ $c->id }}'];">
                                <a class="nav-link--espectaculos active" id="link" aria-current="page" href="#" style=""><h3 class="nav-text-link--espectaculos"> {{ $c->categoria }} </h3></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <ul class="filter uk-text-right uk-dark uk-animation-toggle" uk-grid tabindex="0">
            @foreach ($categorias as $c)
                <li style="width: 100%" class="skills-el" tag='f{{ $c->id }}' data-name='{{ $c->id }}'>
                    <div class="row">
                        
                            @for ($contador = 0; $contador < $total; $contador++)
                                @if($espectaculos[$contador]->categoria == $c->id) 
                                    
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-3">
                                            <div class="containerX bg-dark text-white">
                                                <img src="{{ asset('img2/photos/breca_espectaculos/'.$espectaculos[$contador]->imagen) }}" alt="" class="img-fluid border image" style="">
                                                <div class="middle">
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
                                                                        {{ $c->categoria }}
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div class="row">		
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <p class="texto-overlay" style="text-align: justify; padding: 0%; overflow: hidden; text-overflow: ellipsis; white-space: wrap;">
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
                                    
                                @endif
                            @endfor
                        
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
--}}
{{--
<div class="container-fluid px-xl-5 px-lg-5 px-md-3 px-sm-0 px-xs-0 mt-5 mb-5">
    <div uk-filter="target: .filter" class="filter-main">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarNav">
                    <ul class="navbar-nav px-5">
                        @foreach ($categorias as $c)
                            <li class="nav-item px-5" onclick="resetSearchBar();" uk-filter-control="filter: [tag='f{{ $c->id }}'];">
                                <a class="nav-link--espectaculos active" id="link" aria-current="page" href="#" style=""><h3 class="nav-text-link--espectaculos"> {{ $c->categoria }} </h3></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <ul class="filter uk-text-right uk-dark uk-animation-toggle" uk-grid tabindex="0">
            @foreach ($categorias as $c)
            
                
                <li style="width: 100%" class="skills-el" tag='f{{ $c->id }}' data-name='{{ $c->id }}'>
                    @php
                $co = 1;
                $bandera = 0;
                $co0 = 1;
            @endphp
            @php
            $contador = 0;
        @endphp
            <div class="row">
 
                <div id="carruselEspectaculos">

                @for ($contador = 0; $contador < $total; $contador++)
                @if($espectaculos[$contador]->categoria == $c->id) 


                @if ($co0 == 1)
                    <div class="col">
                        <div class="row">
                @endif

                @if ($co == 1)
                    @php
                        $bandera++; 
                    @endphp

                    @if($bandera++ % 3 == 0)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                    @else 
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0" style="margin-top: 100px;">
                    @endif
                @endif

                <div class="row p-3 mt-2">
                    <div class="col">
                                <div class="col containerX bg-dark text-white">
                                <img src="{{ asset('img2/photos/breca_espectaculos/'.$espectaculos[$contador]->imagen) }}" alt="" class="img-fluid border image" style="">
                                    <div class="middle">
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
                                                            {{ $c->categoria }}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">		
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="texto-overlay" style="text-align: justify; padding: 0%; overflow: hidden; text-overflow: ellipsis; white-space: wrap;">
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
                </li>
            @endforeach
        </ul>
    </div>
</div>
--}}

<div class="container-fluid px-2 mt-5 mb-5">
    <div uk-filter="target: .filter" class="filter-main">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarNav">
                    <ul class="navbar-nav px-5">
                        @foreach ($categorias as $c)
                            <li class=" px-5" onclick="resetSearchBar();" uk-filter-control="filter: [tag='f{{ $c->id }}'];">
                                <a class="nav-link--espectaculos active" id="link" aria-current="page" href="#" style=""><h3 class="nav-text-link--espectaculos"> {{ $c->categoria }} </h3></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <ul class="filter uk-text-right uk-dark uk-animation-toggle" uk-grid tabindex="0">
            @foreach ($categorias as $c)
                @php
		            $co = 1;
		            $bandera = 0;
		            $co0 = 0;
                    $aux = 0;
                    $rowI = 2;
                @endphp
                <li style="width: 100%" class="skills-el" tag='f{{ $c->id }}' data-name='{{ $c->id }}'>
                    <div class="row ">
                        <div class="carrusel2">
                            @for ($contador = 0; $contador < $total; $contador++)
                                @if($espectaculos[$contador]->categoria == $c->id) 
                                    
                                    @if ($contador == $total - 1 )
                                        @php
                                            $bandera = 1;
                                        @endphp
                                    @endif

                                    @if ($co == 1)
                                        <div class="d-flex px-xl-5 px-lg-5 px-sm-0 px-xs-0 px-0 px-0 flex-wrap">
                                    @endif
                                   
                                    @if ($aux == 0)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 p-3 m-0 text-center">
                                   
                               
                                    @endif

                                    @if ($co == 1 or $co == 5)
                                        <div class="row p-2" style="margin-top: 160px;">
                                    @else
                                        <div class="row p-1 mt-3">
                                    @endif

                                        
                                            <div class="col mt-2">
                                                
                                                <div class="padre" style="background-image: url('{{ asset('img2/photos/breca_espectaculos/'.$espectaculos[$contador]->imagen) }}'); background-size: contain; background-repeat: no-repeat; background-color: black;">
                                                    <div class="overlay">
                                                      <div class="contenido">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 titulo-overlay">
                                                                <div class="titulo-overlay">
                                                                    {!! $espectaculos[$contador]->titulo !!}                         
                                                                </div>                         	         
                                                            </div>			                                 
                                                        </div>                                                
                                                        <div class="row">                                 
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4 mx-auto border-bottom border-white border-1 linea-overlay py-1"></div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 text-center text-white">
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
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
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

                                        @if ($aux == 1)
                                            </div>
                                        
                                            @php
                                                $aux = 0;
                                            @endphp
                                        @else
                                            @php
                                                $aux++;
                                            @endphp
                                        @endif

                                    
                                    @if ($co == 6 or $bandera == 1)
                                    </div>
                                       
                                        @php
                                            $co = 0;
                                        @endphp
                                    @endif
                                    
                                    @php
                                        $co++;
                                    @endphp

                                @endif
                            @endfor
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

{{-- ANTERIOR --}}
{{--
<div class="container-fluid px-2 mt-5 mb-5">
    <div uk-filter="target: .filter" class="filter-main">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarNav">
                    <ul class="navbar-nav px-5">
                        @foreach ($categorias as $c)
                            <li class=" px-5" onclick="resetSearchBar();" uk-filter-control="filter: [tag='f{{ $c->id }}'];">
                                <a class="nav-link--espectaculos active" id="link" aria-current="page" href="#" style=""><h3 class="nav-text-link--espectaculos"> {{ $c->categoria }} </h3></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <ul class="filter uk-text-right uk-dark uk-animation-toggle" uk-grid tabindex="0">
            @foreach ($categorias as $c)
                @php
		            $co = 1;
		            $bandera = 0;
		            $co0 = 0;
                    $aux = 0;
                    $rowI = 2;
                @endphp
                <li style="width: 100%" class="skills-el" tag='f{{ $c->id }}' data-name='{{ $c->id }}'>
                    <div class="row ">
                        <div class="carrusel2">
                            @for ($contador = 0; $contador < $total; $contador++)
                                @if($espectaculos[$contador]->categoria == $c->id) 
                                    
                                    @if ($contador == $total - 1 )
                                        @php
                                            $bandera = 1;
                                        @endphp
                                    @endif

                                    @if ($co == 1)
                                        <div class="d-flex px-xl-5 px-lg-5 px-sm-0 px-xs-0 flex-wrap">
                                    @endif
                                   
                                    @if ($aux == 0)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-3 m-0 text-center">
                                   
                               
                                    @endif

                                    @if ($co == 1 or $co == 5)
                                        <div class="row p-2" style="margin-top: 160px;">
                                    @else
                                        <div class="row p-1 mt-3">
                                    @endif

                                        
                                            <div class="col mt-2">
                                                <div class="containerX bg-dark text-white">
                                <img src="{{ asset('img2/photos/breca_espectaculos/'.$espectaculos[$contador]->imagen) }}" alt="" class="img-fluid border image" style="">
                                    <div class="middle">
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
                                                            {{ $c->categoria }}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">		
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <p class="texto-overlay" style="text-align: justify; padding: 0%; overflow: hidden; text-overflow: ellipsis; white-space: wrap;">
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

                                        @if ($aux == 1)
                                            </div>
                                        
                                            @php
                                                $aux = 0;
                                            @endphp
                                        @else
                                            @php
                                                $aux++;
                                            @endphp
                                        @endif

                                    
                                    @if ($co == 6 or $bandera == 1)
                                    </div>
                                       
                                        @php
                                            $co = 0;
                                        @endphp
                                    @endif
                                    
                                    @php
                                        $co++;
                                    @endphp

                                @endif
                            @endfor
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
--}}

@endsection

@section('jsLibExtras2')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="
https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js
"></script>

<script>
    function filterSearch() {
        var search = $(".uk-search-input").eq(0).val().toLowerCase();
        
        if(!search){
            $(".uk-search-input").eq(0).attr("uk-filter-control", "");
        }else{
            $(".uk-search-input").eq(0).attr("uk-filter-control", "filter: [data-name*='" + search + "']");
        }
        
        $(".uk-search-input").eq(0).click();
    }

    $(".filter-main").on("beforeFilter", function() {
        $(".skills-no-result").removeClass('visible uk-animation-shake');
    });

    $(".filter-main").on("afterFilter", function() {
        var isElementVisible = false;
        var i = 0;

        while(!isElementVisible && i < $(".skills-el").length) {
            if($(".skills-el").eq(i).is(":visible")){
                isElementVisible = true;
            }
            
            i++;
        }

        if(isElementVisible === false) {
            $(".skills-no-result").addClass('visible uk-animation-shake');
        }
    });

    function resetSearchBar(){
        $(".uk-search-input").eq(0).val('');
        $(".uk-search-input").eq(0).val('').attr("uk-filter-control", "");
    }
</script>
<script>
$(document).ready(function() {
    document.getElementById("link").click();
});
</script>

<script>
    $('.carrusel2').slick({
  dots: true,
  infinite: false,
  speed: 300,
//   rows: 2,
//   slidesPerRow: 3,
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

<script>
    $('#carruselEspectaculos').slick({
        dots: false,
        infinite: false,
        speed: 300,
        rows: 2,
        slidesPerRow: 3,
        // slidesToShow: 3,
        // slidesToScroll: 3,
        prevArrow: '#anterior',
        nextArrow: '#siguiente',
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                 rows: 2,
                slidesPerRow: 3,
                // slidesToShow: 1,
                // slidesToScroll: 1,
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


@endsection
