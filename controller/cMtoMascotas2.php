<?php

$mensajeError;
$cadenaBuscar;
$correcto = true;
$mascotas = '';
$error = false;

$cantidasMascotas = "";
$numeroPaginas = "";
$paginaActual = "";


require_once 'model/usuario.php';
if(isset($_POST['salir'])){  
        unset($_SESSION['usuario']);  
        session_destroy();
        header("Location: index.php"); 
}
    
if(!isset($_GET['numeroPagina'])){
    $_GET['numeroPagina'] = 1;
}
if (!isset($_SESSION['usuario'])) { 
    header("Location: index.php"); 
} else{
    if (isset($_POST['buscar'])){
        $mensajeError["errorNombreMascota"]= validacion::comprobarAlfaNumerico($_POST['Tipo'], 255, 0, 0);
        foreach ($mensajeError as &$valor){
            if ($valor!=null){
                $correcto=false;
            }
        }
        if($correcto){
            $_SESSION['criterioBusqueda'] = $_POST['Tipo'];
            $_GET['numeroPagina'] = 1;
            $mascotas= Mascota::buscarMascotaTipo($_SESSION['criterioBusqueda'], $_GET['numeroPagina'], REGISTROSPAGINA);
            $cantidasMascotas = Mascota::contarMascotaTipo($_POST['Tipo']);
            $numeroPaginas = ceil($cantidasMascotas/REGISTROSPAGINA);
            
           
        }
    }else{
        if(!isset($_SESSION['criterioBusqueda'])){
            $cadenaBuscar='';
            
        }else{
            $cadenaBuscar=$_SESSION['criterioBusqueda'];
        }
        $mascotas = Mascota::buscarMascotaTipo($cadenaBuscar, $_GET['numeroPagina'], REGISTROSPAGINA);
        $cantidasMascotas= Mascota::contarMascotaTipo($cadenaBuscar);
        $numeroPaginas = ceil($cantidasMascotas/REGISTROSPAGINA);
        
    }

   
    $_GET["pagina"]="mtoMascotas2";
    require_once 'view/layout.php';
}

?>
