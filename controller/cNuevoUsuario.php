<?php
$entradaOk=true;

if(isset($_POST['enviar'])){ 
    $mensajeError["errorCodUsuario"]= validacion::comprobarAlfabetico($_POST['codUsuario'], 10, 1, 1);
    $mensajeError["errorPassword"]= validacion::comprobarAlfaNumerico($_POST['password'], 255, 4, 1);
    $mensajeError["errorNombre"]= validacion::comprobarAlfabetico($_POST['nombre'], 25, 3, 1);
    $mensajeError["errorPrimerApellido"]= validacion::comprobarAlfabetico($_POST['apellido1'], 50, 3, 1);
    $mensajeError["errorSegundoApellido"]= validacion::comprobarAlfabetico($_POST['apellido2'], 50, 3, 1);
    $mensajeError["errorDNI"]= validacion::validarDNI($_POST['DNI'],9,8,1);
    $mensajeError["errorFNacimiento"]= validacion::validarFechaNacimiento($_POST['fNacimiento'], 1);
    $mensajeError["errorEmail"]= validacion::validarEmail($_POST['email'], 255, 10, 1);
    $mensajeError["errorTelefono"]= validacion::validarNumeroTelefono($_POST['telefono'],9,8,1);
    $mensajeError["errorDireccion"]= validacion::comprobarAlfaNumerico($_POST['direccion'],255,1,1);
    
    if ($_POST['password']!=$_POST['repPassword']){ 
        $mensajeError["errorPasswordNoIgual"]="Las contraseñas tienen que ser iguales!";
    }
    if(Usuario::comprobarExisteUsuario($_POST['codUsuario'])){
        $mensajeError["errorUsuarioRepetido"]="El usuario ya existe";
    }
    foreach ($mensajeError as $valor){ 
        if ($valor!=null){ 
            $entradaOk=false; 
        }
    }
}

if (isset($_POST['enviar']) && $entradaOk){  
    $codUsuario=$_POST['codUsuario']; 
    $password=hash('sha256',$_POST['password']);
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
     $dni=$_POST['DNI'];
     $fNacimiento=$_POST['fNacimiento'];
     $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    
    $usuario= Usuario::registrarUsuario($codUsuario, $password,$nombre,$apellido1,$apellido2,$dni,$fNacimiento,$telefono,$email,$direccion);
    
   
    if (is_null($usuario)){
        header("Location: index.php?pagina=inicio"); 
    }else{ 
        $_SESSION['usuario']=$usuario;
        header("Location: index.php");
    } 
}

if (isset($_POST['volver'])){ 
    header("Location: index.php"); 
}else{
    require_once 'view/layout.php';
}
$_GET["pagina"] = "registrar";
include_once "view/layout.php";

?>