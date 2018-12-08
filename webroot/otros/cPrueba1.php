<?php
require_once 'config.php';

$nombre=$_POST['nombre'];
$imagen=$_FILES['imagen']['name'];
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$carpetaDestino=$_SERVER['DOCUMENT_ROOT']."/webroot/img/".$imagen;
//$carpetaDestino='../img/'.$imagen;
copy($rutaTemporal, $carpetaDestino);
try{
    $conexion = new PDO(DATOSCONEXION, USER,PASSWORD); //establecemos la conexion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $consulta = $conexion->prepare("INSERT INTO Imagenes (nombre,foto) values (:nombre,:foto)");
    $consulta->bindParam(':nombre', $nombre); 
    $consulta->bindParam(':foto', $carpetaDestino);
    $consulta->execute(); //ejecutamos la consulta
    if ($consulta) { 
        header("Location: vPrueba1.php"); //si se ha añadido mostrmamos un mensaje
    } 

} catch (PDOException $exception) { //capturamos la excepcion en caso de que haya habido algun error
    echo $exception->getMessage(); //Mostramos el mensaje de error por pantalla

} finally {
    unset($conexion);
}