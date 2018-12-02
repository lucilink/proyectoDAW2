<?php
/**
 * File  index.php
 * @author Lucía Rodríguez Álvarez.
 *
 * Fichero que carga los controladores y las vistas de la aplicación
 * Fecha última revisión 07-10-2018
 */

require_once "config/configDB.php";
require_once "config/config.php";
require_once "model/usuario.php";
require_once "model/mascota.php";
//require_once "model/mascotas.php";
require_once "core/validacion.php";

$controladorActual=$controladores["login"];//Establecemos el controlador que va a ser el del inicio de la aplicación.

/**
 * Si se ha definido la página, estableceremos el controlador al que sea pasado por la página,
 * de lo contrario cargaremos el del mantenimiento, que es controlador incial.
 */
//$controlador=$controladores['inicio'];
$error="";
session_start();
/**
 * En el caso de que no haya sesión, comprobaremos si está definida la página, y que página vamos a abrir para
 * realizar excepciones, ya que hay páginas que no necesitan una sesión.
 */
if(!isset($_SESSION['usuario'])){//Comprobamos que está la sesión
     if(!isset($_GET['pagina'])){//Comprobamos que hay página
         include_once $controladores['login'];//Si no hay sesión ni página, cargaremos el login
     } else if($_GET['pagina']=='registrar'){
         include_once $controladores['registrar'];//Cargamos la página de inicio, que no requiere de sesión
     }    
}else{
    /**
     * Si hay sesión y página, cargaremos el controlador de dicha página,
     * de lo contrario cargaremos el controlador de inicio.
     */
    if(isset($_GET['pagina'])){
        include_once $controladores[$_GET['pagina']];
    }else{
        include_once $controladores['mtoMascotas'];
    }
}
?>