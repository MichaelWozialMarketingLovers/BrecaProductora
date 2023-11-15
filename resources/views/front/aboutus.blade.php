@extends('layouts.front')

@section('title', 'Nosotros')
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/nosotros.css')}}"> --}}
@endsection

@section('content')

<style>
.contentIni3{
    background-image: url({{ asset('img/photos/seccions/'.$elements[15]->imagen)}}); 
}

</style>
<!-- Parte inicial de explicacion de SEKTOR -->
    <div class="contentIni1">
        <div class="contentIniP">
            <div class="divguardias">
                <img class="circuloR" src="" alt="" width="430px">
                <img class="guardiasfoto" src="{{ asset('img/photos/seccions/'.$elements[17]->imagen)}}" alt="" width="450px">
            </div>
            <div class="divtextguardias">
                <img src="{{asset("img/design/logo.png")}}" alt="">
                <div class="textGuar">

                    <p>{!!$elements[0]->texto!!}</p>
                    <p>{!!$elements[1]->texto!!}</p>
                    
                </div>
                <div class="barraR"></div>
                
            </div>
            
        </div>
    </div>
<!-- Parte inicial de explicacion de SEKTOR -->




<!-- parte de Mision, Vision, Valores y Certificacion -->
    <div class="col-12">

        <div class="content2iniFlex">
            <div class="tarjetasInfo">
                <div class="TarjetaT mb-4">
                    <h1 class="m-3 ms-0">VISIÓN</h1>
                    <img class="m-4 ms-4" src="{{asset("img/design/icon.png")}}" alt="" width="24px" height="24px">
                </div>
                <div class="tarjetaText">
                    <p>{!!$elements[2]->texto!!}</p>
                </div>
                <div class="barraRT"></div>
            </div>

            <div class="tarjetasInfo">
                <div class="TarjetaT mb-4">
                    <h1 class="m-3 ms-0">MISIÓN</h1>
                    <img class="m-4 ms-4" src="{{asset("img/design/icon.png")}}" alt="" width="24px" height="24px">
                </div>
                <div class="tarjetaText">
                    <p>{!!$elements[3]->texto!!}</p>
                </div>
                <div class="barraRT"></div>
            </div>

            <div class="tarjetasInfo">
                <div class="TarjetaT mb-4">
                    <h1 class="m-3 ms-0">VALORES</h1>
                    <img class="m-4 ms-4" src="{{asset("img/design/icon.png")}}" alt="" width="24px" height="24px">
                </div>
                <div class="tarjetaText">
                    <p>{!!$elements[4]->texto!!}</p>
                </div>
                <div class="barraRT"></div>
            </div>
        </div>

        

    </div>

    <div class="contentIni2_2">
        <h1 class="mb-5 mt-5">CERTIFICACIÓN</h1>
        <P>{!!$elements[5]->texto!!}
        <img style="text-align: center; width: 300px" src="{{asset("img/design/certificacion.png")}}" alt="">
        </div>

<!-- parte de Mision, Vision, Valores y Certificacion -->




    <!-- contenido de cartas circulares con fondo de imagen  -->
    <div class="contentIni3">
        <div class="conteIni3Fondo">
            <div class="contentCarts3">
                <div class="Carts3">
                <div class="contentCarts3T">
                    <img  src="{{asset("img/design/circulo.png")}}" alt="">
                    <h1>{!!$elements[6]->texto!!}</h1>
                </div>
                <div style="margin-top: 90px">
                    <h2>{!!$elements[7]->texto!!}</h2>
                </div>
                <div class="ContbarraRT3">
                <div class="barraRT3 my-2"></div>
            </div>
                <div class="Carts3Text">
                    <p>{!!$elements[8]->texto!!}</p>
                </div>
            </div>
                <div class="Carts3">
                <div class="contentCarts3T">
                    <img src="{{asset("img/design/circulo.png")}}" alt="">
                    <h1>{!!$elements[9]->texto!!}</h1>
                </div>
                <div style="margin-top: 90px">
                    <h2>{!!$elements[10]->texto!!}</h2>
                </div>
                <div class="ContbarraRT3">
                    <div class="barraRT3 my-2"></div>
                </div>
                <div class="Carts3Text">
                    <p>{!!$elements[11]->texto!!}</p>
                </div>
                </div>
                <div class="Carts3"> 
                <div class="contentCarts3T">
                    <img src="{{asset("img/design/circulo.png")}}" alt="">
                    <h1>{!!$elements[12]->texto!!}</h1>
                </div>
                <div style="margin-top: 90px">
                    <h2>{!!$elements[13]->texto!!}</h2>
                </div>
                <div class="ContbarraRT3 my-2">
                <div class="barraRT3"></div>
            </div>
                <div class="Carts3Text">
                    <p>{!!$elements[14]->texto!!}</p>
                </div>
            </div>
            </div>
        </div>
        
    </div>
    <!-- contenido de cartas circulares con fondo de imagen  -->




    <!-- contenido final de la pagina -->
    <div class="content4">








    </div>
    <!-- contenido final de la pagina -->

@endsection

