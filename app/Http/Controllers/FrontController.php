<?php

namespace App\Http\Controllers;

use DB;
use App\Seccion;
use App\ProductosPhoto;
use App\Elemento;
use App\Carrusel;
use App\Politica;
use App\Vacante;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use App\Producto;
use App\Artista;
use App\ArtistaGaleria;
use Carbon\Carbon;
use App\EspectaculoCategoria;
use App\Espectaculo;
use App\Subespectaculo;
use App\Galeriasubespectaculo;
use App\BrecaServicio;
use App\BrecaEspectaculo;
use App\MasterClasses;
use App\BrecaEspectaculoImagenes;
use App\CarruselMarca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Brian2694\Toastr\Facades\Toastr;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
		public function index(){
			$pagina = 'index';
			$carrusel = Carrusel::orderBy('orden','asc')->get();
			$data = Configuracion::first();

			foreach ($carrusel as $carru) {
				if ($carru->video) { 
					if (Str::contains($carru->video, 'v=')) {
						$pos=strpos($carru->video, 'v');
						$videoPhoto=substr($carru->video, ($pos+2));
					}

					if (Str::contains($carru->video, 'youtu.be')) {
						$pos=strrpos($carru->video, '/');
						$videoPhoto=substr($carru->video, ($pos+1));
					}

					$carru->video = [
						'url' => $carru->video,
						'idVideo' => $videoPhoto
					];
				}
			}

			$elements = Elemento::where('seccion',1)->get();
			
			// $elements = Elemento::where('seccion',1)->get();
			// return view('front.index',compact('elements'));
			$desta = Producto::where('activo',1)->where('inicio',1)->get();
			
			foreach ($desta as $it) {
				$desc = strip_tags(htmlspecialchars_decode($it->descripcion));
				$it->descripcion = Str::words($desc, 40, '...');
				$photo_product = ProductosPhoto::where('producto',$it->id)->orderBy('orden','ASC')->first();
				
				$it->fotito = (!empty($photo_product)) ? $photo_product['image'] : null ;;
			}
			// dd($desta);

			$espectaculos = BrecaEspectaculo::all();
			$servicios = BrecaServicio::all();
			$categorias = EspectaculoCategoria::all();
			$data = Configuracion::first();
			$carruselEmpresas = CarruselMarca::all();

			$fileAux = $elements[2]->imagen;
			$formato = explode(".", $fileAux);
			$youtube = $elements[2]->texto;

			$youtube = str_replace('<div>', '', $youtube);
			$youtube = str_replace('</div>', '', $youtube);
			$youtube = str_replace('https://www.youtube.com/watch?v=', '', $youtube);


			// dd($formato);

			$total = 0;
			foreach($espectaculos as $e) {
				$total++;
			}

			$contador = 0;
			$co = 0;
			$bandera = 0;
			$co0 = 0;

			return view('front.index', compact('data', 'fileAux', 'co', 'co0', 'bandera', 'total', 'formato', 'data', 'carrusel', 'youtube', 'contador', 'espectaculos', 'carruselEmpresas', 'elements','desta', 'pagina', 'servicios', 'categorias')
				// ['espectaculos' => DB::table('breca_espectaculos')->paginate(6)]
			);
	}

	// public function servicios(Producto $serv){
		
	// 	if($serv->id == null){
	// 		return redirect()->back();
	// 	}
	// 	$seccion = Seccion::find(2);
	// 	$elements = Elemento::where('seccion', $seccion->id)->get();

	// 	$fianzas = Producto::where('activo',1)->where('categoria',1)->get(['id','nombre']);
	// 	$seguros = Producto::where('activo',1)->where('categoria',2)->get(['id','nombre']);
	// 	$servicios = array(
	// 		'fianzas' => $fianzas,
	// 		'seguros' => $seguros,
	// 	);

	// 	$productos_rel = $serv->relacionados()->get()->pluck('otroProducto');

	// 	$productos_rel = Producto::whereIn('id', $productos_rel)->get();

		
	// 	foreach ($productos_rel as $prodimg) {
	// 		$fphoto = ProductosPhoto::where('producto',$prodimg->id)->orderBy('orden','ASC')->get()->first();
	// 		$prodimg->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
	// 	}

	// 	$photo_product = ProductosPhoto::where('producto',$serv->id)->orderBy('orden','ASC')->get();

	// 	// if(!empty($productos_rel->count())){
	// 	// 	dd("viene con datos");
	// 	// }else{
	// 	// 	dd("No viene");
	// 	// }
	// 	// echo($productos_rel);
	// 	// dd($productos_rel);

	// 	$config = Configuracion::first();
		
	// 	return view('front.servicios',compact('elements','servicios','serv','productos_rel','photo_product','config'));
	// }

	public function getServicio(Request $request){
		$producto = Producto::find($request->service);
		return response()->json($producto,200);
	}

	public function espectaculos() {
		$categorias = EspectaculoCategoria::all();
		$espectaculos = BrecaEspectaculo::all();
		$data = Configuracion::first();

		$pagina = 'espectaculos';
		$cont = 0;
		$aux = 0;

		$total = 0;
		foreach($espectaculos as $e) {
			$total++;
		}

		$contador = 0;
		$co = 0;
		$bandera = 0;
		$co0 = 0;

		return view('front.espectaculos', compact('data', 'cont', 'aux', 'contador', 'co', 'co0', 'bandera', 'total', 'pagina', 'categorias', 'espectaculos'));
	}

	public function espectaculoDetalle($espectaculo) {
		$espectaculos = BrecaEspectaculo::find($espectaculo);
		$galeria = BrecaEspectaculoImagenes::all();
		$pagina = 'espectaculos_detalle';
		$data = Configuracion::first();

		return view('front.espectaculo_detalle', compact('data', 'pagina', 'espectaculo', 'espectaculos', 'galeria'));
	}

	public function artistas() {
		$elements = Elemento::where('seccion',7)->get();
		$artistas = Artista::all();
		$galeria = ArtistaGaleria::all();
		$data = Configuracion::first();
		$pagina = 'artistas';
		
		$total = 0;
		foreach($artistas as $aa) {
			$total++;
		}

		$contador = 0;
		$bandera = 0;
		$band = 0;

		return view('front.artistas', compact('data', 'total', 'pagina', 'bandera', 'band', 'artistas', 'galeria', 'contador', 'elements'));
	}

	public function servicios() {
		$pagina = 'servicios';
		$servicios = BrecaServicio::all();
		$contador = 0;
		$data = Configuracion::first();

		return view('front.servicios', compact('data', 'pagina', 'servicios', 'contador'));
	}

	public function masterClass() {
		$masterclass = MasterClasses::all();
		$pagina = 'masterclass';
		$data = Configuracion::first();

		return view('front.masterclass', compact('data', 'pagina', 'masterclass'));
	}

	public function contacto(){
		$seccion = Seccion::find(6);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		$data = Configuracion::first();

		return view('front.contacto',compact('data', 'elements'));
	}

	public function details(Producto $product){
		// $product = Producto::find($producto);

		$product->categoria = Categoria::find($product->categoria);
		$data = Configuracion::first();

		$product->gallery = $product->fotos()->orderBy('orden', 'asc')->get();

		// $variantes = ProductoVariante::where('producto', $product->id)->get();
		$medidas = ProductoMedida::where('producto',$product->id)->orderBy('orden', 'asc')->get();
		// return view('front.detalles', compact('product','variantes','productos_rel','elements'));
		$data = array(
			'product' => $product,
			'medidas' => $medidas,
		);
		return response()->json($data);
		// return $product;
	}

	public function aboutus(){
		$seccion = Seccion::find(5);
		$elements  = Elemento::where('seccion',$seccion->id)->get();
		$data = Configuracion::first();

		return view('front.aboutus', compact('data', 'elements', 'seccion'));
		// return view('front.aboutus');
	}
	public function vacantes(){
		$seccion = Seccion::find(4);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		$vacantes = Vacante ::where('activo',1)->get();
		$data = Configuracion::first();

		//$vacantes->requisitos=explode(";",$vacantes->requisitos);
		//dd($vacantes[]->requisitos=explode(";",$vacantes[]->requisitos));
		return view('front.vacantes',compact('data', 'elements','vacantes'));
		// return view('front.aboutus');
	}
	public function soluciones(){
		$seccion = Seccion::find(3);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		return view('front.soluciones',compact('elements'));
		$data = Configuracion::first();
		
		// return view('front.aboutus');
	}
	public function garantias(){
		$politica = Politica::find(5);
		$data = Configuracion::first();
		
		return view('front.politicas',compact("data", "politica"));
	}

	public function aviso(){
		$politica = Politica::find(1);
		$metodos_pago = Politica::find(2);
		$devoluciones = Politica::find(3);
		$terminos_condiciones = Politica::find(4);
		$garantias = Politica::find(5);
		$politica_envio = Politica::find(6);
		$pagina = 'aviso';
        $data = Configuracion::first();

		return view('front.politicas_aviso',compact("data", "politica", "metodos_pago", "devoluciones", "terminos_condiciones", "garantias", "politica_envio", "pagina"));
	}

	public function pagos(){
		$politica = Politica::find(2);
		return view('front.politicas',compact("politica"));
	}

	public function devoluciones(){
		$politica = Politica::find(3);
		return view('front.politicas',compact("politica"));
	}

	public function tyc(){
		$politica = Politica::find(4);
		return view('front.politicas',compact("politica"));
	}
	
	public function preguntas(){
		$preguntas = Faq::all();
		$pagina = "preguntas";
		$data = Configuracion::first();

		return view('front.faq',compact("data", "preguntas", "pagina"));
	}

// correo de contacto normal
	public function mailcontact(Request $request){

		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			'correo' => 'required',
			'whatsapp' => 'required|numeric',
			'mensaje' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos los datos');
			return redirect()->back();
		}

		

		$data = array(
			'nombre' => $request->nombre,
			// 'empresa' => $request->empresa,
			'correo' => $request->correo,
			'whatsapp' => $request->whatsapp,
			'mensaje' => $request->mensaje,
			'asunto' => 'brecaproductora.com (Formulario de contacto)',
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		
		
		$html = view('front.mailcontact',compact('data'));
	
		$config = Configuracion::first();

		$mail = new PHPMailer;

		
		
		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = $config->remitenteport;
			
		//	$mail->SetFrom($data['correo'], 'Formulario de Contacto');
	    	$mail->SetFrom($config->remitente, 'Formulario de Contacto');
			$mail->isHTML(true);
			
			$mail->addAddress($config->destinatario,'Breca Contacto');
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,'Breca Contacto');
			}
			$mail->Subject = $data['asunto'];
			$mail->msgHTML($html);
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			$mail->send();
			
			\Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}
		

	}

	

}
