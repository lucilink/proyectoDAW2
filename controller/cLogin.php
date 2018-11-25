<?php

/**
 * File cLogin.php
 * @author Lucía Rodríguez Álvarez
 * Fecha ultima revision 30-08-2018
 */

$entradaOk=true;
$error="";
echo "aqui";
if(isset($_POST['enviar'])){ 
    $mensajeError["errorCodUsuario"]= validacion::comprobarAlfabetico($_POST['CodUsuario'], 10, 1, 1);
    $mensajeError["errorPassword"]= validacion::comprobarAlfaNumerico($_POST['Password'], 255, 4, 1); 

    foreach ($mensajeError as &$valor){ 
        if ($valor!=null){ 
            $entradaOk=false;
        }
    }
   
}
if (isset($_POST['enviar']) && $entradaOk==true){ 
    $codUsuario = $_POST['CodUsuario'];
    $password=$_POST['Password'];
    $usuario= Usuario::validarUsuario($codUsuario, $password);
    
    if(is_null($usuario)){ 
        $error="usuario o contraseña incorrectos";
        $_GET['pagina']='login';
        require_once 'view/layout.php';      
    } else{
        $_SESSION['usuario']=$usuario;  
        header("location:index.php");
        //header("Location: index.php?pagina=inicio");
    }

}else{
$_GET['pagina']='login';
require_once('view/layout.php');
}
?>
