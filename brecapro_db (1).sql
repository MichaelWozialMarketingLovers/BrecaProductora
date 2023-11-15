-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-11-2023 a las 13:46:42
-- Versión del servidor: 5.7.44-log-cll-lve
-- Versión de PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `brecapro_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `menu_display` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `user`, `email`, `password`, `role`, `menu_display`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 23:24:37', '2020-10-14 23:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci,
  `apellidos` text COLLATE utf8mb4_unicode_ci,
  `tipo_artista` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `whatsapp` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `apellidos`, `tipo_artista`, `foto`, `descripcion`, `facebook`, `instagram`, `whatsapp`, `created_at`, `updated_at`) VALUES
(13, 'MÓNICA', 'ZULOAGA', 'Cantante y Compositora', '20230426153357.jpg', '<div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Con una trayectoria art&iacute;stica de 25 a&ntilde;os, especializ&aacute;ndose en el g&eacute;nero del jazz desde hace de 16 a&ntilde;os, Zuloaga se ha presentado con varias agrupaciones en innumerables foros y festivales en la Rep&uacute;blica Mexicana.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Ha grabado 4 &aacute;lbumes de jazz y 4 EP&acute;s publicados en plataformas dig&iacute;tales. En los &uacute;ltimos 16 a&ntilde;os, ha colaborado y presentado con grandes m&uacute;sicos de jazz c&oacute;mo Iraida Noriega, Erik Deutshc, Chuck Bergeron, Lina Allemano, Bryan Lynch y Chris Grady, por nombrar algunos.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Locutora en su programa de &ldquo;Jazz a la Carte&rdquo; de la barra Esto No es Jazz transmitida por Radio Universidad de Guadalajara.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Ahora se encuentra promocionando su nuevo &aacute;lbum in&eacute;dito NO MORE LOVE SONGS, con composiciones de su propia autor&iacute;a y con los arreglos y producci&oacute;n musical de Jos&eacute; Chac&oacute;n.</div>\r\n</div>', '.', '.', '.', '2023-04-26 21:33:57', '2023-06-26 23:28:34'),
(14, 'CYNTHIA', 'SEPÚLVEDA', 'Coreógrafa', '20230426153609.jpg', '<div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Core&oacute;grafa, bailarina y docente, Cynthia cuenta con 20 a&ntilde;os de experiencia en la danza y artes esc&eacute;nicas principalmente en contempor&aacute;neo, jazz &nbsp;y ballet.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;En su formaci&oacute;n destaca el m&aacute;ster en Artes Esc&eacute;nicas por la Universidad Rey Juan Carlos en Madrid, Espa&ntilde;a, Lic. En artes esc&eacute;nicas para la expresi&oacute;n danc&iacute;stica por la Universidad de Guadalajara y Lic. En Nutrici&oacute;n por la Universidad de Guadalajara.<br />&nbsp; &nbsp;Complementando su formaci&oacute;n en ritmos latinos, tango, circo y teatro.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Ganadora de apoyos como Beca Grodmad, Alas y Ra&iacute;ces, entre otros, y participado en concursos como Festival Guadalajara 2022 ganando mejor coreograf&iacute;a, concurso ATTITUDE ganadora por varios a&ntilde;os consecutivos en mejor coreograf&iacute;a, YAGP quedando entre las 3 mejores coreograf&iacute;as a nivel nacional pasando a la final en USA 2022, INBA UAM Jump Dance.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Se ha presentado en distintos festivales y eventos nacionales e internacionales como los panamericanos Guadalajara 2011, Festival del caribe en Cartagena, Colombia, Festival en Guare&ntilde;a, Espa&ntilde;a, Festival FITEAL en Tacna Per&uacute; 2022, entre muchos otros.</div>\r\n</div>', '.', '.', '.', '2023-04-26 21:36:09', '2023-06-26 23:30:39'),
(15, 'ELISA', 'SOTO', 'Productora Artística', '20230511004709.jpeg', '<div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Dedicada a las artes esc&eacute;nicas desde el 2005, (Circo, danza, m&uacute;sica, teatro, t&iacute;teres) Trabajando en diferentes &aacute;reas como la producci&oacute;n general, producci&oacute;n ejecutiva, log&iacute;stica, tour manager, promoci&oacute;n art&iacute;stica (Booking), direcci&oacute;n de escena, creaci&oacute;n, medios de comunicaci&oacute;n, stage manager y ejecutante de hair hanging.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp;Cuenta con el Diplomado por la Universidad de Nevada en las Vegas en producci&oacute;n de eventos y espect&aacute;culos, es Licenciada en Mercadotecnia por la Universidad de Guadalajara, &nbsp;t&eacute;cnico en Artes Esc&eacute;nicas por el Instituto de Desarrollo Art&iacute;stico en Guadalajara y con capacitaci&oacute;n continua en el &aacute;rea de las artes esc&eacute;nicas como talleres de producci&oacute;n, negocios de la m&uacute;sica, iluminaci&oacute;n, log&iacute;stica, teatro f&iacute;sico, hairhanging, stagemanager, dise&ntilde;o de calzado, maquillaje esc&eacute;nico, entre otros, y actualmente en el diplomado de Finanzas personales con Sof&iacute;a Mac&iacute;as ganadora de un best seller.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">- &nbsp; &nbsp;Entre sus trabajos destacan en:<br />&ldquo;RITMOS DE LA NOCHE&rdquo; (RHYTHMS OF THE NIGHT) como Stage Manager y Coordinadora Art&iacute;stica 2019. Bajo la direcci&oacute;n de Gilles Ste-Croix (Fundador del Cirque du Soleil) Puerto Vallarta, Jalisco 2019.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">\"FICHO\" Festival Internacional de Circo y Show de M&eacute;xico. 2011 y 2013. Productora General.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Ha participado en distintos festivales como DIA INTERNACIONAL DE LA DANZA RIVIERA MAYA, 2018 y 2019, FESTA JALISCO 2016, FITEATRO RIVIERA MAYA 2015 como encargada y dise&ntilde;adora de log&iacute;stica.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">M&Aacute;NAGER/TOUR M&Aacute;NAGER de artistas como: M&oacute;nica Zuloaga (MZ Jazz), Carlos Serrano - Artista CIRQUE DU SOLEIL, Tato Villanueva &ndash; Clown Argentina, Memo M&eacute;ndez &ndash; Clown, Telefunka- Agrupaci&oacute;n de m&uacute;sica electr&oacute;nica, Cirko Alebrije-Compa&ntilde;&iacute;a de Circo Contempor&aacute;neo, Alfonsina Riosantos-Bailarina de Danza Butoh, entre otros.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">-FORO PERIPLO- Socia Colaboradora 2015. Centro de Desarrollo de artes Circenses.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Y elaboraci&oacute;n de calzado esc&eacute;nico para Denisse de Belanova 2011 y 2012.</div>\r\n</div>', '.', '.', '.', '2023-04-26 21:37:33', '2023-06-26 23:34:48'),
(16, 'MIGUEL', 'MESA', 'Artista Audiovisual', '20230502024534.jpeg', '<div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Miembro actual del Sistema Nacional De Creadores de Arte.&nbsp;</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Artista interdisciplinario, con una formaci&oacute;n en composici&oacute;n de m&uacute;sica electr&oacute;nica y electroac&uacute;stica por el centro mexicano para la m&uacute;sica y las artes sonoras en Morelia, Michoac&aacute;n, e Ingeniero en Sistemas Computacionales en el ITESO, Guadalajara, Jalisco.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Miguel Mesa inicialmente se enfocó en el procesamiento/s&iacute;ntesis de audio y video en tiempo real utilizando conocimientos relacionados con la ciencia as&iacute;́ como con el arte. Ha compuesto para instrumentos ac&uacute;sticos solos, instrumentos y electr&oacute;nica en tiempo real y electr&oacute;nica para medios fijos. En su af&aacute;n por expandirse a otras disciplinas comenz&oacute;́ a indagar alrededor de est&eacute;ticas participativas y/o abiertas, principalmente involucrando Nuevos Medios.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Durante esta b&uacute;squeda ha dirigido su trabajo art&iacute;stico bajo cuatro l&iacute;neas principales: &ldquo;Cosmopol&iacute;tica&rdquo; (Piezas relacionadas con est&eacute;ticas de vida mesoamericanas, incluidos temas ecol&oacute;gicos).&nbsp; Autoconocimiento (piezas que muestran facetas inaccesibles de nosotros mismos y ejercicios de lo que llama Ecolog&iacute;a de la Historia). Autocritica (piezas que cuestionen nuestra manera de entender y responder ante lo circundante: natural/cultural, c&iacute;vico o social) y Cuestionamientos est&eacute;ticos o formales (piezas que confronten los soportes y nuestra aproximaci&oacute;n a los mismos). Para desarrollar dichas piezas hace uso de distintos soportes que van desde el arte sonoro, instalaci&oacute;n audiovisual, net.art, fotograf&iacute;a, artes esc&eacute;nicas, dibujo, video documental, etc. Como resultado sus piezas se traducen/exponen en proyectos esc&eacute;nicos, conciertos, exposiciones en museos, galer&iacute;as, festivales e intervenciones p&uacute;blicas. Ha presentado su trabajo en M&eacute;xico, Colombia, Bolivia, Uruguay, Canad&aacute;, Espa&ntilde;a, Suiza, Per&uacute;́, Argentina, Eslovenia, Croacia y Usa.</div>\r\n</div>', '.', '.', '.', '2023-04-26 21:39:35', '2023-06-26 23:36:48'),
(17, 'BERNABE', 'COVARRUBIAS', 'Diseño de Vestuario', '20230426171419.jpeg', '<div style=\"text-align: justify;\">&nbsp; &nbsp;Con 20 a&ntilde;os de experiencia profesional Bernab&eacute; Covarrubias ha participado en dise&ntilde;o y construcci&oacute;n de vestuarios de las compa&ntilde;&iacute;as y artistas m&aacute;s importantes en la industria tapat&iacute;a.</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Form&aacute;ndose en Corte y confecci&oacute;n, alta confecci&oacute;n y Dise&ntilde;o de modas en la academia municipal del ayuntamiento de Guadalajara, le ha dise&ntilde;ado y confeccionado vestuarios a Luna Morena (Compa&ntilde;&iacute;a de teatro de t&iacute;teres) , Alfonsina Riosantos (Danza Butoh), Breca Productora (Productora Art&iacute;stica), El Tlakuache (Compa&ntilde;&iacute;a de t&iacute;teres), Luis delgadillo y los Keliguanes (m&uacute;sica), Georgina Gast&eacute;lum ( Teatro de t&iacute;teres) .</div>\r\n<div style=\"text-align: justify;\">&nbsp; &nbsp;Adem&aacute;s de formar parte de empresas donde patrona, arma, borda a mano y m&aacute;quina para modistas como Erika Zambrano, Edgar Lozzano y Salvador Moreno.</div>', '.', '.', '.', '2023-04-26 23:14:19', '2023-06-26 23:38:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista_galerias`
--

CREATE TABLE `artista_galerias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artista` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `artista_galerias`
--

INSERT INTO `artista_galerias` (`id`, `artista`, `foto`, `created_at`, `updated_at`) VALUES
(1, 13, '20230518214924.jpeg', '2023-05-19 03:49:24', '2023-05-19 03:49:24'),
(2, 14, '20230518215055.jpeg', '2023-05-19 03:50:55', '2023-05-19 03:50:55'),
(3, 15, '20230518215311.JPG', '2023-05-19 03:53:11', '2023-05-19 03:53:11'),
(4, 16, '20230518215448.jpeg', '2023-05-19 03:54:48', '2023-05-19 03:54:48'),
(5, 17, '20230518215516.jpeg', '2023-05-19 03:55:16', '2023-05-19 03:55:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `breca_espectaculos`
--

CREATE TABLE `breca_espectaculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` bigint(20) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `contacto` text COLLATE utf8mb4_unicode_ci,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `breca_espectaculos`
--

INSERT INTO `breca_espectaculos` (`id`, `categoria`, `imagen`, `titulo`, `descripcion`, `contacto`, `activo`, `created_at`, `updated_at`) VALUES
(24, 3, '20230821201055.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>MOLAVIN</strong></span></div>', '<div style=\"text-align: justify;\">&nbsp; <span style=\"color: #ecf0f1;\">&nbsp;Se puede olvidar la verdad repitiendo una mentira, una nube de humo espeso e intangible.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Una &oacute;pera bufa que cuenta la historia y las visiones de un vendedor de humo que, cansado de mentir, decide arriesgar su vida por un ideal.&nbsp; &nbsp; &nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; Boris, el protagonista, es un cham&aacute;n, alquimista, cuentero, espiritista, m&eacute;dico alternativo y astr&oacute;logo que ha recorrido el mundo recopilando rarezas y pociones m&aacute;gicas. Hoy llega para develar estos misterios. &nbsp;</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n:</strong> 50 minutos &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> Teatro gestual, clown, manipulaci&oacute;n de objetos, equilibrios, boomerang, hula-hoop y canto l&iacute;rico. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>No. de personas que viajan:</strong> 3</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video:</strong> <a style=\"color: #ecf0f1;\" href=\"https://youtu.be/lGlsiPT6dvs\">https://youtu.be/lGlsiPT6dvs</a></span></div>', '<div><strong>Video:</strong> <a href=\"https://youtu.be/lGlsiPT6dvs\">https://youtu.be/lGlsiPT6dvs</a></div>', 1, '2023-04-29 09:09:59', '2023-08-22 02:10:56'),
(25, 3, '20230821201137.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>EL ILUSIONISTA</strong></span></div>', '<div style=\"text-align: justify;\">&nbsp; <span style=\"color: #ecf0f1;\">&nbsp;Javier Natera, mago profesional que se ha presentado en diversos pa&iacute;ses con sus espect&aacute;culos, ilusionado y asombrando a p&uacute;blicos de todas las edades.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Espectáculo especializado en entretener y asombrar a ni&ntilde;os y adultos de todas las edades. Completamente familiar, dinámico y divertido.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;No se utiliza lenguaje vulgar o doble sentido y en ningún momento se ridiculiza a personas del p&uacute;blico.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;La misión es integrar a todos los espectadores y maravillarlos con diversos actos de magia, ilusi&oacute;n y mentalismo.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n</strong>: 50 minutos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> Magia y mentalismo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>No. de personas que viajan</strong>: 2</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video:</strong>&nbsp;<a style=\"color: #ecf0f1;\" href=\"https://youtu.be/P5NSDUToCoA\">https://youtu.be/P5NSDUToCoA</a></span></div><div style=\"text-align: justify;\">&nbsp;</div>', '<div><strong>Video:</strong>&nbsp;<a href=\"https://youtu.be/P5NSDUToCoA\">https://youtu.be/P5NSDUToCoA</a></div>', 1, '2023-04-29 09:14:44', '2023-08-22 02:11:38'),
(26, 3, '20230821201223.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>OLE!</strong></span></div>', '<div style=\"text-align: justify;\">&nbsp; <span style=\"color: #ecf0f1;\">&nbsp;Los hermanos Malabamendez se encuentran en la última corrida de toros de todos los tiempos, desafiando las más feroces bestias que en ningún héroe épico ha logrado dominar.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Malabarismo absurdo, equilibrismo fijo y sobre todo sonrisas por montón.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duración:</strong> 50 minutos.</span><br /><span style=\"color: #ecf0f1;\"><strong>Género:</strong> Clown, malabarismo y Circo contemporáneo.</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>No. de personas que viajan:</strong> 5</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video: </strong><a style=\"color: #ecf0f1;\" href=\"https://youtu.be/nO0nuZRX9kk\">https://youtu.be/nO0nuZRX9kk</a>&nbsp;</span></div>', '<div><strong>Video: </strong><a href=\"https://youtu.be/nO0nuZRX9kk\">https://youtu.be/nO0nuZRX9kk</a>&nbsp;</div>', 1, '2023-04-29 09:17:30', '2023-08-22 02:12:24'),
(27, 3, '20230821201308.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>EN LA LONA</strong></span></div>', '<div style=\"text-align: justify;\">&nbsp; &nbsp;<span style=\"color: #ecf0f1;\">El boxeo, como la vida, consiste en la mitad del tiempo dar golpes y la mitad ocultarse para no recibirlos, el refinado arte del engaño sobre lo que nos construimos como vatos. En consecuencia, a nuestras propias referencias de la figura masculina.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Una pieza dramática y performativa; cómica y profunda que presenta la historia de Juanelo desde su ascenso hasta su fatídica caída. Entre la comicidad sutil y sensible, asociada a su propio carácter inesperado y la exposición de la intimidad del boxeador.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Entre el lenguaje circense, el teatral y el físico, Juanelo articula sus propios relatos en una historia de boxeo que metaforiza el costo que tienen los boxeadores de llevar a su cuerpo al límite posible de la resistencia humana, cuando esto sucede parece que han llegado a la cúspide; el problema es cuando se acaba, la caída siempre es brutal, mortal e irreversible.</span><br /><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;El boxeador, con los pies más livianos, logra engañar muy bien y con ello alinea momentáneamente lo que él quiere con lo que los otros esperan.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n :</strong> 60 minutos</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Genero:</strong> Teatro y lenguaje circense, para mayores de 13 a&ntilde;os.</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Viajan</strong>: 5 personas</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video:&nbsp;</strong><a style=\"color: #ecf0f1;\" href=\"https://youtu.be/VSlH7e-Tp7Q\">https://youtu.be/VSlH7e-Tp7Q</a>&nbsp;</span></div>', '<div><strong>Video:&nbsp;</strong><a href=\"https://youtu.be/VSlH7e-Tp7Q\">https://youtu.be/VSlH7e-Tp7Q</a>&nbsp;</div>', 1, '2023-04-29 09:20:00', '2023-08-22 02:13:08'),
(28, 3, '20230821201401.png', '<div><div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>CALACAS</strong></span></div></div>', '<div style=\"text-align: justify;\">&nbsp; &nbsp;<span style=\"color: #ecf0f1;\">Basado en una de las tradiciones m&aacute;s representativas de M&eacute;xico, el día de muertos.</span><br /><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;A través de actos de acrobacia, malabarismo teatro físico, equilibrismo y clown contaremos la historia del viaje de las calaveras que regresan al mundo de los vivos este día tan esperado.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n : </strong>40 minutos,</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> Circo y teatro f&iacute;sico</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>No. de personas que viajan: </strong>8</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video:</strong> <a style=\"color: #ecf0f1;\" href=\"https://youtu.be/GgEJsRieuoc\">https://youtu.be/GgEJsRieuoc</a>&nbsp;</span></div>', '<div>Video: <a href=\"https://youtu.be/GgEJsRieuoc\">https://youtu.be/GgEJsRieuoc</a>&nbsp;</div>', 1, '2023-04-29 09:23:51', '2023-08-22 02:14:02'),
(29, 3, '20230821201515.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>MONICA ZULOAGA</strong></span></div><div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>NO MORE LOVE SONGS</strong></span></div>', '<div style=\"text-align: justify;\">&nbsp; <span style=\"color: #ecf0f1;\">&nbsp;Reconocida cantante de jazz tapat&iacute;a, con su estilo elegante y sensual, embarcar&aacute; al espectador hacia un exquisito e inolvidable espect&aacute;culo junto a su ensamble, conformado por distinguidos m&uacute;sicos de nuestra escena del jazz. &nbsp;</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Su repertorio original denota y florece con toques de jazz tradicional, bossa nova y jazz contempor&aacute;neo, que atrevidamente prometen convertirse en nuevos jazz standards.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n:</strong> 1 hora</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> Jazz</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Viajan:</strong> 7 personas</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video:</strong> <a style=\"color: #ecf0f1;\" href=\"https://youtu.be/duDWZC9114c\">https://youtu.be/duDWZC9114c</a>&nbsp;</span></div>', '<div>Video: <a href=\"https://youtu.be/uqn8H-6CpXw\">https://youtu.be/uqn8H-6CpXw</a>&nbsp;</div>', 1, '2023-04-29 09:25:18', '2023-08-22 02:15:15'),
(30, 3, '20230821202419.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>DIRTY BLACK BEANS</strong></span></div>', '<div style=\"text-align: justify;\">&nbsp; <span style=\"color: #ecf0f1;\">&nbsp;Agrupaci&oacute;n tapat&iacute;a formada a mediados del 2011, con la inquietud de buscar un sonido que combinara el viejo Blues, el Rockabilly de los 50 ́s y el Swing de las grandes bandas, algo que deba ser escuchado con atenci&oacute;n pero tambi&eacute;n que ponga a la gente a bailar.</span></div><div style=\"text-align: justify;\"><br /><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Este proyecto ha tenido un buen recibimiento en la escena musical debido a la trayectoria de sus integrantes en el Blues, Rock y Jazz, adem&aacute;s de ser una de las pocas bandas de este estilo que existen actualmente en Guadalajara.</span></div><div style=\"text-align: justify;\"><br /><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Dirty Black Beans actualmente se encuentran componiendo m&uacute;sica original tomando como influencias a bandas como Stray Cats, Johnny Kidd &amp; The Pirates, Wanda Jackson, Freddie King, Howling Wolf, Gene Vincent, Eddie Cochran, etc</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n:</strong> 60 minutos</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> M&uacute;sica Rockabilly y swing</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Viajan:</strong> 7 personas</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video: <a style=\"color: #ecf0f1;\" href=\"https://www.youtube.com/watch?v=PUGlGBNEMwI\">https://www.youtube.com/watch?v=PUGlGBNEMwI</a>&nbsp;</strong></span></div>', '<div>Video: <a href=\"https://www.youtube.com/watch?v=PUGlGBNEMwI\">https://www.youtube.com/watch?v=PUGlGBNEMwI</a>&nbsp;</div>', 1, '2023-04-29 09:26:38', '2023-08-22 02:24:20'),
(32, 3, '20230821201645.png', '<div style=\"text-align: center;\"><strong><span style=\"color: #ecf0f1;\">EL CIRCO DE LA MUERTE</span></strong></div>', '<div style=\"text-align: justify;\">&nbsp; &nbsp;<span style=\"color: #ecf0f1;\">Una obra de t&iacute;teres y teatro negro para toda la familia, vali&eacute;ndose del arte del circo y tomando elementos representativos del folclore mexicano, lleva a escena un trabajo de ilusiones visuales, donde la Muerte acompa&ntilde;ada por un gusano, recrea a los personajes cl&aacute;sicos del circo, de esta manera se rinde homenaje a una de las tradiciones m&aacute;s mexicanas: &ldquo;El d&iacute;a de muertos&rdquo;.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n: </strong>45 min</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> T&iacute;teres teatro negro</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Viajan:</strong> 6 personas</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Video:</strong>&nbsp;<a style=\"color: #ecf0f1;\" href=\"https://www.youtube.com/watch?v=3B3cKQLS5X8\">https://www.youtube.com/watch?v=3B3cKQLS5X8</a></span></div>', '<div><strong>Video:</strong>&nbsp;<a href=\"https://www.youtube.com/watch?v=3B3cKQLS5X8\">https://www.youtube.com/watch?v=3B3cKQLS5X8</a></div>', 1, '2023-04-29 09:30:01', '2023-08-22 02:16:46'),
(33, 3, '20230821201734.png', '<div style=\"text-align: center;\"><strong><span style=\"color: #ecf0f1;\">TIEMPO DE ORO</span></strong></div>', '<div><div style=\"text-align: justify;\">&nbsp; &nbsp;<span style=\"color: #ecf0f1;\">Espect&aacute;culo que se crea con la idea de juntar los tiempos emblem&aacute;ticos de tres generaciones, con una est&eacute;tica de un Organillo y su empleador (Organillermo) nos invita a la generaci&oacute;n de nuestros abuelos. La t&eacute;cnica de circo y espect&aacute;culo de calle est&aacute; invitando a las generaciones m&aacute;s j&oacute;venes y en t&eacute;rminos de Comedia y M&uacute;sica termina de atraer al p&uacute;blico adulto y familiar.&nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Organillermo nos muestra c&oacute;mo hered&oacute; lo intangible de la familia, del cual siente un gran cari&ntilde;o y aprecio, pero los tiempos no son los mismos y se tendr&aacute;n que buscar formas m&aacute;s expresivas para poder volver a captar la atenci&oacute;n del p&uacute;blico en el bello arte de la melod&iacute;a interpretada por un Organillo.&nbsp;</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;El espect&aacute;culo se lleva a cabo en espacios abiertos como plazas p&uacute;blicas, parques coloniales y camineras en centros hist&oacute;ricos. &nbsp;Dado a la infraestructura de la escenograf&iacute;a no requiere conexi&oacute;n el&eacute;ctrica, por lo que puede ubicarse en puntos estrat&eacute;gicos para amplificar la perspectiva y el confort del p&uacute;blico.</span></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n:</strong> 45 minutos</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> Clown, artes circenses</span></div><div style=\"text-align: justify;\"><span style=\"color: #ecf0f1;\"><strong>Viajan: </strong>2 personas&nbsp;</span></div></div>', '<div>.</div>', 1, '2023-04-29 09:33:07', '2023-08-22 02:17:34'),
(35, 3, '20230821201821.png', '<div style=\"text-align: center;\"><span style=\"color: #ecf0f1;\"><strong>UN DOMINGO</strong></span></div>', '<div>&nbsp; <span style=\"color: #ecf0f1;\">&nbsp;Es un domingo en familia. Todos se re&uacute;nen alrededor de una gran mesa. En el ambiente se observa un lujo dudoso. La aristocracia ha perdido su brillo. Una tensión reina en este mundo donde todo parece posible.</span></div><div><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;</span></div><div><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Objetos con vida, cuerpos acrobáticos y contorsionados, proyectando emociones potentes. Un mundo con reglas sociales y psíquicas inquietantes y ridículas; que nos trasladan de la risa a la consternación.</span></div><div><span style=\"color: #ecf0f1;\">&nbsp;</span></div><div><span style=\"color: #ecf0f1;\">&nbsp; &nbsp;Mentalidad medieval, impulsos de sueños americanos, romances torcidos y delirios imperiales. inmersión a una familia felineana donde todo desborda, el amor y el odio.&nbsp; &nbsp; Un circo-teatro que contiene a la vez toda la vulgaridad y la gracia del ser . Cuerpos comprometidos al extremo ,sentimientos crudos y las m&aacute;s refinadas atenciones.</span></div><div><span style=\"color: #ecf0f1;\">&nbsp; </span></div><div><span style=\"color: #ecf0f1;\">&nbsp; Hay un invitado. &iquest;Es él la causa de este desastre? &iquest;O simplemente se ve involucrado en esta vida de familia deplorable?</span></div><div><span style=\"color: #ecf0f1;\">&nbsp;</span></div><div><span style=\"color: #ecf0f1;\">&nbsp; Los domingos a veces son un día de fiesta... y que fiesta!</span></div><div>&nbsp;</div><div><span style=\"color: #ecf0f1;\"><strong>Duraci&oacute;n:</strong> 70 minutos</span></div><div><span style=\"color: #ecf0f1;\"><strong>G&eacute;nero:</strong> Circo Contemporan&eacute;o</span></div><div><span style=\"color: #ecf0f1;\"><strong>Viajan:</strong> 10 personas</span></div><div><span style=\"color: #ecf0f1;\"><strong>Video:</strong> https://youtu.be/Twx_zwNx_PA</span></div>', '.', 1, '2023-05-19 04:38:32', '2023-08-22 02:18:21'),
(42, 3, '20230821202151.png', '<div><span style=\"color: #ecf0f1;\"><strong>TONAR</strong></span></div>', '<div><span style=\"color: #ecf0f1;\">Agrupaci&oacute;n nacida en Guadalajara, Jalisco que mezcla y fusiona sonidos del Jazz, boleros, bossa nova, logrando arreglos realmente creativos.</span></div><div>&nbsp;</div><div><div><span style=\"color: #ecf0f1;\"><strong>Duración:</strong> 60 minutos.</span><br /><span style=\"color: #ecf0f1;\"><strong>Género:</strong> M&uacute;sica Jazz, Bossa Nova y Boleros.</span></div><div><span style=\"color: #ecf0f1;\"><strong>No. de personas que viajan:</strong>&nbsp;5</span></div><div><span style=\"color: #ecf0f1;\"><strong>Video: https://youtu.be/eAtUYMH6MDY</strong></span></div></div>', '.', 1, '2023-08-07 23:15:33', '2023-08-22 02:21:52'),
(43, 3, '20230822001523.png', '<div><span style=\"color: #ecf0f1;\">XIMENA REND&Oacute;N</span></div>', '<div><span style=\"color: #ecf0f1;\">Con solo 18 a&ntilde;os de edad, Ximena Rend&oacute;n lleva 11 a&ntilde;os de formaci&oacute;n en la m&uacute;sica, espec&iacute;ficamente con el viol&iacute;n. Desde los 7 a&ntilde;os comenz&oacute; su carrera art&iacute;stica. Participo recientemente en el Festival Internacional por la Paz en TUR&Iacute;N, ITALIA, dirigida por Arturo Marquez compositor de danz&oacute;n n&uacute;mero 2.</span><br /><span style=\"color: #ecf0f1;\">Titulada en el 2021 a los 17 a&ntilde;os por la U de G en T&eacute;cnico en M&uacute;sica y actualmente estudiando la licenciatura de m&uacute;sica. Ximena perteneci&oacute; del 2019 al 2022 a la Orquesta sinf&oacute;nica de Tlaquepaque y en la actualidad es violinista activa en la Orquesta Sinf&oacute;nica Juvenil de Zapopan.&nbsp;</span><br /><div><span style=\"color: #ecf0f1;\"><strong>Duración:</strong> 60 minutos.</span><br /><span style=\"color: #ecf0f1;\"><strong>Género:</strong> M&uacute;sica Viol&iacute;n.</span></div><div><span style=\"color: #ecf0f1;\"><strong>No. de personas que viajan:</strong> 3</span></div><div><span style=\"color: #ecf0f1;\"><strong>Video: https://youtube.com/shorts/hb7_ItjQpHs?feature=share</strong></span></div><br /><br /></div><div>&nbsp;</div>', '.', 1, '2023-08-22 06:15:24', '2023-08-22 06:18:16'),
(44, 16, '20231009221951.jpeg', '<div><strong><span style=\"color: #ecf0f1;\">FLASHMOB THRILLER&nbsp;</span></strong></div>', '<div><p class=\"p1\"><span class=\"s1\">Flashmob basado en el ic&oacute;nico cortometraje del reconocido cantante Michael Jackson.</span></p><p class=\"p1\"><span class=\"s1\">Se encuentran en un cementerio, cuando son sorprendidos por una horda de zombies que emergen de sus tumbas.</span></p><p class=\"p1\"><span class=\"s1\">Ellos realizan una coreograf&iacute;a impresionante y cautivadora, creando una experiencia visual y musical inolvidable.</span></p><p class=\"p2\">&nbsp;</p><p class=\"p1\"><span class=\"s1\"><strong>Duraci&oacute;n:</strong> 4 minutos aproximadamente </span></p><p class=\"p1\"><span class=\"s1\"><strong>Viajan</strong>: A partir de 8 personas </span></p><p class=\"p1\"><span class=\"s1\"><strong>Video:</strong> <a href=\"https://youtu.be/QYA6YwrDhsQ\">https://youtu.be/QYA6YwrDhsQ</a></span></p></div>', '.', 1, '2023-10-10 04:19:51', '2023-10-10 04:19:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `breca_espectaculo_imagenes`
--

CREATE TABLE `breca_espectaculo_imagenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `espectaculo` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `breca_espectaculo_imagenes`
--

INSERT INTO `breca_espectaculo_imagenes` (`id`, `espectaculo`, `foto`, `created_at`, `updated_at`) VALUES
(28, 24, '20230517171435.jpeg', '2023-05-17 23:14:35', '2023-05-17 23:14:35'),
(29, 24, '20230517171458.jpeg', '2023-05-17 23:14:58', '2023-05-17 23:14:58'),
(30, 25, '20230517173204.jpg', '2023-05-17 23:32:04', '2023-05-17 23:32:04'),
(41, 28, '20230517204421.jpeg', '2023-05-18 02:44:21', '2023-05-18 02:44:21'),
(42, 29, '20230517205902.jpeg', '2023-05-18 02:59:02', '2023-05-18 02:59:02'),
(52, 32, '20230517232808.jpeg', '2023-05-18 05:28:08', '2023-05-18 05:28:08'),
(56, 26, '20230724182732.jpeg', '2023-07-25 00:27:32', '2023-07-25 00:27:32'),
(60, 27, '20230724183758.jpeg', '2023-07-25 00:37:58', '2023-07-25 00:37:58'),
(63, 30, '20230724184611.jpeg', '2023-07-25 00:46:11', '2023-07-25 00:46:11'),
(66, 35, '20230726175457.jpeg', '2023-07-26 23:54:57', '2023-07-26 23:54:57'),
(72, 33, '20230726181824.jpeg', '2023-07-27 00:18:24', '2023-07-27 00:18:24'),
(77, 42, '20230807171932.jpeg', '2023-08-07 23:19:32', '2023-08-07 23:19:32'),
(78, 43, '20230822002028.jpeg', '2023-08-22 06:20:29', '2023-08-22 06:20:29'),
(79, 43, '20230822002151.jpeg', '2023-08-22 06:21:51', '2023-08-22 06:21:51'),
(80, 43, '20230822002227.jpeg', '2023-08-22 06:22:27', '2023-08-22 06:22:27'),
(82, 24, '20230822002540.jpeg', '2023-08-22 06:25:40', '2023-08-22 06:25:40'),
(83, 24, '20230822002615.jpeg', '2023-08-22 06:26:15', '2023-08-22 06:26:15'),
(84, 24, '20230822002642.jpeg', '2023-08-22 06:26:42', '2023-08-22 06:26:42'),
(85, 25, '20230822002754.jpeg', '2023-08-22 06:27:54', '2023-08-22 06:27:54'),
(87, 25, '20230822002901.jpeg', '2023-08-22 06:29:01', '2023-08-22 06:29:01'),
(88, 25, '20230822002932.jpeg', '2023-08-22 06:29:32', '2023-08-22 06:29:32'),
(89, 26, '20230822003027.jpeg', '2023-08-22 06:30:27', '2023-08-22 06:30:27'),
(90, 26, '20230822003100.jpeg', '2023-08-22 06:31:00', '2023-08-22 06:31:00'),
(91, 26, '20230822003132.jpeg', '2023-08-22 06:31:32', '2023-08-22 06:31:32'),
(92, 26, '20230822003155.jpeg', '2023-08-22 06:31:55', '2023-08-22 06:31:55'),
(93, 27, '20230822201639.jpeg', '2023-08-23 02:16:39', '2023-08-23 02:16:39'),
(94, 27, '20230822201722.jpeg', '2023-08-23 02:17:22', '2023-08-23 02:17:22'),
(95, 27, '20230822201754.jpeg', '2023-08-23 02:17:54', '2023-08-23 02:17:54'),
(96, 27, '20230822201851.jpeg', '2023-08-23 02:18:51', '2023-08-23 02:18:51'),
(97, 28, '20230822202845.jpeg', '2023-08-23 02:28:45', '2023-08-23 02:28:45'),
(98, 28, '20230822202917.jpeg', '2023-08-23 02:29:17', '2023-08-23 02:29:17'),
(99, 28, '20230822202940.jpeg', '2023-08-23 02:29:40', '2023-08-23 02:29:40'),
(100, 28, '20230822203011.jpeg', '2023-08-23 02:30:11', '2023-08-23 02:30:11'),
(101, 29, '20230823045913.jpeg', '2023-08-23 10:59:13', '2023-08-23 10:59:13'),
(102, 29, '20230823045934.jpeg', '2023-08-23 10:59:34', '2023-08-23 10:59:34'),
(103, 29, '20230823050011.jpeg', '2023-08-23 11:00:11', '2023-08-23 11:00:11'),
(104, 29, '20230823050032.jpeg', '2023-08-23 11:00:32', '2023-08-23 11:00:32'),
(106, 30, '20230823050152.jpeg', '2023-08-23 11:01:52', '2023-08-23 11:01:52'),
(107, 30, '20230823050214.jpeg', '2023-08-23 11:02:14', '2023-08-23 11:02:14'),
(108, 30, '20230823050239.jpeg', '2023-08-23 11:02:39', '2023-08-23 11:02:39'),
(109, 32, '20230823050717.jpeg', '2023-08-23 11:07:17', '2023-08-23 11:07:17'),
(110, 32, '20230823050733.jpeg', '2023-08-23 11:07:33', '2023-08-23 11:07:33'),
(111, 32, '20230823050749.jpeg', '2023-08-23 11:07:49', '2023-08-23 11:07:49'),
(112, 32, '20230823050808.jpeg', '2023-08-23 11:08:08', '2023-08-23 11:08:08'),
(113, 32, '20230823050826.jpeg', '2023-08-23 11:08:26', '2023-08-23 11:08:26'),
(114, 33, '20230823182754.jpeg', '2023-08-24 00:27:56', '2023-08-24 00:27:56'),
(115, 33, '20230823182900.jpeg', '2023-08-24 00:29:00', '2023-08-24 00:29:00'),
(116, 35, '20230823182956.jpeg', '2023-08-24 00:29:56', '2023-08-24 00:29:56'),
(117, 35, '20230823183023.jpeg', '2023-08-24 00:30:23', '2023-08-24 00:30:23'),
(118, 35, '20230823183051.jpeg', '2023-08-24 00:30:51', '2023-08-24 00:30:51'),
(119, 42, '20230823183133.jpeg', '2023-08-24 00:31:33', '2023-08-24 00:31:33'),
(121, 42, '20230823183204.jpeg', '2023-08-24 00:32:04', '2023-08-24 00:32:04'),
(122, 42, '20230823183224.jpeg', '2023-08-24 00:32:24', '2023-08-24 00:32:24'),
(123, 44, '20231009222526.jpeg', '2023-10-10 04:25:26', '2023-10-10 04:25:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `breca_servicios`
--

CREATE TABLE `breca_servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `contacto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `breca_servicios`
--

INSERT INTO `breca_servicios` (`id`, `titulo`, `descripcion`, `foto`, `contacto`, `created_at`, `updated_at`) VALUES
(2, 'PRODUCCIÓN EJECUTIVA', '<div style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp;Nos encargamos de ayudarte a establecer los objetivos que desees alcanzar en tu proyecto (Espect&aacute;culos, festivales, ferias, etc.), as&iacute; como definir la ruta cr&iacute;tica a seguir para la producci&oacute;n de la misma. Nos responsabilizaremos de que t&uacute; obra, evento, festival, etc; sea creada en tiempo y forma.</div>', '20230426182030.jpg', '<div>Es un hecho establecido hace demasiado tiempo que un lector se distraer&aacute; con el contenido del texto de un sitio mientras que mira su dise&ntilde;o. El punto de usar Lorem Ipsum es que tiene una distribuci&oacute;n m&aacute;s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu&iacute;, contenido aqu&iacute;\". Estos textos hacen parecerlo un espa&ntilde;ol que se puede lee</div>', '2023-03-28 03:28:09', '2023-06-27 00:26:16'),
(3, 'LOGÍSTICA', '<div style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp;Y c&oacute;mo la producci&oacute;n y la log&iacute;stica van de la mano, somos expertos en el Dise&ntilde;o y coordinaci&oacute;n de log&iacute;stica para festivales, presentaciones y eventos. Haremos que todas las &aacute;reas est&eacute;n enteradas de lo que suceder&aacute; durante el.</div>', '20230426182219.jpg', '<div>.</div>', '2023-03-28 03:28:40', '2023-05-19 04:10:27'),
(4, 'BOOKING', '<div>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp;&iquest;Tienes un proyecto ya hecho listo para ser presentado? &iexcl;Mu&eacute;stranoslo!</p>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp;Contamos con una extensa variedad de espect&aacute;culos de distintas disciplinas para la venta a nivel local y nacional.</p>\r\n</div>\r\n<div>&nbsp;</div>', '20230426182331.jpg', '<div>.</div>', '2023-03-29 23:51:59', '2023-05-19 04:11:17'),
(5, 'TOUR MANAGER', '<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp;Te acompa&ntilde;amos en tu viaje al lugar de la presentaci&oacute;n desde el punto A al punto B, para que t&uacute; solo te encargues de llegar y presentarte, apoy&aacute;ndote en la operaci&oacute;n, ejecuci&oacute;n y organizaci&oacute;n de transportaci&oacute;n interna, vuelos, hospedaje, catering, etc.</p>', '20230426182737.jpg', '<div>.</div>', '2023-03-29 23:53:38', '2023-05-19 04:12:30'),
(6, 'MASTERCLASS y TALLERES', '<div style=\"text-align: justify;\">&nbsp; &nbsp;Creemos que la capacitaci&oacute;n y el aprendizaje constante es la base para el desarrollo humano. Contamos con distintos talleres y masterclass especializados con docentes altamente capacitados y experimentados en el &aacute;rea.&nbsp;</div>', '20230426182929.jpg', '<div>.</div>', '2023-03-29 23:54:18', '2023-05-19 04:13:27'),
(7, 'ARTISTAS', '<div style=\"text-align: justify;\">Conoce a nuestro equipo, quien hace de BRECA Productora una plataforma formal y profesional.</div>', '20230426183307.jpg', '<div>.</div>', '2023-03-29 23:57:45', '2023-05-19 04:13:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusels`
--

CREATE TABLE `carrusels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '666'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusels`
--

INSERT INTO `carrusels` (`id`, `titulo`, `subtitulo`, `image`, `url`, `video`, `orden`) VALUES
(3, NULL, NULL, '0jAcePKvAJNI5EFoIBkK2qwfvUcn9o.jpg', NULL, NULL, 13),
(20, NULL, NULL, 'DDgpC337KkEdhwKWyOeOs38n2UAfDI.jpg', NULL, NULL, 1),
(21, NULL, NULL, 'nxIsKMKwxuYr1VvoQfdvVP3dd4odSO.jpg', NULL, NULL, 11),
(22, NULL, NULL, 'jEJGrG9uL528X1WIc48YDcpKA84wfH.jpg', NULL, NULL, 7),
(23, NULL, NULL, 'FNDudXjjW6ttl7oKiDKHXJMHune8zn.jpg', NULL, NULL, 6),
(26, NULL, NULL, 'BtKIGsTIsfun3dE9J3w2ySQixmMhuq.jpg', NULL, NULL, 12),
(27, NULL, NULL, 'DdhoTTR3XF4X86b2xhq2zjiEOBsIEL.jpg', NULL, NULL, 10),
(28, NULL, NULL, 'LzGPME0sAI8WxnfFlpHvaPV7hC6EHt.jpg', NULL, NULL, 0),
(29, NULL, NULL, '65GySGByw7v10eWxveTEgsnMZ32879.jpg', NULL, NULL, 3),
(30, NULL, NULL, 'A3MyLsvZRd4RB1JI4jcPRJyLfkA95y.jpg', NULL, NULL, 4),
(31, NULL, NULL, 'naUwApZyzCgDCbM72eOUUBSYfx42l3.jpg', NULL, NULL, 2),
(32, NULL, NULL, '2t6FMflHrUtmrSSEIrkUGhd8dt0BLd.jpg', NULL, NULL, 5),
(35, NULL, NULL, 'PXkFO6vRwMfDvJeY4NxHZckAXVarbN.png', NULL, NULL, 0),
(37, NULL, NULL, 'ScZZfJXdbmQ0De67h3gmwwSHWTQm4h.png', NULL, NULL, 6),
(39, NULL, NULL, 'Kbu9Oolrpwjzry7PCytuqQzfqY5bHU.png', NULL, NULL, 1),
(40, NULL, NULL, '4NDnSgSm8ZsLN7DxXAQ6TEtyeVr9k2.png', NULL, NULL, 4),
(41, NULL, NULL, 'aBc4Gn9XOC4vwKxob3vskEo7v6aQlM.png', NULL, NULL, 2),
(42, NULL, NULL, '2REJC23RKVXgHsJRaOiVRSRfgVKbKU.png', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel_marcas`
--

CREATE TABLE `carrusel_marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusel_marcas`
--

INSERT INTO `carrusel_marcas` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(9, '20230426184939.jpg', '2023-04-27 00:49:39', '2023-04-27 00:49:39'),
(10, '20230426184948.jpg', '2023-04-27 00:49:48', '2023-04-27 00:49:48'),
(11, '20230426185002.jpg', '2023-04-27 00:50:02', '2023-04-27 00:50:02'),
(12, '20230426185016.jpg', '2023-04-27 00:50:16', '2023-04-27 00:50:16'),
(13, '20230426185025.jpg', '2023-04-27 00:50:25', '2023-04-27 00:50:25'),
(14, '20230426185036.jpg', '2023-04-27 00:50:36', '2023-04-27 00:50:36'),
(16, '20230916023138.png', '2023-09-16 08:31:38', '2023-09-16 08:31:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `parent`, `activo`, `orden`) VALUES
(1, 'Fianzas', 'fianzas', 0, 1, 666),
(2, 'Seguros', 'seguros', 0, 1, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_detalles`
--

CREATE TABLE `categoria_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_descripcion` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodspag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypalemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitentepass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitentehost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitenteport` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitenteseguridad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envioglobal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iva` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incremento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` text COLLATE utf8mb4_unicode_ci,
  `direccion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `title`, `description`, `prodspag`, `paypalemail`, `destinatario`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `youtube`, `linkedin`, `envio`, `envioglobal`, `iva`, `incremento`, `mapa`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Breca Productora', 'PROMOTORA Y PRODUCTORA ARTÍSTICA', NULL, NULL, 'brecaproductora@gmail.com', 'facturacionbreca@gmail.com', 'administrador@brecaproductora.com', 'sg-$nz2ZDFv@', 'mail.brecaproductora.com', '465', 'ssl', '3311183359', '3311183359', '', 'https://www.facebook.com/brecaproductora/', 'https://www.instagram.com/brecaproductora/', 'https://www.youtube.com/channel/UCt3uPPXoDJOGXeSK8IAHMPg', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.84572216016!2d-103.3837752!3d20.675854700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae6d6d5fd08d%3A0x439d71abb16f0dda!2sSektor!5e0!3m2!1ses-419!2smx!4v1668797393100!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Guadalajara, Jalisco.', NULL, '2023-09-14 00:22:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrecalles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Mexico',
  `favorito` tinyint(1) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `elemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` tinyint(1) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  `seccion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id`, `elemento`, `texto`, `imagen`, `url`, `contenido`, `activo`, `orden`, `seccion`) VALUES
(2, 'Portada', NULL, 'NeokBpwuf8PfZGRJCBOvjhEDWZTkeO.png', NULL, 1, 1, 666, 7),
(4, 'Logo de la empresa', NULL, 'F1iaHjaHYXJq3TpJN7fGUnSNREpMmb.png', NULL, 1, 1, 666, 1),
(5, 'Texto después del logo', '<div>PROMOTORA Y PRODUCTORA ART&Iacute;STICA</div>', 'FI79cYnDbL9FT3Lo0rVGLNHucSHVFA.jpeg', NULL, 1, 1, 666, 1),
(6, 'Imagen grande', NULL, NULL, NULL, 1, 1, 666, 0),
(7, 'Imagen grande', '<div>https://www.youtube.com/watch?v=I-qtgmFiuOg</div>', '', NULL, 1, 1, 666, 1),
(8, 'Titulo', '<div>EL ARTE CAMBIA VIDAS</div>', 'IFmsHyh2eOYriuCs7P8oRRcGFeNr79.png', NULL, 1, 1, 666, 1),
(9, 'Texto', '<div>\"Si las reglas que rigen nuestra realidad fueran menos s&oacute;lidas, el asombro no existiria y el publico lo sabe.</div>\r\n<div>&nbsp;</div>\r\n<div>Decide no pensar en eso, quiere presenciar lo inexplicable, prefiere cuestionar su realidad y es entonces cuado la magia existe.\"</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>', 'fRrUy4qdzh6LsQp2C64FzZf5taUExH.png', NULL, 1, 1, 666, 1),
(10, 'Imágen', NULL, 'h17gRY7gkvRxkicfvjTEC1zrPRbEMa.png', NULL, 1, 1, 666, 1),
(11, 'Imágen', NULL, 'z8xISS61pOsf7PbtEITCZtwMPDhe8a.png', NULL, 1, 1, 666, 1),
(12, 'Titulo', '<div>Hacemos equipo con los mejores</div>', NULL, NULL, 1, 1, 666, 1),
(13, 'Texto', '<div>.</div>', '4pGSD4Y48pNbTv1Jt3yaBGHxxwKpGS.png', NULL, 1, 1, 666, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espectaculos`
--

CREATE TABLE `espectaculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` bigint(20) UNSIGNED NOT NULL,
  `fotoshow` text COLLATE utf8mb4_unicode_ci,
  `tituloshow` text COLLATE utf8mb4_unicode_ci,
  `subtituloshow` text COLLATE utf8mb4_unicode_ci,
  `fotocentro` text COLLATE utf8mb4_unicode_ci,
  `titulocentro` text COLLATE utf8mb4_unicode_ci,
  `subtitulocentro` text COLLATE utf8mb4_unicode_ci,
  `fotolateral` text COLLATE utf8mb4_unicode_ci,
  `titulolateral` text COLLATE utf8mb4_unicode_ci,
  `subtitulolateral` text COLLATE utf8mb4_unicode_ci,
  `descripcionlateral` text COLLATE utf8mb4_unicode_ci,
  `fotoizq` text COLLATE utf8mb4_unicode_ci,
  `fotoder` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `espectaculos`
--

INSERT INTO `espectaculos` (`id`, `categoria`, `fotoshow`, `tituloshow`, `subtituloshow`, `fotocentro`, `titulocentro`, `subtitulocentro`, `fotolateral`, `titulolateral`, `subtitulolateral`, `descripcionlateral`, `fotoizq`, `fotoder`, `created_at`, `updated_at`) VALUES
(12, 3, '20230329153643.png', 'Titulo2', 'Subtitulo2', '20230329153644.png', 'A', 'footer', '20230329153644.png', 'Titulo', 'Subtitulo', 'Breve descripción del organismo/persona que se encarga de la realización de este espectaculo', '20230329153644.png', '20230329153644.png', '2023-03-29 21:36:44', '2023-03-29 21:36:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espectaculo_categorias`
--

CREATE TABLE `espectaculo_categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `espectaculo_categorias`
--

INSERT INTO `espectaculo_categorias` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(3, 'ESPECTÁCULOS', NULL, '2023-05-02 09:13:05'),
(15, 'EVENTOS', '2023-04-26 23:18:38', '2023-05-02 09:13:33'),
(16, 'EXPERIENCIAS', '2023-09-14 00:31:18', '2023-09-14 00:31:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '666',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `faqs`
--

INSERT INTO `faqs` (`id`, `pregunta`, `respuesta`, `orden`, `created_at`, `updated_at`) VALUES
(1, '1', '<p>1</p>', 666, '2023-07-27 01:21:07', '2023-07-27 01:21:07'),
(2, '2', '<p>2</p>', 666, '2023-07-27 01:21:12', '2023-07-27 01:21:12'),
(3, '3', '<p>3</p>', 666, '2023-07-27 01:21:17', '2023-07-27 01:21:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriasubespectaculos`
--

CREATE TABLE `galeriasubespectaculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subespectaculo` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galeriasubespectaculos`
--

INSERT INTO `galeriasubespectaculos` (`id`, `subespectaculo`, `foto`, `created_at`, `updated_at`) VALUES
(22, 10, '20230329153759.png', '2023-03-29 21:37:59', '2023-03-29 21:37:59'),
(23, 10, '20230329153804.png', '2023-03-29 21:38:04', '2023-03-29 21:38:04'),
(24, 10, '20230329153810.png', '2023-03-29 21:38:10', '2023-03-29 21:38:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `master_classes`
--

CREATE TABLE `master_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `contacto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `master_classes`
--

INSERT INTO `master_classes` (`id`, `imagen`, `titulo`, `descripcion`, `contacto`, `created_at`, `updated_at`) VALUES
(5, '20230426180629.jpeg', '<h3 style=\"text-align: center;\"><strong><span style=\"color: #843fa1;\">IMPROVISACI&Oacute;N ESC&Eacute;NICA</span></strong></h3><h3 style=\"text-align: center;\"><strong><span style=\"color: #843fa1;\">EN LA DANZA CONTEMPOR&Aacute;NEA</span></strong></h3>', '<div style=\"text-align: justify;\">&nbsp; Taller multidisciplinario enfocado en entrenar y desarrollar diversas habilidades corporales por medio del lenguaje de la danza contempor&aacute;nea con el objetivo de crear un ejercicio danc&iacute;stico esc&eacute;nico donde la improvisaci&oacute;n sea el eje conductor del mismo.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; La finalidad es de impulsar a explorar la creatividad, tomando como herramienta principal el cuerpo, la voz y la improvisaci&oacute;n. La danza contempor&aacute;nea y el movimiento continuo es el principal motor para la creaci&oacute;n esc&eacute;nica.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp;El taller &ldquo;Danza contempor&aacute;nea e improvisaci&oacute;n esc&eacute;nica&rdquo;, va enfocado a estudiantes, artistas esc&eacute;nicos o personas interesadas por este arte desde adolescentes hasta adultos, con el enfoque de permear el lenguaje danc&iacute;stico, corporal y teatral como medio de expresi&oacute;n.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; Se busca invitar por medio del entrenamiento &nbsp;y diversas din&aacute;micas de grupo con el fin de generar un ambiente ameno y divertido, donde todos puedan participar y crear su lenguaje propio.</div><div style=\"text-align: justify;\">Se busca por medio de la danza y el cuerpo crear diversos paisajes propios.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">A&ntilde;adiendo elementos como:</div><ul><li style=\"text-align: justify;\">El ritmo</li><li style=\"text-align: justify;\">La improvisaci&oacute;n</li><li style=\"text-align: justify;\">Espacio Esc&eacute;nico</li><li style=\"text-align: justify;\">Relaci&oacute;n del cuerpo y e l objeto</li><li style=\"text-align: justify;\">Expresi&oacute;n corporal</li><li style=\"text-align: justify;\">Voz</li></ul>', '<div>.</div>', '2023-04-21 02:25:05', '2023-05-19 04:19:17'),
(9, '20230426181530.jpeg', '<h3 style=\"text-align: center;\"><strong><span style=\"color: #843fa1;\">DRAMATURGIA Y ESCRITURA CIRCENSE</span></strong><br /><br /></h3>', '<div style=\"text-align: justify;\">&nbsp; El taller est&aacute; orientado a artistas de circo con experiencia previa, directores y productores, que quieran adentrarse en la escritura circense. Se ven diferentes herramientas para abordar una idea, ya sea desde una disciplina circense, como un personaje o una po&eacute;tica.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; Como ejercicio se forma a un boceto posible, buscando poner la t&eacute;cnica de circo, al servicio de un \"estar en escena\".&nbsp;</div><div style=\"text-align: justify;\">Como dramaturgas buscamos despertar al artista creador/a Incentivando sus particularidades y su estilo.&nbsp;</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; Reconoceremos los diferentes elementos de una escena. A su vez, qu&eacute; elementos r&iacute;tmicos la componen. Estar&aacute;n invitados a imaginar y a detectar los puntos de cl&iacute;max y puntos de giro dentro de una pieza.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; Ejemplificamos con material presentado por los participantes y/o material audiovisual. Este ejercicio de observaci&oacute;n nos ayudar&aacute; a develar qu&eacute; tipo de escritura se est&aacute; utilizando. Traeremos algunas palabras que pertenecen a la tradici&oacute;n de circo para revisarlas y reescribirlas desde una perspectiva actual y contempor&aacute;nea.</div>', '<div>.</div>', '2023-04-27 00:15:30', '2023-05-19 04:19:42'),
(10, '20230502023123.jpeg', '<h3 style=\"text-align: center;\"><span style=\"color: #843fa1;\"><strong>TALLER MAX</strong></span></h3>', '<div style=\"text-align: justify;\">&nbsp; Es un taller teórico práctico diseñado para aquellas personas que desean aprender a utilizar una herramienta computacional: MAX ó PD creadas específicamente para abarcar un amplio rango de aplicaciones artísticas desde música electrónica hasta instalaciones con medios. Puede controlar sonido, imagen, video, sensores, motores, luz, etc.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; Diseñado para proyectos relacionados con ejecución en vivo y ambientes de instalación interactiva.</div><div style=\"text-align: justify;\"><br />&nbsp; El objetivo general es entender el funcionamiento nuclear de la herramienta y acercar al alumno nuevas posibilidades creativas así como a encontrar una realización lógica de sus ideas o proyectos en el entorno del citado software.</div><div style=\"text-align: justify;\"><br />&nbsp; Como objetivo secundario el participante terminará el taller con una una visión amplia del tipo de aplicaciones que son el fuerte para MAX / PD.</div>', '<div>.</div>', '2023-05-02 08:31:23', '2023-05-19 04:20:05'),
(11, '20230502023911.jpeg', '<h3 style=\"text-align: center;\"><strong><span style=\"color: #843fa1;\">TALLER ESCENOFON&Iacute;A</span></strong></h3>', '<div style=\"text-align: justify;\">&nbsp; Por momentos a manera de guión y mediante uso de referencias en distintos soportes audiovisuales, poesía, textos, entrevistas, etc, intentará acercar al pensamiento e imaginación sonora, generar preguntas relacionadas con el hacer sonido enfocado a la escena.</div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\">&nbsp; Los participantes serán invitados a realizar ejercicios prácticos que se construirán según lo que dicte la marcha del taller. Sonido, tipos de micr&oacute;fono, bocinas, cableado, fijaci&oacute;n sonora, etc, son algunos de los temas que se tocar&aacute;n en este taller. Dirigido a Técnicos y directores escénicos, coreógrafos gestores, productores y estudiantes de artes escénicas.</div>', '<div>.</div>', '2023-05-02 08:39:11', '2023-05-19 04:20:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_163806_create_admins_table', 1),
(5, '2020_10_14_181530_create_configuracions_table', 1),
(6, '2020_12_08_170359_create_carrusels_table', 1),
(7, '2020_12_09_193424_create_politicas_table', 1),
(8, '2020_12_16_000636_create_faqs_table', 1),
(9, '2021_02_02_175759_create_seccions_table', 1),
(10, '2021_02_02_175823_create_elementos_table', 1),
(13, '2021_10_27_064531_create_categorias_table', 2),
(19, '2021_04_01_184932_create_productos_table', 3),
(20, '2021_04_02_200200_create_productos_photos_table', 3),
(24, '2022_07_18_203052_create_vacantes_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `guia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkguia` text COLLATE utf8mb4_unicode_ci,
  `domicilio` bigint(20) UNSIGNED NOT NULL,
  `factura` tinyint(1) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `iva` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `envio` double(9,2) DEFAULT NULL,
  `comprobante` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancelado` tinyint(1) DEFAULT '0',
  `usuario` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `envia_resp` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalles`
--

CREATE TABLE `pedido_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(9,2) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `pedido` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `color` bigint(20) UNSIGNED DEFAULT NULL,
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`id`, `titulo`, `descripcion`, `archivo`, `created_at`, `updated_at`) VALUES
(1, 'aviso de privacidad', '<p>No requiere esta p&aacute;gina</p>', NULL, NULL, '2023-06-26 23:14:51'),
(2, 'metodos de pago', '<p>No requiere esta p&aacute;gina</p>', NULL, NULL, '2023-04-27 20:46:27'),
(3, 'devoluciones', '<p>No requiere esta p&aacute;gina</p>', NULL, NULL, '2023-04-27 20:46:22'),
(4, 'terminos y condiciones', '<p>No requiere esta p&aacute;gina</p>', NULL, NULL, '2023-06-26 23:15:04'),
(5, 'garantias', '<p>No requiere esta p&aacute;gina</p>', NULL, NULL, '2023-06-26 23:14:42'),
(6, 'politicas de envio', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `categoria` int(11) DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `portada`, `pdf`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(19, 'Guardias especializados', '<p>Nuestros guardias de seguridad son producto de un estricto proceso, iniciando con est&aacute;ndares de selecci&oacute;n que supera los marcados por certificaciones internacionales como BASC e ISO, garantizando as&iacute; que los elementos contratados cuenten con las caracter&iacute;sticas &nbsp;necesarias para cubrir las necesidades de todos nuestros clientes.</p>\r\n<p>Para SEKTOR la capacitaci&oacute;n es esencial, por ello todos nuestros guardias de seguridad son capacitados desde el primer d&iacute;a que ingresan, reciben adem&aacute;s, revisiones y actualizaciones constantemente para cumplir siempre con las necesidades m&aacute;s estrictas de cada servicio.</p>\r\n<p>Nuestros elementos son reevaluados constante y peri&oacute;dicamente para verificar que no presenten desviaciones y se mantengan alineados con las pol&iacute;ticas y lineamientos internos establecidos para cada servicio.</p>\r\n<p>Todos nuestros guardias cuentan con soporte por medios tecnol&oacute;gicos, monitoreo dedicado y diversos tipos de controles aplicados, sabemos que cada cliente tiene necesidades espec&iacute;ficas por lo que nuestros especialistas ser&aacute;n de gran ayuda para identificar la mejor manera de proteger el patrimonio de nuestros clientes.</p>', NULL, NULL, NULL, 1, 1, 666, '2022-07-19 23:43:45', '2022-11-17 03:49:09'),
(21, 'Custodias de mercancía', '<p style=\"text-align: justify;\">Pasa SEKTOR custodiar el traslado de tu mercanc&iacute;as significa mucho m&aacute;s que simplemente \"acompa&ntilde;arlas\" durante el trayecto.</p>\r\n<p style=\"text-align: justify;\">Sabemos el valor, no s&oacute;lo econ&oacute;mico, sino estrat&eacute;gico y de oportunidad que tiene cada embarque; teniendo esto en cuenta desarrollamos estrategias de acuerdo a las caracter&iacute;sticas de cada servicio, implementando procesos operativos detallados para mantener la trazabilidad de la mercanc&iacute;a en todo momento, para ello contamos con sistemas tecnol&oacute;gicos de punta para el rastreo y monitoreo detallado de cada embarque.</p>\r\n<p style=\"text-align: justify;\">Mantenemos un monitoreo dedicado de cada custodia para detectar situaciones de riesgo y actuar de manera oportuna ante cada incidencia, manteniendo una constante comunicaci&oacute;n con clientes y autoridades desde nuestra central de monitoreo de &uacute;ltima generaci&oacute;n.</p>', NULL, NULL, NULL, 1, 1, 666, '2022-08-04 20:55:44', '2022-10-21 21:27:39'),
(22, 'Servicio de seguridad moviles', '<div>Nuestro servicio de seguridad m&oacute;vil es una excelente opci&oacute;n para peque&ntilde;os y medianos negocios, en este servicio un guardia de seguridad realiza patrullajes a un n&uacute;mero limitado de clientes, el guardia puede realizar m&uacute;ltiples consignas, desde prevenir el robo, verificar cierre de instalaciones y apagar sistemas de energ&iacute;a.</div>', NULL, NULL, NULL, 1, 1, 666, '2022-08-08 18:49:27', '2022-11-17 00:29:51'),
(23, 'Monitore de alarmas', '<p style=\"text-align: justify;\">Sektor es una empresa seria, comprometida y dedicada a la seguridad integral. Siete a&ntilde;os de experiencia nos respaldan.</p>\r\n<p style=\"text-align: justify;\">Pregunta por nuestros paquetes de monitoreo<br /><strong>Aproveche los beneficios que sektor le ofrece:</strong></p>\r\n<ul>\r\n<li style=\"text-align: justify;\">Contrataci&oacute;n de monitoreo de alarmas SIN plazos forzosos.&nbsp;</li>\r\n<li style=\"text-align: justify;\">Nuestra central de monitoreo se encuentra en <strong>GUADALAJARA</strong></li>\r\n<li style=\"text-align: justify;\">Contamos con la mejor y m&aacute;s avanzada tecnolog&iacute;a.</li>\r\n<li style=\"text-align: justify;\">Contamos con equipo de patrullaje propio.</li>\r\n<li style=\"text-align: justify;\">Ofrecemos equipos de alarma en comodato</li>\r\n<li style=\"text-align: justify;\">Nuestros sistemas de monitoreo trabajan bajo est&aacute;ndares de clase mundial.</li>\r\n</ul>', NULL, NULL, NULL, 1, 1, 666, '2022-08-08 23:51:20', '2022-11-17 00:33:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_photos`
--

CREATE TABLE `productos_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '666'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_photos`
--

INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`) VALUES
(14, 19, NULL, '1vzHMEiCSrMSk9poMBXWxxTZKqVmrC.jpg', 666),
(16, 22, NULL, '8n55vmjIzHKpoWOcUux35afingnqZA.jpg', 666),
(17, 23, NULL, 'QlbB541AxzCEQt3GtQVcTSZHxNNPKR.jpg', 666),
(18, 21, NULL, 'Tmbn4wocnxS6vAFCYSxNqN1oqQY4WS.jpg', 666),
(19, 24, NULL, 'ZeUHxn65A5vq1liG0RIiyQEK9wnK33.jpg', 666),
(21, 25, NULL, 'v7CdsDroB49bSYSdblRHp3BSPmLyxP.jpg', 666),
(33, 19, NULL, 'QvQdPyE4TWADyZSdrbnbhObvNM47a4.jpg', 666),
(34, 19, NULL, 'ZIgHbxUkoMyJyGMYoIXK79dbdbF9Xc.jpg', 666),
(35, 19, NULL, '9BhI8hIA7BxH1YBtxKF5ijfFCPqwGU.jpg', 666),
(37, 21, NULL, 'V9rAxFS5QRUMcrqEYjmOLtiLRhH8JA.jpg', 666),
(38, 21, NULL, 'eD8yaW3whet2nlV2jOU42bo8gDhQgZ.jpg', 666),
(39, 21, NULL, 'WD4Pg42xTwCA6b1BBl3Urs2LlC2b0Q.jpg', 666),
(40, 22, NULL, 'cxGoJDtLDN9opAA1IQl9JrQGuYO9p0.jpg', 666),
(41, 22, NULL, 'v024JOAh6VvceMvasBui6BIS2lHgcK.jpg', 666),
(42, 23, NULL, 'YMy765RMsN2sCvJN9hFl3WFoxlJGZ7.jpg', 666),
(43, 23, NULL, 'gl9mEfOqg7VvjIqyvaE8QRPiejjVyM.jpg', 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_presentacions`
--

CREATE TABLE `producto_presentacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_relacions`
--

CREATE TABLE `producto_relacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `otroProducto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_relacions`
--

INSERT INTO `producto_relacions` (`id`, `producto`, `otroProducto`) VALUES
(1, 24, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_sizes`
--

CREATE TABLE `producto_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_variantes`
--

CREATE TABLE `producto_variantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `presentacion` bigint(20) UNSIGNED NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  `tipo_envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `largo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ancho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id2` int(11) NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id`, `seccion`, `portada`, `slug`, `id2`, `icon`) VALUES
(1, 'inicio', NULL, 'index', 1, 'fas fa-home'),
(2, 'servicios', NULL, 'services', 2, NULL),
(3, 'soluciones', NULL, 'solutios', 3, NULL),
(4, 'vacantes', NULL, 'vacant', 4, NULL),
(5, 'nosotros', NULL, 'about-us', 5, NULL),
(6, 'contacto', NULL, 'contact', 6, NULL),
(7, 'artistas', NULL, 'artists', 10, 'fas fa-theater-masks'),
(8, 'espectaculos', NULL, 'shows', 11, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subespectaculos`
--

CREATE TABLE `subespectaculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `espectaculo` bigint(20) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci,
  `categoriapadre` text COLLATE utf8mb4_unicode_ci,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `contactodetalle` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subespectaculos`
--

INSERT INTO `subespectaculos` (`id`, `espectaculo`, `titulo`, `categoriapadre`, `descripcion`, `foto`, `contactodetalle`, `created_at`, `updated_at`) VALUES
(10, 12, 'Apartado1', '3', '<div><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div>', '20230329153722.png', '<div><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div>', '2023-03-29 21:37:22', '2023-03-29 21:37:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT '0',
  `puntos` int(11) NOT NULL,
  `distr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referido_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribuidor` tinyint(1) NOT NULL DEFAULT '0',
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `email`, `email_verified_at`, `telefono`, `facebook`, `empresa`, `avatar`, `rfc`, `nivel`, `puntos`, `distr_code`, `referido_by`, `distribuidor`, `profile`, `activo`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yahir', 'lopez', '', 'yahir@wozial.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', NULL, 0, NULL, 1, NULL, '$2y$10$ixFvI1ajnMzpjT8EhK0KsOzC/I8X5prS5vUZLKCsh2eOf7zllQPim', NULL, '2022-02-28 18:49:39', '2022-02-28 23:10:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oferta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requisitos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacantesdisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '666',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`id`, `portada`, `titulo`, `subtitulo`, `oferta`, `requisitos`, `vacantesdisp`, `salario`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'zlidnodXw0kt1bD9KLmjVE4uyZGl9d.jpg', 'Guardia de Seguridad', 'Excelente oportunidad', '<ul>\r\n<li>TURNOS DE 8HRS</li>\r\n<li>TRANSPORTE Y COMEDOR</li>\r\n<li>PAGO QUINCENAL BANORTE</li>\r\n<li>UNIFORMES SIN COSTO</li>\r\n<li>SEGURO SOCIAL DESDE EL PRIMER DIA</li>\r\n<li>PRESTACIONES DE LEY</li>\r\n</ul>', '20 a 55 años; Secundaria terminada; Disponibilidad de horario; Documentación básica', '5', '$8,000 a $9,500', 0, 1, 666, NULL, '2022-11-17 23:13:41'),
(2, 'vCxiroFkU4gNJrjoVNoY2nRkfdZmIN.jpg', 'Custodio Carretero', 'Sueldo base mas comisiones', '<div>\r\n<p><strong>PAGO: SUELDO BASE MAS COMISIONES POR KM. BANORTE.</strong><strong>&nbsp;<br /></strong><strong>PRESTACIONES DE LEY </strong></p>\r\n</div>', '24 a 45 años; Secundaria o preparatoria terminada; Conocimiento en carreteras federales; Licencia de chofer vigente; Manejar STD ; Cartilla o Pre cartilla; Disponibilidad de horario; Estable', '5', 'Base mas comisiones', 0, 1, 666, '2022-07-21 00:04:40', '2022-10-21 21:49:28'),
(4, 'xtuLYDKWRo8Hgq0wBohEV0IyEhN2e6.jpg', 'Monitoristas', '$9000 - $10000000 libres', '<div>\r\n<p><strong>PAGO QUINCENAL NOMINA BANORTE<br /></strong><strong>ESTABILIDAD LABORAL.<br /></strong><strong>PRESTACIONES DE LEY<br /></strong><strong>$9,000 MENSUAL</strong></p>\r\n</div>', '24 a 45 años; Preparatoria terminada; Disponibilidad de horarias; Experiencia CCTV y/o GPS; Atención al cliente; Estable', '5', '$9,000', 0, 1, 666, '2022-07-21 00:06:48', '2022-10-21 21:50:13'),
(5, 'byftULI9aK8jZqwU2p8fqjvpFF9r0u.jpg', 'Técnico Instalador', '$9000 - $10000000 libres', '<div>\r\n<p><strong>*BASE MAS COMISIONES </strong></p>\r\n<p><strong>*PAGO QUINCENAL NOMINA BANORTE</strong></p>\r\n<p><strong>*PRESTACIONES DE LEY</strong></p>\r\n<p><strong>*CONOCIMIENTO DE LA CIUDAD </strong></p>\r\n<p><strong>*LIC. DE CHOFER VIGENTE, MANEJAR STD</strong></p>\r\n</div>', '24 a 45 años; Preparatoria y/o carrera técnica  en electrónica y/o a fin; Experiencia comprobable; Manejo de herramientas manuales; Manejo de computadora', '5', 'Sueldo base más comisiones', 0, 1, 666, '2022-07-21 00:08:12', '2022-10-21 21:53:57'),
(6, 'x8DstmATXRfYZIFzSJZjYNmA3JeQOy.jpg', 'Supervisor de guardias', 'Sueldo atractivo', '<div>\r\n<p><strong>SUELDO COMPETITIVO<br /></strong><strong>PAGO QUINCENAL NOMINA BANORTE<br /></strong><strong>PRESTACIONES DE LEY<br /></strong><strong>BONOS POR DESEMPE&Ntilde;O</strong></p>\r\n</div>', '25 a 48 años; Preparatoria terminada; Disponibilidad de horario; Paquete office; Licencia de chofer vigente; Manejo de STD; Cursos básicos de seguridad privada; Experiencia en manejo de personal', '5', 'Sueldo atractivo', 0, 1, 666, '2022-08-08 18:55:52', '2022-10-21 21:54:33'),
(9, 'JRtZYCWEpzphBCdtnpYGKUmqfV3bQp.jpg', 'Asesor Comercial', 'Excelente esquema de comisiones', '<div>turno de 8 Horas</div>\r\n<div>Comisiones por ventas</div>\r\n<div>&nbsp;</div>', 'Excelente presentación; Pro activo; Vehículo Propio', '3', '$8000 a $20000', 0, 0, 666, '2022-11-17 23:06:01', '2022-11-17 23:06:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `artista_galerias`
--
ALTER TABLE `artista_galerias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artista_galerias_artista_foreign` (`artista`);

--
-- Indices de la tabla `breca_espectaculos`
--
ALTER TABLE `breca_espectaculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `breca_espectaculo_imagenes`
--
ALTER TABLE `breca_espectaculo_imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `breca_espectaculo_imagenes_espectaculo_foreign` (`espectaculo`);

--
-- Indices de la tabla `breca_servicios`
--
ALTER TABLE `breca_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrusels`
--
ALTER TABLE `carrusels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrusel_marcas`
--
ALTER TABLE `carrusel_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_detalles`
--
ALTER TABLE `categoria_detalles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domicilios_user_foreign` (`user`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `elementos_seccion_foreign` (`seccion`);

--
-- Indices de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `espectaculos_categoria_foreign` (`categoria`);

--
-- Indices de la tabla `espectaculo_categorias`
--
ALTER TABLE `espectaculo_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeriasubespectaculos`
--
ALTER TABLE `galeriasubespectaculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrusel_subespectaculos_subespectaculo_foreign` (`subespectaculo`);

--
-- Indices de la tabla `master_classes`
--
ALTER TABLE `master_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `politicas`
--
ALTER TABLE `politicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_relacions`
--
ALTER TABLE `producto_relacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccions`
--
ALTER TABLE `seccions`
  ADD PRIMARY KEY (`id2`);

--
-- Indices de la tabla `subespectaculos`
--
ALTER TABLE `subespectaculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subespectaculos_espectaculo_foreign` (`espectaculo`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `artista_galerias`
--
ALTER TABLE `artista_galerias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `breca_espectaculos`
--
ALTER TABLE `breca_espectaculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `breca_espectaculo_imagenes`
--
ALTER TABLE `breca_espectaculo_imagenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `breca_servicios`
--
ALTER TABLE `breca_servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `carrusel_marcas`
--
ALTER TABLE `carrusel_marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `categoria_detalles`
--
ALTER TABLE `categoria_detalles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `espectaculo_categorias`
--
ALTER TABLE `espectaculo_categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `galeriasubespectaculos`
--
ALTER TABLE `galeriasubespectaculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `master_classes`
--
ALTER TABLE `master_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `politicas`
--
ALTER TABLE `politicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `producto_relacions`
--
ALTER TABLE `producto_relacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seccions`
--
ALTER TABLE `seccions`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `subespectaculos`
--
ALTER TABLE `subespectaculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artista_galerias`
--
ALTER TABLE `artista_galerias`
  ADD CONSTRAINT `artista_galerias_artista_foreign` FOREIGN KEY (`artista`) REFERENCES `artistas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `breca_espectaculo_imagenes`
--
ALTER TABLE `breca_espectaculo_imagenes`
  ADD CONSTRAINT `breca_espectaculo_imagenes_espectaculo_foreign` FOREIGN KEY (`espectaculo`) REFERENCES `breca_espectaculos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  ADD CONSTRAINT `espectaculos_categoria_foreign` FOREIGN KEY (`categoria`) REFERENCES `espectaculo_categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `galeriasubespectaculos`
--
ALTER TABLE `galeriasubespectaculos`
  ADD CONSTRAINT `carrusel_subespectaculos_subespectaculo_foreign` FOREIGN KEY (`subespectaculo`) REFERENCES `subespectaculos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subespectaculos`
--
ALTER TABLE `subespectaculos`
  ADD CONSTRAINT `subespectaculos_espectaculo_foreign` FOREIGN KEY (`espectaculo`) REFERENCES `espectaculos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
