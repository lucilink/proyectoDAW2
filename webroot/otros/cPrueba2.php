<?php

$nombreImagen=$_FILES['imagen']['name'];

$tipoImagen=$_FILES['imagen']['type'];

$tamanioImagen=$_FILES['imagen']['size'];

$archivoTemporal = $_FILES['imagen']['tmp_name'];

$carpetaDestino=$_SERVER['DOCUMENT_ROOT']."/webroot/img/"; //Ruta donde se guardara la imagen

echo $carpetaDestino;
echo "<br>";
echo $archivoTemporal;
echo "<br>";
echo $nombreImagen;
echo "<br>";

move_uploaded_file($archivoTemporal,$carpetaDestino.$nombreImagen);//Mover la imagen al

