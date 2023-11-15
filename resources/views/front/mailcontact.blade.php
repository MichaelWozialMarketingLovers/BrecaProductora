{{-- <html>
<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$data['asunto'] ?? ''}}</title>
</head>
<style>

.contenedor {
  display: grid;
  margin-top: 0px;
  margin-bottom: 50px;
  font-weight: bold;
  
}

.fila1, .fila2, .fila3, .fila4, .fila5 {
  grid-template-columns: 1fr; /* 1 columna */
  
}

.columna {
  /* border: 1px solid black; */
  padding: 10px;
  background-color: #fff;
  padding-left: 200px;
  padding-right: 200px;
}

.fila1 > .columna {
	background: #46176A;
	text-align: center;
	padding-top: 50px;
	padding-bottom: 50px;
	
}

.fila4 > .columna {
	text-align: right;
	padding-top: 5px;
	padding-bottom: 5px;
	background-color: #fff;
}

.fila5 > .columna {
	text-align: left;
	
}

	

</style>
<body style="
			margin: 0;
			background: #FFF;
			background-size: cover;
			background-repeat: no-repeat;
    		background-position: center;
			font-family: Arial, Helvetica, sans-serif;
			box-shadow: inset 0 0 100px 1px rgba(0, 0, 0, 0.646);
			">

<div class="contenedor">
	<div class="fila1">
	  	<div class="columna">
			<img src="{{asset('img/design/home/empresab.png')}}" style="width: 400px;padding: 5px;border-radius: 5px;">
	  	</div>
	</div>
	<div class="fila2">
	  <div class="columna">
		<a href="{{url('/')}}" style="color:#000;">{{url('/')}}</a>
		@if ($config->telefono)
			Tel: {{$config->telefono}}
			<br /><br/>
		@endif
		<p>Nombre: <b> {{$data['nombre'] ?? ''}}</b></p>
		<p>Correo: <b> {{$data['correo'] ?? ''}}</b></p>
		<p>whatsapp: <b> {{$data['whatsapp'] ?? ''}}</b></p>
	  </div>
	</div>
	<div class="fila3">
	  <div class="columna">
		<p>Contenido del mensaje: <br> <b style="text-align:justify;"> {{$data['mensaje'] ?? ''}}</b></p>
	  </div>
	</div>
	<div class="fila4">
	  <div class="columna">
		<a href="{{$config->whatsapp}}">
			<img src="https://img.icons8.com/color/64/000000/whatsapp.png">
		</a>
		<a href="{{$config->instagram}}">
			<img src="https://img.icons8.com/color/64/000000/instagram-new.png">
		</a>
		<a href="{{$config->facebook}}">
			<img src="https://img.icons8.com/color/64/000000/facebook.png">
		</a>
	  </div>
	</div>
	<div class="fila5">
	  <div class="columna">
			<div style="
					width:100%;
	
					color:#333;
					font-size:15px;
					padding:1em 0;
					">
				fecha: {{$data['hoy'] ?? ''}}
			</div><!-- Fecha -->
			
	  </div>
	</div>
  </div>

	


</body>
</html>

 --}}






<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

	    .primary{
	background: #30e3ca;
}
.bg_white{
	background: #ffffff;
}
.bg_light{
	background: #fafafa;
}
.bg_black{
	background: #000000;
}
.bg_dark{
	background: rgba(0,0,0,.8);
}
.email-section{
	padding:2.5em;
}

/*BUTTON*/
.btn{
	padding: 10px 15px;
	display: inline-block;
}
.btn.btn-primary{
	border-radius: 5px;
	background: #30e3ca;
	color: #ffffff;
}
.btn.btn-white{
	border-radius: 5px;
	background: #ffffff;
	color: #000000;
}
.btn.btn-white-outline{
	border-radius: 5px;
	background: transparent;
	border: 1px solid #fff;
	color: #fff;
}
.btn.btn-black-outline{
	border-radius: 0px;
	background: transparent;
	border: 2px solid #000;
	color: #000;
	font-weight: 700;
}

h1,h2,h3,h4,h5,h6{
	font-family: 'Lato', sans-serif;
	color: #000000;
	margin-top: 0;
	font-weight: 400;
}

body{
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.4);
}

a{
	color: #30e3ca;
}

table{
}
/*LOGO*/

.logo h1{
	margin: 0;
}
.logo h1 a{
	color: #30e3ca;
	font-size: 24px;
	font-weight: 700;
	font-family: 'Lato', sans-serif;
}

/*HERO*/
.hero{
	position: relative;
	z-index: 0;
}

.hero .text{
	color: rgba(0,0,0,.3);
}
.hero .text h2{
	color: #000;
	font-size: 40px;
	margin-bottom: 0;
	font-weight: 400;
	line-height: 1.4;
}
.hero .text h3{
	font-size: 24px;
	font-weight: 300;
}
.hero .text h2 span{
	font-weight: 600;
	color: #30e3ca;
}


/*HEADING SECTION*/
.heading-section{
}
.heading-section h2{
	color: #000000;
	font-size: 28px;
	margin-top: 0;
	line-height: 1.4;
	font-weight: 400;
}
.heading-section .subheading{
	margin-bottom: 20px !important;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(0,0,0,.4);
	position: relative;
}
.heading-section .subheading::after{
	position: absolute;
	left: 0;
	right: 0;
	bottom: -10px;
	content: '';
	width: 100%;
	height: 2px;
	background: #30e3ca;
	margin: 0 auto;
}

.heading-section-white{
	color: rgba(255,255,255,.8);
}
.heading-section-white h2{
	font-family: 
	line-height: 1;
	padding-bottom: 0;
}
.heading-section-white h2{
	color: #ffffff;
}
.heading-section-white .subheading{
	margin-bottom: 0;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(255,255,255,.4);
}


ul.social{
	padding: 0;
}
ul.social li{
	display: inline-block;
	margin-right: 10px;
}

/*FOOTER*/

.footer{
	border-top: 1px solid rgba(0,0,0,.05);
	color: rgba(0,0,0,.5);
}
.footer .heading{
	color: #000;
	font-size: 20px;
}
.footer ul{
	margin: 0;
	padding: 0;
}
.footer ul li{
	list-style: none;
	margin-bottom: 10px;
}
.footer ul li a{
	color: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
	<center style="width: 100%; background-color: #FFF;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; border: 1px solid #000;" class="email-container">
    	<!-- BEGIN BODY -->
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="top" style="padding: 1em 2.5em 0 2.5em; background-color: #46176A;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: center;">
			            <h1 style="padding-bottom: 20px;"><a href="#" style="color: white;">Formulario de contacto</a></h1>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
	      <tr>
          <td valign="middle" class="hero bg_white" style="padding: 3em 0 2em 0;">
            <img src="https://brecaproductora.com/img/design/home/empresa.png" alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
          </td>
	      </tr><!-- end tr -->
				<tr>
          <td class="hero bg_white" style="padding: 2em 0 4em 0;">
            <table>
            	<tr>
            		<td style="padding: 50px;">
            			
            				<h4>Nombre: {{ $data['nombre'] ?? '' }} </h4>
            				<h4>Correo: {{ $data['correo'] ?? '' }} </h4>
            				<h4>Whatsapp: {{ $data['whatsapp'] ?? '' }} </h4>
							<h4>Mensaje: </h4> 
							<p>{{ $data['mensaje'] ?? '' }}</p>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr style="background-color: #46176A;">
			
          <td valign="middle" class="footer email-section">
            <table>
            	<tr>
					<h3 style="text-align: center; margin: 0; color: #FFF; font-weight: bold;">Secciones de Breca</h3><br>
                <td valign="top" width="100%" style="padding-top: 20px;">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="text-align: center; padding-right: 10px;">
                    
                      	
							<a href="https://brecaproductora.com/" style="color: white; margin-left: 15px; margin-right: 15px;">Home</a>
					        <a href="https://brecaproductora.com/artistas" style="color: white; margin-left: 15px; margin-right: 15px;">Artistas</a>
							<a href="https://brecaproductora.com/espectaculos" style="color: white; margin-left: 15px; margin-right: 15px;">Espectaculos</a>
							<a href="https://brecaproductora.com/servicios" style="color: white; margin-left: 15px; margin-right: 15px;">Servicios</a>
							<a href="https://brecaproductora.com/masterclass" style="color: white; margin-left: 15px; margin-right: 15px;">Masterclass</a>        
						
                      </td>
                    </tr>
                  </table>
                </td>
               
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
        <tr>
          <td class="" style="text-align: center; background-color: #46176A;">
			<a href="https://wa.me/{{$config->whatsapp}}">
				<img src="https://img.icons8.com/color/64/000000/whatsapp.png">
			</a>
			<a href="{{$config->instagram}}">
				<img src="https://img.icons8.com/color/64/000000/instagram-new.png">
			</a>
			<a href="{{$config->facebook}}">
				<img src="https://img.icons8.com/color/64/000000/facebook.png">
			</a>
          	<p style="color: white;"> Fecha en la que fue enviado el mensaje: {{$data['hoy'] ?? ''}} </p>
			
          </td>
        </tr>
      </table>

    </div>
  </center>
</body>
</html>