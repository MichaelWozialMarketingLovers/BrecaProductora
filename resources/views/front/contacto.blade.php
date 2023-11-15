@extends('layouts.front')

@section('title', 'Contacto')
{{-- @section('cssExtras')@endsection --}}

@section('content')
        <!-- SECCION 1 -->
    <div class="index" style="background: #F7F7F7;">
        <div class="Contacto">
            <div class="seccion1Servicios" style="min-height: 600px;">
                <div class="contenetBorder">

                        
{{--                             
                                <div class="formSec3_2">
                                    <div><img src="img/logo.png" alt=""></div>
                                    <div class="tituloFrom">
                                        <h1>¡ESTAMOS PARA SERVIRTE!</h1>
                                    </div>
                                        <form action="{{route('formularioContac')}}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE:" aria-label="NOMBRE:">
                                                <input type="text" class="form-control" id="empresa" name="empresa" placeholder="EMPRESA:" aria-label="EMPRESA:">
                                            </div>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="correo" name="correo" placeholder="CORREO:" aria-label="CORREO">
                                                <input type="text" class="form-control" id="telefono" name="whatsapp" placeholder="WHATSAPP:" aria-label="WHATSAPP">
                                            </div>  
                                            <div class="input-group2">
                                                <input type="text" class="form-control" id="mensaje" name="mensaje" placeholder="MENSAJE:" aria-label="WHATSAPP:">
                                            </div>
                                            <div class="contButon"><BUtton type="submit"><P>ENVIAR</P></BUtton></div>
                                
                                        </form>
                                </div> --}}
                                {!! Toastr::message() !!}
                                <div class="container">
                                    <div class="col-12 col-md-12 col-lg-12 row" style="height: 90%;">
                                        <div class="col-12 col-md-12 col-lg-7 text-center d-flex justify-content-start" style="height: 100%; align-items: center;">
                                                
                                            <form action="{{route('formularioContac')}}" method="post" class="form-solicita2 col-12 col-md-12 col-lg-12">
                                                @csrf
                                                <div class="col-12 mb-5 mt-5  d-flex justify-content-center"><h1 class="col-10" style="color: rgb(255, 0, 0);">¡ESTAMOS PARA SERVIRTE!</h1></div>
                                                <div class="input-group mb-5">
                                                    <div class="form-control" style="background: none; border: none;">
                                                        <input type="text" class="" id="nombre" name="nombre" placeholder="NOMBRE:" aria-label="NOMBRE:" style="width: 100%; background: none; border: none; color: rgb(0, 0, 0);" autocomplete="off">
                                                        <div style=" width: 100%; height: 5px; background: rgb(0, 0, 0); border-radius: 10px"></div>
                                                    </div>
                                                    <div class="form-control" style="background: none; border: none;">
                                                        <input type="text"  id="empresa" name="empresa" placeholder="EMPRESA:" aria-label="EMPRESA:" style="width: 100%; background: none; border: none; color: rgb(0, 0, 0);" autocomplete="off">
                                                        <div style=" width: 100%; height: 5px; background: rgb(0, 0, 0); border-radius: 10px"></div>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-5">
                                                    <div class="form-control" style="background: none; border: none;">
                                                        <input  type="email" id="correo" name="correo" placeholder="CORREO:" aria-label="CORREO" style="width: 100%; background: none; border: none; color: rgb(0, 0, 0);" autocomplete="off">
                                                        <div style=" width: 100%; height: 5px; background: rgb(0, 0, 0); border-radius: 10px"></div>
                                                    </div>
                                                    <div class="form-control" style="background: none; border: none;">
                                                        <input type="text" id="telefono" name="whatsapp" placeholder="WHATSAPP:" aria-label="WHATSAPP" style="width: 100%; background: none; border: none; color: rgb(0, 0, 0);" autocomplete="off">
                                                        <div style=" width: 100%; height: 5px; background: rgb(0, 0, 0); border-radius: 10px"></div>
                                                    </div>
                                                </div>
                                                <div class="input-group2">
                                                    <div class="form-control" style="background: none; border: none;">
                                                        <input type="text" id="mensaje" name="mensaje" placeholder="MENSAJE:" aria-label="WHATSAPP:" style="width: 100%; background: none; border: none; color: rgb(0, 0, 0);" autocomplete="off">
                                                        <div style=" width: 100%; height: 5px; background: rgb(0, 0, 0); border-radius: 10px"></div>
                                                    </div>
                                                </div>
                                                    <div class="mt-3"><BUtton style="background: white; width: 130px; height: 30px; border: 3px solid red; border-radius: 30px; font-weight: bold; font-size: 12px;">ENVIAR</BUtton></div>
                                            </form>
                                        </div>

                                        <div class="col-12 col-md-12 col-lg-5 d-flex justify-content-sm-center justify-content-md-center justify-content-lg-end ">
                                            <div class="col-12 col-md-12 col-lg-6 text-center d-flex align-items-sm-center align-items-md-center align-items-lg-end">
                                                <div class="col-12 my-5">
                                                    <p>Oficinas:{!!$config->telefono!!}</p>
                                                    <p>Wattsapp:{!!$config->whatsapp!!}</p>
                                                
                                                
                                                    <p class="Direccion">{!!nl2br($config->direccion)!!}</p>
                                                    <p class="correo">{!!nl2br($config->destinatario)!!}</p>
                                                </div>
                                                
                                            </div>
        
                                        </div>
                                        
                                    </div>

                                </div>

                                


                            
                 

                </div>
            </div>
		</div>



        	<!-- SECCION 1 -->

            <!-- SECCION 2 -->
                <div class="Div-Maps mt-5">
                    {!!$config->mapa!!}
                </div>
            <!-- SECCION 2 -->
@endsection

