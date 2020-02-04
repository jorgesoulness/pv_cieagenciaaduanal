<?php
ini_set('display_errors', '0');
switch($_SERVER['SERVER_NAME']){
    case "local.cie": //Cambiar path (Local).
        $rutaProyecto = "/";
        break;
    case "localhost:7894": //Cambiar path (URL DEV).
        $rutaProyecto = "/";
        break;
    case "www.miraclemike.mx": //Cambiar path (Producción).
        $rutaProyecto = "/";
        break;
    default:
        $rutaProyecto = "/";
}

$srvr = "https://".$_SERVER['HTTP_HOST'].$rutaProyecto;
$url = $srvr;
define("CARPETA", $url);

//Ruta path
function get_template_directory_uri($slash = '') {
    $protocolDir = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
    $rutaProyecto = dirname($_SERVER['PHP_SELF']);
    $srvr = $protocolDir.$_SERVER['HTTP_HOST'].$rutaProyecto.'/';
    $url = $srvr;
    $string = implode("",explode("\\",$url));
    return stripslashes(trim($string));
    // return $url.$slash;
}

//Títulos Secciones
 function TituloSecciones() {
  $protocolTitle = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
	$srvrPath = $protocolTitle.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$archivo = basename($srvrPath).'.php';
	$urlTitle = $archivo;
  if(isset($_GET['sec']) && $_GET['sec'] != ''){
    $arrayUrls = array(
      //Páginas Títulos
      'inicio.php'=>'Inicio',
      'unete.php'=>'Únete Ahora',
      'pasos.php'=>'Pasos',
      'aviso-de-provacidad.php'=>'Aviso de Privacidad',
      'preguntas-frecuentes.php'=>'Pasos',
      //Internas Títulos
      // 'pasajeros.php'=>'Pasajeros',
      // 'carga.php'=>'Carga',
      // 'contacto.php'=>'Contacto',
    );
    return $arrayUrls[$urlTitle];
  } else {
    return 'Inicio';
  }
}

function classPage() {
  $protocolCla = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
	$srvrPath = $protocolCla."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$archivo = basename($srvrPath);
  $urlTitle = $archivo;
  if(isset($_GET['sec']) && $_GET['sec'] != ''){
    return 'page-'.$urlTitle;
  } else {
    return 'page-inicio';
  }
}

//URL sitio
function site_url($slash = '') {
  $protocolSite = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
  $srvrSite = $protocolSite.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
  $sitio = $srvrSite;
  $string = implode("",explode("\\",$sitio));
  return stripslashes(trim($string));
  // return $sitio.$slash;
}

function get_site_url() {
  $protocolGet = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
  $url_actual = $protocolGet.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
  $string = implode("",explode("\\",$url_actual));
  return stripslashes(trim($string));
  // return $url_actual;
}

?>