<?php
$entradaOk=true;

if(isset($_POST['enviar'])){ 
    $mensajeError["errorCodMascota"]= validacion::comprobarAlfaNumerico($_POST['codMascota'], 4, 3, 1);
    $mensajeError["errorNombre"]= validacion::comprobarAlfabetico($_POST['nombre'], 255, 2, 1);
    $mensajeError["errorDescripcion"]= validacion::comprobarAlfabetico($_POST['descripcion'], 255, 2, 1);
    $mensajeError["errorEdad"]= validacion::comprobarEntero($_POST['edad'], 1);
    $mensajeError["errorSexo"]= validacion::comprobarAlfabetico($_POST['sexo'], 8, 1, 1);
    $mensajeError["errorVacunado"]= validacion::comprobarAlfabetico($_POST['vacunado'], 2, 1, 1);
    $mensajeError["errorMicrochip"]= validacion::comprobarAlfabetico($_POST['microchip'], 2, 1, 1);
    $mensajeError["errorEsterilizado"]= validacion::comprobarAlfabetico($_POST['esterilizado'], 2, 1, 1);
    $mensajeError["errorTipo"]= validacion::comprobarAlfabetico($_POST['tipo'], 25, 1, 1);
    if(!$_FILES['imagen']['tmp_name']){
        $mensajeError["errorImagen"]="Sube una imagen";
    }
  
    if(Mascota::comprobarExisteMascota($_POST['codMascota'])){
        $mensajeError["errorMascotaRepetida"]="El usuario ya existe";
    }

    foreach ($mensajeError as $valor){ 
        if ($valor!=null){ 
            $entradaOk=false; 
        }
    }
}

if (isset($_POST['enviar']) && $entradaOk){  
    

        $codMascota=$_POST['codMascota']; 
        $nombre=$_POST['nombre'];
        $imagen=$_FILES['imagen']['tmp_name'];
        $descripcion=$_POST['descripcion'];
        $edad=$_POST['edad'];
        $sexo=$_POST['sexo'];
        $vacunado=$_POST['vacunado'];
        $microchip=$_POST['microchip'];
        $esterilizado=$_POST['esterilizado'];
        $tipo=$_POST['tipo'];
        $fechallegada=date('Y-m-d');

        $imgContenido = addslashes(file_get_contents($imagen));

        $nuevaMascota= Mascota::altaMascota($codMascota, $nombre, $imgContenido,$descripcion, $edad,$sexo, $vacunado, $microchip, $esterilizado, $tipo, $fechallegada);
    

        if (!is_null($nuevaMascota)){
            header("Location: index.php?pagina=mtoMascotas"); 
        }else{ 
            $mensajeError['errorNuevaMascota'] = "No se ha podido añadir la mascota";
        } 
    
}

if (isset($_POST['volver'])){ 
    header("Location: index.php"); 
}else{
    require_once 'view/layout.php';
}
$_GET["pagina"] = "nuevaMascota";
include_once "view/layout.php";

?>