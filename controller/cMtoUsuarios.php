<?php

/**
 * File cMtoUsuarios.php
 * @author Lucía Rodríguez Álvarez
 * Fecha ultima revision 30-08-2018
 */

$mensajeError;
$cadenaBuscar;
$correcto = true;
$usuarios = '';
$error = false;

$cantidadUsuarios = "";
$numeroPaginas = "";
$paginaActual = "";

    
if(!isset($_GET['numeroPagina'])){
    $_GET['numeroPagina'] = 1;
}
if (!isset($_SESSION['usuario'])) { 
    header("Location: index.php"); 
} else{
    if (isset($_POST['buscar'])){
        $mensajeError["errorNombreUsuario"]= validacion::comprobarAlfaNumerico($_POST['Nombre'], 255, 0, 0);
        foreach ($mensajeError as &$valor){
            if ($valor!=null){
                $correcto=false;
            }
        }
        if($correcto){
            $_SESSION['criterioBusqueda'] = $_POST['Nombre'];
            $_GET['numeroPagina'] = 1;
            $usuarios = Usuario::buscarUsuarioNombre($_SESSION['criterioBusqueda'], $_GET['numeroPagina'],REGISTROSPAGINA);
            $cantidadUsuarios = Usuario::contarUsuariosNombre($_POST['Nombre']);
            $numeroPaginas = ceil($cantidadUsuarios/REGISTROSPAGINA);
        }
    }else{
        if(!isset($_SESSION['criterioBusqueda'])){
            $cadenaBuscar='';
        }else{
            $cadenaBuscar=$_SESSION['criterioBusqueda'];
        }
        $usuarios =  Usuario::buscarUsuarioNombre($cadenaBuscar, $_GET['numeroPagina'],REGISTROSPAGINA); 
        $cantidadUsuarios = Usuario::contarUsuariosNombre($cadenaBuscar);
        $numeroPaginas = ceil($cantidadUsuarios/REGISTROSPAGINA);
    }

   
    $_GET["pagina"]="mtoUsuarios";
    require_once 'view/layout.php';
}

?>
