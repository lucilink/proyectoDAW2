<?php
/**
 * File cEditarPerfil.php
 * @author Lucía Rodríguez Álvarez
 * Fecha ultima revision 03-09-2018
 */

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");        
}else{
    if (isset($_POST['volver'])) {
         header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
    }
    
    $entradaOk=true;
    if (isset($_POST['enviar'])){ 
        $mensajeError["errorPassword"]= validacion::comprobarAlfaNumerico($_POST['password'], 255, 4, 0); 
        $mensajeError["errorNombre"]= validacion::comprobarAlfabetico($_POST['nombre'], 25, 3, 1);
        $mensajeError["errorPrimerApellido"]= validacion::comprobarAlfabetico($_POST['apellido1'], 50, 3, 1);
        $mensajeError["errorSegundoApellido"]= validacion::comprobarAlfabetico($_POST['apellido2'], 50, 3, 1);
        $mensajeError["errorDNI"]= validacion::validarDNI($_POST['DNI']);
        $mensajeError["errorFNacimiento"]= validacion::validarFechaNacimiento($_POST['fNacimiento'], 1);
        $mensajeError["errorEmail"]= validacion::validarEmail($_POST['email'], 255, 10, 1);
        $mensajeError["errorTelefono"]= validacion::validarNumeroTelefono($_POST['telefono'],9,1);
        $mensajeError["errorDireccion"]= validacion::comprobarAlfaNumerico($_POST['direccion'],255,1,1);
        if ($_POST['password']!=$_POST['repPassword']){ 
            $mensajeError["errorPasswordNoIgual"]="Las contraseñas tienen que ser iguales!";
        }

        foreach ($mensajeError as &$valor){                     
            if ($valor!=null){ 
                $entradaOk=false; 
            } 
        }
    }

    if (isset($_POST['enviar']) && $entradaOk==true){  
        if(!empty($_POST['password'])){ 
            $password=hash('sha256',$_POST['password']); 
        } 
        $nombre=$_POST['nombre'];
        $apellido1=$_POST['apellido1'];
        $apellido2=$_POST['apellido2'];
        $dni=$_POST['DNI'];
        $fNacimiento=$_POST['fNacimiento'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $direccion=$_POST['direccion'];

        if( $_SESSION['usuario']->editarUsuario($password,$nombre,$apellido1,$apellido2,$dni,$fNacimiento,$telefono,$email,$direccion)){ 
            $_SESSION['usuario']->setNombre($nombre);
            $_SESSION['usuario']->setApellido1($apellido1);
            $_SESSION['usuario']->setApellido2($apellido2);
            $_SESSION['usuario']->setDni($dni);
            $_SESSION['usuario']->setFNacimiento($fNacimiento);
            $_SESSION['usuario']->setTelefono($telefono);
            $_SESSION['usuario']->setEmail($email);
            $_SESSION['usuario']->setDireccion($direccion);
            header('Location: index.php');     
        }else{ //si no se ha podido editar
            echo "Error al editar el Perfil";  //mostramos el error
            $_GET["pagina"]="editarPerfil"; 
            include_once 'view/layout.php';
        } 

    }else{   
        $_GET["pagina"]="editarPerfil"; 
        include_once 'view/layout.php';
    }

} 