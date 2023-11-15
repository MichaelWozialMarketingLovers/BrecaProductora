<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.front');
// });

use App\Http\Controllers\BrecaEspectaculoController;
use Carbon\Carbon;

Route::name('front.')->group(function(){

	Route::get('/', 'FrontController@index')->name('index');
	// Route::get('nosotros', 'FrontController@aboutus')->name('aboutus');
	// Route::get('productos', 'FrontController@productos')->name('productos');
	Route::get('servicios', 'FrontController@servicios')->name('servicios');
	Route::get('masterclass', 'FrontController@masterClass')->name('masterClass');
	// Route::get('servicios/{serv?}', 'FrontController@servicios')->name('servicios');
	// Route::post('getServicio', 'FrontController@getServicio')->name('getServicio');
	Route::get('espectaculos', 'FrontController@espectaculos')->name('espectaculos');
	Route::get('espectaculo_detalle/{id}', 'FrontController@espectaculoDetalle')->name('espectaculoDetalle');
	Route::get('artistas', 'FrontController@artistas')->name('artistas');
	Route::get('aviso_privacidad', 'FrontController@aviso')->name('avisoPrivacidad');
	Route::get('preguntas', 'FrontController@preguntas')->name('preguntas');
	// Route::get('contacto', 'FrontController@contacto')->name('contacto');
	// Route::get('vacantes', 'FrontController@vacantes')->name('vacantes');
	// Route::get('soluciones', 'FrontController@soluciones')->name('soluciones');
	// Route::get('productos/{product?}', 'FrontController@details')->name('details');

});

// rutas al admin
Route::namespace("Admin")->prefix('admin')->group(function(){
	Route::name('admin.')->group(function(){
		Route::get('/', 'HomeController@index')->name('home');
		Route::get('/nuevo', 'HomeController@create')->name('create');
		Route::get('/users', 'HomeController@show')->name('show');
		Route::post('/guardar', 'HomeController@store')->name('store');
		Route::delete('/delete', 'HomeController@destroy')->name('delete');

		Route::namespace('Auth')->group(function(){
			Route::get('/login', 'LoginController@showLoginForm')->name('login');
			Route::post('/login', 'LoginController@login');
			Route::post('logout', 'LoginController@logout')->name('logout');
		});
	});

// rutas al admin configuraciones
// controllers dentro de Controllers/Admin/
	Route::prefix('config')->name('config.')->group(function(){
		Route::get('index','ConfiguracionController@index')->name('index');
		Route::get('general','ConfiguracionController@general')->name('general');
		Route::get('contacto','ConfiguracionController@contact')->name('contact');
	});
	// Route::prefix('config')->name('config.')->group(function(){
	// 	Route::get('index','ConfiguracionController@index')->name('index');
	// });
});

// rutas al admin configuraciones
// controllers dentro de Controllers/
Route::prefix('admin')->group(function(){
	
	Route::prefix('config')->name('config.')->group(function(){
		
		Route::prefix('colores')->name('color.')->group(function(){
			Route::get('/','ColorController@index')->name('index');
			Route::post('/','ColorController@store')->name('store');
			Route::get('editar/{id}','ColorController@edit')->name('edit');
			Route::put('{id}','ColorController@update')->name('update');
			Route::delete('/','ColorController@destroy')->name('delete');
		});

		Route::prefix('sliders')->name('slider.')->group(function(){
			Route::get('/{seccion?}','CarruselController@index')->name('index');
			Route::post('/','CarruselController@store')->name('store');
			Route::delete('/','CarruselController@destroy')->name('delete');
		});
		Route::prefix('usuarios')->name('usuarios.')->group(function(){
			Route::get('/','HomeController@index')->name('index');
			//Route::post('/','CarruselController@store')->name('store');
			//Route::delete('/','CarruselController@destroy')->name('delete');
		});

		Route::prefix('politicas')->name('politica.')->group(function(){
			Route::get('/','PoliticaController@index')->name('index');
			Route::put('/{id}','PoliticaController@update')->name('update');
		});

		Route::prefix('secciones')->name('seccion.')->group(function(){
			Route::get('/','SeccionController@index')->name('index');
			Route::get('/{slug}','SeccionController@show')->name('show');
			Route::put('/{id}','ElementoController@update')->name('update');
			Route::put('/portada/{id}', 'SeccionController@update')->name('updatePortada');
		});

		Route::prefix('faq')->name('faq.')->group(function(){
			Route::get('/','FaqController@index')->name('index');
			Route::get('nueva','FaqController@create')->name('create');
			Route::post('/','FaqController@store')->name('store');
			Route::get('{id}','FaqController@edit')->name('edit');
			Route::put('{id}','FaqController@update')->name('update');
			Route::delete('/','FaqController@destroy')->name('delete');
		});

		Route::prefix('dimension')->name('size.')->group(function(){
			// NOTE:  falta method edit
			Route::get('/','CategTamanoController@index')->name('index');
			Route::post('/','CategTamanoController@store')->name('store');
			Route::delete('/','CategTamanoController@destroy')->name('delete');

			Route::name('dimension.')->group(function(){
				// NOTE:  falta method edit
				Route::get('/{slug?}','SizeController@index')->name('index');
				Route::post('t','SizeController@store')->name('store');
				Route::delete('t','SizeController@destroy')->name('delete');
			});
		});

		Route::prefix('cupones')->name('cupons.')->group(function(){
			// NOTE:  falta method edit
			Route::get('/','CuponController@index')->name('index');
			Route::post('/','CuponController@store')->name('store');
			Route::delete('d','CuponController@destroy')->name('delete');
		});

		Route::prefix('artistas')->name('artistas.')->group(function(){
			Route::get('/', 'ArtistaController@index')->name('index');
			Route::get('/nuevo', 'ArtistaController@create')->name('create');
			Route::get('show/{artista}', 'ArtistaController@show')->name('show');
			Route::post('/', 'ArtistaController@store')->name('store');
			Route::get('editar/{artista}', 'ArtistaController@edit')->name('edit');
			Route::put('{artista}', 'ArtistaController@update')->name('update');
			Route::delete('/{artista}', 'ArtistaController@destroy')->name('destroy');

			Route::prefix('artista_galeria')->name('artista_galeria.')->group(function(){
				Route::get('/{id}', 'ArtistaGaleriaController@index')->name('index');
				// Route::get('/nuevo/{id}', 'ArtistaGaleriaController@create')->name('create');
				Route::post('/', 'ArtistaGaleriaController@store')->name('store');
				Route::delete('/{artista}', 'ArtistaGaleriaController@destroy')->name('destroy');
			});
		});

		Route::prefix('carrusel_marcas')->name('carrusel_marcas.')->group(function(){
			Route::get('/', 'CarruselMarcasController@index')->name('index');
			Route::get('/{id}/nuevo', 'CarruselMarcasController@create')->name('create');
			Route::post('/', 'CarruselMarcasController@store')->name('store');
			Route::delete('/{carrusel}', 'CarruselMarcasController@destroy')->name('destroy');
		});

		Route::prefix('breca_espectaculos')->name('breca_espectaculos.')->group(function(){
			Route::get('/', 'BrecaEspectaculoController@index')->name('index');
			Route::get('/nuevo', 'BrecaEspectaculoController@create')->name('create');
			Route::post('/', 'BrecaEspectaculoController@store')->name('store');
			Route::get('editar/{espectaculo}', 'BrecaEspectaculoController@edit')->name('edit');
			Route::put('{espectaculo}', 'BrecaEspectaculoController@update')->name('update');
			Route::delete('/{espectaculo}', 'BrecaEspectaculoController@destroy')->name('destroy');

			Route::prefix('breca_espectaculos_imagenes')->name('breca_espectaculos_imagenes.')->group(function(){
				Route::get('/{espectaculo}', 'BrecaEspectaculoImagenesController@index')->name('index');
				Route::get('/{espectaculo}/nuevo', 'BrecaEspectaculoImagenesController@create')->name('create');
				Route::post('/', 'BrecaEspectaculoImagenesController@store')->name('store');
				Route::delete('/{galeria}', 'BrecaEspectaculoImagenesController@destroy')->name('destroy');
			});
		});

		Route::prefix('masterclass')->name('masterclass.')->group(function(){
			Route::get('/', 'MaterClassesController@index')->name('index');
			Route::get('/nuevo', 'MaterClassesController@create')->name('create');
			Route::post('/', 'MaterClassesController@store')->name('store');
			Route::get('editar/{masterclass}', 'MaterClassesController@edit')->name('edit');
			Route::put('{masterclass}', 'MaterClassesController@update')->name('update');
			Route::delete('/{masterclass}', 'MaterClassesController@destroy')->name('destroy');
		});

		Route::prefix('espectaculos')->name('espectaculos.')->group(function(){
			Route::get('/', 'EspectaculoController@index')->name('index');
			Route::get('/nuevo', 'EspectaculoController@create')->name('create');
			Route::get('show/{espectaculo}', 'EspectaculoController@show')->name('show');
			Route::post('/', 'EspectaculoController@store')->name('store');
			Route::get('editar/{espectaculo}', 'EspectaculoController@edit')->name('edit');
			Route::put('{espectaculo}', 'EspectaculoController@update')->name('update');
			Route::delete('/{espectaculo}', 'EspectaculoController@destroy')->name('destroy');

			Route::prefix('subespectaculos')->name('subespectaculos.')->group(function(){
				Route::get('/{espectaculo}', 'SubespectaculoController@index')->name('index');
				Route::get('/{espectaculo}/nuevo', 'SubespectaculoController@create')->name('create');
				Route::get('show/{subespectaculo}', 'SubespectaculoController@show')->name('show');
				Route::post('/', 'SubespectaculoController@store')->name('store');
				Route::get('editar/{subespectaculo}', 'SubespectaculoController@edit')->name('edit');
				Route::put('{subespectaculo}', 'SubespectaculoController@update')->name('update');
				Route::delete('/{subespectaculo}', 'SubespectaculoController@destroy')->name('destroy');

				Route::prefix('galeriasubespectaculos')->name('galeriasubespectaculos.')->group(function(){
					Route::get('/{subespectaculo}', 'GaleriasubespectaculoController@index')->name('index');
					Route::get('/{subespectaculo}/nuevo', 'GaleriasubespectaculoController@create')->name('create');
					Route::post('/', 'GaleriasubespectaculoController@store')->name('store');
					Route::delete('/{galeriasubespectaculo}', 'GaleriasubespectaculoController@destroy')->name('destroy');
				});
			});
		});

		Route::prefix('categorias')->name('categorias.')->group(function(){
			Route::get('/', 'EspectaculoCategoriaController@index')->name('index');
			Route::get('/nuevo', 'EspectaculoCategoriaController@create')->name('create');
			Route::post('/', 'EspectaculoCategoriaController@store')->name('store');
			Route::get('editar/{categoria}', 'EspectaculoCategoriaController@edit')->name('edit');
			Route::put('{categoria}', 'EspectaculoCategoriaController@update')->name('update');
			Route::delete('/{categoria}', 'EspectaculoCategoriaController@destroy')->name('destroy');
			Route::get('/test', 'EspectaculoCategoriaController@test')->name('test');
		});

		Route::prefix('servicios')->name('servicios.')->group(function(){
			Route::get('/', 'BrecaServiciosController@index')->name('index');
			Route::get('/nuevo', 'BrecaServiciosController@create')->name('create');
			Route::get('show/{servicios}', 'BrecaServiciosController@show')->name('show');
			Route::post('/', 'BrecaServiciosController@store')->name('store');
			Route::get('editar/{servicios}', 'BrecaServiciosController@edit')->name('edit');
			Route::put('{servicios}', 'BrecaServiciosController@update')->name('update');
			Route::delete('/{servicios}', 'BrecaServiciosController@destroy')->name('destroy');
		});

	});


	// Route::prefix('servicios')->name('productos.')->group(function () {
		
	// 	Route::get('/', 'ProductoController@index')->name('index');
	// 	Route::get('nuevo', 'ProductoController@create')->name('create');
	// 	Route::post('nuevo', 'ProductoController@store')->name('store');
	// 	Route::get('detalle/{id}', 'ProductoController@show')->name('show');
	// 	Route::get('{id}', 'ProductoController@edit')->name('edit');
	// 	Route::put('{id}', 'ProductoController@update')->name('update');
	// 	Route::put('upimg/{id}', 'ProductoController@updateimg')->name('updateimg');
	// 	Route::post('delete', 'ProductoController@destroy')->name('delete');

	// 	Route::name('pic.')->group(function () {
	// 		Route::post('newpic/{id}', 'ProductosPhotoController@store')->name('store');
	// 		Route::delete('/', 'ProductosPhotoController@destroy')->name('delete');
	// 	});

	// 	Route::name('version.')->group(function () {
			
	// 		Route::post('newvar/', 'ProductoVarianteController@store')->name('store');
	// 		Route::get('variante/{id_var}', 'ProductoVarianteController@show')->name('show');
	// 		Route::get('variante/edit/{id_var}', 'ProductoVarianteController@edit')->name('edit');
	// 		Route::put('variante/{id_var}', 'ProductoVarianteController@update')->name('update');
	// 	// 	Route::delete('pv/', 'ProductoVersionPhotoController@destroy')->name('delete');
	// 	});

		
	// 	Route::name('rel.')->group(function(){
			
	// 		Route::put('rel/{id}','ProductoRelacionController@update')->name('update');
	// 		// Route::delete('rel/','ProductoRelacionController@destroy')->name('delete');
	// 	});

	// 	Route::name('categoria' )->group(function () {
			
	// 		Route::get('categoria/{id}', 'ProductosPhotoController@store')->name('store');
	// 	});

	// });

	Route::prefix('vacantes')->name('vacante.')->group(function () {
		Route::get('/', 'VacanteController@index')->name('index');
		Route::get('nuevo', 'VacanteController@create')->name('create');
		Route::post('nuevo', 'VacanteController@store')->name('store');
		Route::get('detalle/{id}', 'VacanteController@show')->name('show');
		Route::get('{id}', 'VacanteController@edit')->name('edit');
		Route::put('{id}', 'VacanteController@update')->name('update');
		Route::put('upimg/{id}', 'VacanteController@updateimg')->name('updateimg');
		Route::post('delete', 'VacanteController@destroy')->name('delete');

	});

	Route::prefix('categorias')->name('categ.')->group(function(){
		Route::get('/','CategoriaController@index')->name('index');
		Route::post('/','CategoriaController@store')->name('store');
		Route::get('/{id}','CategoriaController@show')->name('show');
		Route::get('subcategoria/{id}','CategoriaController@sub')->name('sub');
		Route::post('/delete','CategoriaController@destroy')->name('delete');
	});

	

});

// rutas funciones generales
Route::prefix('varios')->name('func.')->group(function(){
	Route::post('editarajax','FuncGenController@editajax')->name('editajax');
	Route::post('orderajax','FuncGenController@orderajax')->name('orderajax');
	Route::post('toggleajax','FuncGenController@toggleajax')->name('toggleajax');

	Route::post('addcart','CartController@addcart')->name('addcart');
	Route::get('emptycart','CartController@emptycart')->name('emptycart');
	Route::post('getcart','CartController@getcart')->name('getcart');
	Route::get('updatecart','CartController@updatecart')->name('updatecart');
});

// rutas test
Route::prefix('test')->group(function(){
	Route::get('strand',function(){
		return Str::random(15);
	});
	Route::get('uuid',function(){
		return Str::uuid();
	});
	Route::get('correo',function(){

		return view('front.mailcontact');
	});

	Route::get('slug/{key}', function ($llave) {
		return Str::slug($llave,'-');
	});
});

/** rutas de los formularios de contacto */
Route::post('/formularioContac', 'FrontController@mailcontact')->name('formularioContac');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('clear')->group(function(){
	//Clear Cache facade value:
	Route::get('/clear-cache', function() {
		$exitCode = Artisan::call('cache:clear');
		return '<h1>Cache facade value cleared</h1>';
	});

	//Reoptimized class loader:
	Route::get('/optimize', function() {
		$exitCode = Artisan::call('optimize');
		return '<h1>Reoptimized class loader</h1>';
	});

	//Route cache:
	Route::get('/route-cache', function() {
		$exitCode = Artisan::call('route:cache');
		return '<h1>Routes cached</h1>';
	});

	//Clear Route cache:
	Route::get('/route-clear', function() {
		$exitCode = Artisan::call('route:clear');
		return '<h1>Route cache cleared</h1>';
	});

	//Clear View cache:
	Route::get('/view-clear', function() {
		$exitCode = Artisan::call('view:clear');
		return '<h1>View cache cleared</h1>';
	});

	//Clear Config cache:
	Route::get('/config-cache', function() {
		$exitCode = Artisan::call('config:cache');
		return '<h1>Clear Config cleared</h1>';
	});
});
