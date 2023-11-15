@extends('layouts.front')

@section('title', 'Servicios')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
    <style>
    .Soluciones-Seccion2{
    background-image: url({{ asset('img/photos/seccions/'.$elements[28]->imagen)}});

}
    </style>


            <!-- SECCION 1 -->
    <div class="Soluciones" style="background: #F7F7F7;">

            <div class="seccion1Vacantes" style="padding: 0;">
                <div class="contenetBorder">
                    <div class="tituloSeccion2">
                        <h1>SOLUCIONES</h1>
                        <div class="contLinSec21">
                            <div class="contLinSec2">
                                <div class="linSec2"></div><img src="{{ asset('img/design/iconDiaman.png')}}" alt=""><div class="linSec2"></div>
                            </div>    
                        </div>
                    </div>
                    
            <div class="textSeccion2">
                <p>{!!$elements[0]->texto!!}</p>
            </div>
                </div>
            </div>

            
            <!-- SECCION 1 -->

            <div class="col-12 Soluciones-Seccion2 mt-5"></div>
            
            <!-- SECCION 2 -->
            <div class="Soluciones-Seccion3">
                <div class="cont1-Vacantes-Seccion3">



                   @for ( $i=1 ; $i <= 27; $i++)
                   @if (!empty($elements[$i]->texto) && !empty($elements[$i+1]->texto))
                    <!-- CARD -->
                    <div class="Cont-Cads-Vac-Sec3">
                        <div class="Head-Card-Vac-Sec3">
                            @if (!empty($elements[$i+2]->imagen))
                            <img src="{{ asset('img/photos/seccions/'.$elements[$i+2]->imagen)}}" alt="" > 
                            @else
                            <img src="{{ asset('img/design/img2.png')}}" alt="">
                            @endif
                           
                        </div>
                        <div class="Cont-Titulo-cards-vac-sec3 py-2">
                            <h1 style="font-weight: bold">{!!$elements[$i]->texto!!}</h1>
                            <div class="LineRVacantes my-1"></div>
                        </div>
                        <div class="Cont-Text-Serv-Cards-Sec3">
                            <P>{!!$elements[$i+1]->texto!!}</P>
                        </div>
                        <div class="Cont-Enlace-Serv-Cards-Sec3">
                            <a target="_blank" href="https://wa.me/52{{$config->whatsapp}}?text=Hola! estoy interesado en la cotizar {!!$elements[$i]->texto!!}">COTIZAR</a>
                        </div>

                    </div>
                    <!-- CARD -->
                   @endif
                   @endfor
                 

                                       
                </div>
            </div>
            <!-- SECCION 2 -->

            <!-- SECCION 3 -->

            <!-- SECCION 3 -->


@endsection


