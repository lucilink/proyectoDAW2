<?php

/**
 * File cEliminarUsuario.php
 * @author Lucía Rodríguez Álvarez
 * Fecha ultima revision 01-12-2018
 */

$error="";
if(!isset($_SESSION['usuario'])){//Comprobamos que si no existe la sesion se redirige al index.php.  
    header("Location: index.php");        
}else{
    
    if (isset($_POST['volver'])) {
         header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
    }
    
    if(isset($_POST['enviar'])){
        if($_POST['enviar']=="Aceptar"){
            if(!$_SESSION['usuario']->eliminarUsuario()){
                unset($_SESSION['usuario']);  
                session_destroy();     
                header('Location: index.php');   
            }else{
                $error="No se ha podido eliminar el perfil";
                $_GET['pagina']="eliminarCuenta";
                include_once 'view/layout.php';
            }
            
        }else{
            header("Location: index.php?pagina=inicio"); 
        }
    }else{
        
    }
    $_GET["pagina"]="eliminarCuenta"; 
    include_once 'view/layout.php';
}