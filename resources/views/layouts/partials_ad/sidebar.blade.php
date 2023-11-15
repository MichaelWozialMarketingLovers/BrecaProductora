
    
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
		.black-skin .side-nav .collapsible li .collapsible-header:hover{
			background-color: #b0c1d1;
		}
		
		.black-skin .side-nav .collapsible li .collapsible-header.active{
			background-color: #b0c1d1;
		}
		
		.black-skin .side-nav .sidenav-bg:after, .black-skin .side-nav .sidenav-bg.mask-strong:after{
			background-color: #030303;
		}
			</style>
		
		 <div id="slide-out" class="side-nav  fixed" style="background: rgb(255, 255, 255);">
			<ul class="custom-scrollbar" >
				<li class="logo-sn waves-effect py-3">
					<div class="text-center border-0">
						<a href="{{ url('admin') }}" class="pl-0">
							<img class="img-fluid" style="width: 200px;" src="{{asset('img/design/logo_woz.png')}}">
							 {{-- <div class="card mx-3 text-center d-flex justify-content-center align-items-centers" style="border-radius: 16px; height: 50px;" >
								<div><img class="" style="width: 130px; " src="{{asset('img/design/logo_woz.png')}}"></div>
							</div>  --}}
							
						</a>
					</div>
					<hr>
				</li>
				
				<li>
					<ul class="collapsible collapsible-accordion">
						{{-- <li>
							<a href="{{ route('pedidos.index') }}" class="collapsible-header waves-effect {{ (request()->is('admin/pedidos')) ? 'active' : '' }}"><i class="fas fa-box-open"></i>Pedidos</a>
						</li> --}}
						{{-- <li>
							<a href="{{ route('productos.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/servicios')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-box-open"></i>Servicios</a>
						</li> --}}
						{{-- <li>
							<a href="{{ route('clientes.index') }}" class="collapsible-header waves-effect"><i class="fas fa-users"></i></i>Clientes</a>
						</li> --}}
						{{-- <li>
							// <a href="{{ url('admin/config/') }}" class="collapsible-header waves-effect {{ (request()->is('admin/config')) ? 'active' : '' }}"><i class="w-fa fas fa-cog"></i>Configuración</a>
							<a href="{{ route('vacante.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/vacantes')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="w-fa fas fa-search"></i>Vacantes</a>
						</li> --}}
						<li>
							<a href="{{ route('admin.home') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-cogs"></i> Configuración </a>
						</li>
						<li>
							<a href="{{ route('config.contact') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-paper-plane"></i> Contacto </a>
						</li>
						<li>
							<a href="{{ route('config.faq.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-question"></i> FAQ </a>
						</li>
						<li>
							<a href="{{ route('config.politica.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-shield-alt"></i> Políticas </a>
						</li>
						<li>
							<a href="{{ route('config.seccion.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fab fa-buromobelexperte"></i> Secciones </a>
						</li>
						<li>
							<a href="{{ route('config.artistas.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-theater-masks"></i> Artistas </a>
						</li>
						<li>
							<a href="{{ route('config.breca_espectaculos.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-smile-beam"></i> Espect&aacute;culos </a>
						</li>
						<li>
							<a href="{{ route('config.servicios.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fab fa-servicestack"></i> Servicios </a>
						</li>
						<li>
							<a href="{{ route('config.categorias.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-sort-amount-down"></i> Categor&iacute;as </a>
						</li>
						<li>
							<a href="{{ route('config.masterclass.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-chalkboard-teacher"></i> Master class y talleres </a>
						</li>
						<li>
							<a href="{{ route('config.carrusel_marcas.index') }}" class="mx-3 my-1 collapsible-header waves-effect {{ (request()->is('admin/config*')) ? 'active' : '' }}" style="border-radius: 16px;"><i class="fas fa-city"></i> Empresas </a>
						</li>
					</ul>
				</li>
			</ul>

			{{-- 
				array('icon' => 'fas fa-paper-plane', 'route' => 'config.contact', 'text' => 'Contacto'),
				// array('icon' => 'fas fa-palette', 'route' => 'config.color.index', 'text' => 'Colores'),
				// array('icon' => 'fas fa-ticket-alt', 'route' => 'config.cupons.index', 'text' => 'Cupones'),
				// array('icon' => 'fas fa-arrows-alt', 'route' => 'config.size.index', 'text' => 'Tamaños'),
				array('icon' => 'fas fa-question', 'route' => 'config.faq.index', 'text' => 'FAQ'),
				// array('icon' => 'fas fa-images', 'route' => 'config.slider.index', 'text' => 'Sliders'),
				// array('icon' => 'far fa-images', 'route' => 'config.subastagal', 'text' => 'Sliders Subasta'),
				// array('icon' => 'fas fa-user-tie', 'route' => 'config.about', 'text' => 'Nosotros'),
				array('icon' => 'fas fa-shield-alt', 'route' => 'config.politica.index', 'text' => 'Politicas'),
				// array('icon' => 'fas fa-couch', 'route' => 'config.space.index', 'text' => 'Espacios'),
				array('icon' => 'fab fa-buromobelexperte', 'route' => 'config.seccion.index', 'text' => 'Secciones (textos e imágenes)'), --}}
		
			<div class="sidenav-bg mask-strong"></div>
		
			<div class="fixed-action-btn clearfix d-none" style="bottom: 45px; right: 24px;">
				<a class="btn-floating btn-lg red">
					<i class="fas fa-pencil-alt"></i>
				</a>
				<ul class="list-unstyled">
					<li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
					<li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
					<li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
					<li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
				</ul>
			</div>
		</div> 
		