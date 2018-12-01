<?php
/**
 * File cEditarPerfil.php
 * @author Lucía Rodríguez Álvarez
 * Fecha ultima revision 03-09-2018
 */
    $entradaOk=true;

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");        
}else{
    
    $mascota= Mascota::buscarMascotaPorCodigo($_GET['Mascota']);
    
    if (isset($_POST['enviar'])){ 
        $mensajeError["errorNombre"]= validacion::comprobarAlfabetico($_POST['nombre'], 255, 2, 1);
        $mensajeError["errorEdad"]= validacion::comprobarEntero($_POST['edad'], 1);
       /* $mensajeError["errorVacunado"]= validacion::comprobarAlfabetico($_POST['vacunado'], 2, 1, 1);
        $mensajeError["errorMicrochip"]= validacion::comprobarAlfabetico($_POST['microchip'], 2, 1, 1);
        $mensajeError["errorEsterilizado"]= validacion::comprobarAlfabetico($_POST['esterilizado'], 2, 1, 1);
        $mensajeError["errorTipo"]= validacion::comprobarAlfabetico($_POST['tipo'], 25, 1, 1);*/

        foreach ($mensajeError as &$valor){                     
            if ($valor!=null){ 
                $entradaOk=false; 
            } 
        }
    }

    if (isset($_POST['enviar']) && $entradaOk){  
        if(Mascota::editarDatosMascota($_POST['nombre'],$_POST['edad'],$_POST['codMascota'])){
            header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mtoMascotas');   
        }else{ //si no se ha podido editar
            echo "Error al editar los datos de la mascota";  //mostramos el error
            $_GET["pagina"]="editarMascota"; 
            include_once 'view/layout.php';
        } 

    }else{   
        echo "error";
        $_GET["pagina"]="editarMascota"; 
        include_once 'view/layout.php';
    }

} 
/*

 * 
 *         if(Mascota::editarDatosMascota($_POST['nombre'],$_POST['edad'],$_POST['vacunado'],$_POST['microchip'],$_POST['esterilizado'],$_POST['tipo'],$_POST['codMascota'])){
 */