<?php
$correcto=true;
$mascota= Mascota::buscarMascotaPorCodigo($_GET['Mascota']);

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}else{
    if(isset($_POST["no"])){
        header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
    }
    if(isset($_POST["si"])){
         $mensajeError["errorNombre"]= validacion::comprobarAlfabetico($_POST['nombre'], 255, 2, 1);
        $mensajeError["errorDescripcion"]= validacion::comprobarAlfabetico($_POST['descripcion'], 255, 2, 1);
        $mensajeError["errorEdad"]= validacion::comprobarEntero($_POST['edad'], 1);
        $mensajeError["errorSexo"]= validacion::comprobarAlfabetico($_POST['sexo'], 8, 1, 1);
        $mensajeError["errorVacunado"]= validacion::comprobarAlfabetico($_POST['vacunado'], 2, 1, 1);
        $mensajeError["errorMicrochip"]= validacion::comprobarAlfabetico($_POST['microchip'], 2, 1, 1);
        $mensajeError["errorEsterilizado"]= validacion::comprobarAlfabetico($_POST['esterilizado'], 2, 1, 1);
        $mensajeError["errorTipo"]= validacion::comprobarAlfabetico($_POST['tipo'], 25, 1, 1);

        foreach ($mensajeError as $valor){ 
            if ($valor!=null){ 
                $correcto=false; 
            }
        }
    }
    
    if(isset($_POST["si"]) && $correcto){
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $edad=$_POST['edad'];
        $sexo=$_POST['sexo'];
        $vacunado=$_POST['vacunado'];
        $microchip=$_POST['microchip'];
        $esterilizado=$_POST['esterilizado'];
        $tipo=$_POST['tipo'];
        $codMascota=$_POST['codMascota'];
        if(Mascota::editarDatosMascota($nombre,$descripcion,$edad,$sexo,$vacunado,$microchip,$esterilizado,$tipo,$codMascota)){
            header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
        }else{
            $mensajeError["errorModificar"]="Ha habido un error";
            $_GET["pagina"] = "editarMascota";
            include_once "view/layout.php";
        }
    }else{
        $_GET["pagina"] = "editarMascota";
        include_once "view/layout.php";
    }
    
}