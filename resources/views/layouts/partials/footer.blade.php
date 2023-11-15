@if ($pagina != 'index')
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
                            {{--
                            <div class="row px-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3 text-white text-start">
                                    <a href="{{ route('front.avisoPrivacidad') }}" class="text-white" style="text-decoration: none;">aviso de privacidad</a> <br>
                                    <a href="{{ route('front.preguntas') }}" class="text-white" style="text-decoration: none;">preguntas frecuentes</a>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 py-2 text-center text-white">
                    Breca 2023 todos los derechos reservados. Diseño por WOZIAL.
                </div>
            </div>
        </div>
    </div>
@endif