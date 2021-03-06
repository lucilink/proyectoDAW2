<?php

/**
 * File validacion.php
 * @author Lucía Rodríguez Álvarez
 *
 * Fichero que contiene las funciones de validacion
 * Fecha ultima revision 22-08-2018
 */

class validacion{
    
    /**
     * @function comprobarAlfabetico($cadena, $maxTamanio, $minTamanio, $obligatorio)
     * 
     * Funcion para validar un campo alfabetico
     * 
     * @param  string $cadena, int $maxTamanio, int $minTamanio, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function comprobarAlfabetico($cadena, $maxTamanio, $minTamanio, $obligatorio){
        // Patrón para campos de solo texto
        $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ\s]+$/";
        $cadena = htmlspecialchars(strip_tags(trim((string)$cadena)));
        $mensajeError = null;
        if (preg_match($patron_texto, $cadena) && self::comprobarNoVacio((string)$cadena) && self::comprobarMaxTamanio((string)$cadena, $maxTamanio)
            && self::comprobarMinTamanio((string)$cadena, $minTamanio)) {
            $mensajeError = null;
        } else {
            $mensajeError = "No has introducido un valor correcto <br>";
        }
        if (!preg_match($patron_texto, $cadena)) {
            $mensajeError .= "Solo se admiten letras <br>";
        }
        if (self::comprobarNoVacio((string)$cadena) == false) {
            $mensajeError .= " Campo Vacio <br>";
        }
        if (self::comprobarMaxTamanio((string)$cadena, $maxTamanio) == false) {
            $mensajeError .= " El tamaño maximo es " . $maxTamanio . "<br>";
        }
        if (self::comprobarMinTamanio((string)$cadena, $minTamanio) == false) {
            $mensajeError .= " El tamaño minimo es " . $minTamanio . "<br>";
        }
        if (empty($cadena) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function comprobarAlfaNumerico($cadena, $maxTamanio, $minTamanio, $obligatorio)
     * 
     * Funcion para validar un campo alfanumerico
     * 
     * @param  string $cadena, int $maxTamanio, int $minTamanio, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function comprobarAlfaNumerico($cadena, $maxTamanio, $minTamanio, $obligatorio){
        $cadena = htmlspecialchars(strip_tags(trim((string)$cadena)));
        $mensajeError = null;
        if (self::comprobarNoVacio((string)$cadena) && self::comprobarMaxTamanio((string)$cadena, $maxTamanio) && self::comprobarMinTamanio((string)$cadena, $minTamanio)) {
            $mensajeError = null;
        } else {
            $mensajeError = "Error ";
        }
        if (self::comprobarNoVacio((string)$cadena) == false) {
            $mensajeError .= "campo Vacio";
        }
        if (self::comprobarMaxTamanio((string)$cadena, $maxTamanio) == false) {
            $mensajeError .= " El tamaño maximo es " . $maxTamanio;
        }
        if (self::comprobarMinTamanio((string)$cadena, $minTamanio) == false) {
            $mensajeError .= " El tamaño minimo es " . $minTamanio;
        }
        if (empty($cadena) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function comprobarEntero($integer, $obligatorio)
     * 
     * Funcion para validar un numero entero
     * 
     * @param  int $integer, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function comprobarEntero($integer, $obligatorio){
        $mensajeError = null;
        if (filter_var($integer, FILTER_VALIDATE_INT) && self::comprobarNoVacio($integer)) {
            $correcto = null;
        } else {
            $mensajeError = "Error ";
        }
        if (!filter_var($integer, FILTER_VALIDATE_INT)) {
            $mensajeError .= "no es un entero";
        }
        if (!self::comprobarNoVacio($integer)) {
            $mensajeError .= " campo vacio";
        }
        if (empty($integer) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function comprobarFloat($float, $obligatorio)
     * 
     * Funcion para validar un float
     * 
     * @param  float $float, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function comprobarFloat($float, $obligatorio){
        $mensajeError = null;
        if (filter_var($float, FILTER_VALIDATE_FLOAT) && self::comprobarNoVacio($float)) {
            $mensajeError = null;
        } else {
            $mensajeError = "Error ";
        }
        if (!filter_var($float, FILTER_VALIDATE_FLOAT)) {
            $mensajeError .= " float no valido";
        }
        if (!self::comprobarNoVacio($float)) {
            $mensajeError .= "campo vacio";
        }
        if (empty($float) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function validarEmail($email, $maxTamanio, $minTamanio, $obligatorio)
     * 
     * Funcion para validar un Email
     * 
     * @param  string $email, int $maxTamanio, int $minTamanio, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function validarEmail($email, $maxTamanio, $minTamanio, $obligatorio){
        $mensajeError = null;
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && self::comprobarNoVacio($email) && self::comprobarMaxTamanio($email, $maxTamanio) && self::comprobarMinTamanio($email, $minTamanio)) {
            $mensajeError = null;
        } else {
            $mensajeError = "fallo al introducir el correo";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mensajeError = " correo no valido ej: tunombre@hotmail.com";
        }
        if (!self::comprobarNoVacio($email)) {
            $mensajeError = " campo Vacio";
        }
        if (!self::comprobarMaxTamanio($email, $maxTamanio)) {
            $mensajeError = " El tamaño maximo es " . $maxTamanio;
        }
        if (!self::comprobarMinTamanio($email, $minTamanio)) {
            $mensajeError = " El tamaño minimo es " . $minTamanio;
        }
        if (empty(htmlspecialchars(strip_tags(trim($email)))) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function validarDNI($dni, $maxTamanio, $minTamanio, $obligatorio)
     * 
     * Funcion para validar un DNI
     * 
     * @param  string $dni, int $maxTamanio, int $minTamanio, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function validarDNI($dni,$maxTamanio, $minTamanio, $obligatorio){
        $mensajeError=null;
        $letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 && self::comprobarNoVacio($dni) && self::comprobarMaxTamanio($dni, $maxTamanio) && self::comprobarMinTamanio($dni, $minTamanio)) {
            $mensajeError=null;
	}  else {
            $mensajeError = "DNI no valido";
        } if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
            $mensajeError = null;
        }else{
            $mensajeError = "DNI no valido";
        }
        if (!self::comprobarNoVacio($dni)) {
            $mensajeError = " campo Vacio";
        }
        if (!self::comprobarMaxTamanio($dni, $maxTamanio)) {
            $mensajeError = " El tamaño maximo es " . $maxTamanio;
        }
        if (!self::comprobarMinTamanio($dni, $minTamanio)) {
            $mensajeError = " El tamaño minimo es " . $minTamanio;
        }
        if (empty(htmlspecialchars(strip_tags(trim($dni)))) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function validarNumeroTelefono($cadena, $maxTamanio, $minTamanio, $obligatorio)
     * 
     * Funcion para validar un numero de telefono
     * 
     * @param  string $cadena, int $maxTamanio, int $minTamanio, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function validarNumeroTelefono($cadena, $maxTamanio, $minTamanio, $obligatorio){
        $patron='/^[9|6|7][0-9]{8}$/';
        $cadena = htmlspecialchars(strip_tags(trim((string)$cadena)));
        $mensajeError = null;
        if (preg_match($patron, $cadena) && self::comprobarNoVacio($cadena) && self::comprobarMaxTamanio($cadena, $maxTamanio) && self::comprobarMinTamanio($cadena, $minTamanio)) {
            $mensajeError = null;
        } else {
            $mensajeError = "Numero de telefono no valido <br>";
        }
        if (preg_match($patron, $cadena)){
            $mensajeError= null;            
         }else{
           $mensajeError= "el numero de telefono no es valido";
         }
         if (!self::comprobarNoVacio($cadena)) {
            $mensajeError = " campo Vacio";
        }
        if (!self::comprobarMaxTamanio($cadena, $maxTamanio)) {
            $mensajeError = " El tamaño maximo es " . $maxTamanio;
        }
        if (!self::comprobarMinTamanio($cadena, $minTamanio)) {
            $mensajeError = " El tamaño minimo es " . $minTamanio;
        }
        if (empty(htmlspecialchars(strip_tags(trim($cadena)))) && $obligatorio == 0) {
            $mensajeError = null;
        }
        
    }
    
    /**
     * @function validarFecha($fecha, $obligatorio)
     * 
     * Funcion para validar una fecha
     * 
     * @param  date $fecha, int $obligatorio
     * 
     * @return cadena de texto con un mensaje de error
     * 
     */
    
    public static function validarFecha($fecha, $obligatorio){
        $mensajeError = null;
        $fechaMinima = "1900-01-01";
        $fechaMaxima = "2999-12-12";
        if (self::validateDate($fecha) && self::comprobarNoVacio($fecha) && ($fecha > $fechaMinima) && ($fecha < $fechaMaxima)) {
            $mensajeError = null;
        } else {
            $mensajeError = "Por favor introduzca una fecha entre " . $fechaMinima . " y " . $fechaMaxima;
        }
        if (!self::validateDate($fecha, 'Y-m-d')) {
            $mensajeError = " formato incorrecto de fecha (Año-Mes-dia) (2000-01-01)";
        }
        if ($fecha < $fechaMinima) {
            $mensajeError = " la fecha tiene que ser superior a $fechaMinima";
        }
        if ($fecha > $fechaMaxima) {
            $mensajeError = " la fecha tiene que ser inferior a $fechaMaxima";
        }
        if (empty(htmlspecialchars(strip_tags(trim($fecha)))) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function validateDate($date, $format = 'Y-m-d');
     *
     * @param $date Fecha a comprobar
     * @param string $format formato de la cadena
     * @return bool Devuelve null si es correcto, y si no devuelve un error
     */
    public static function validateDate($date, $format = 'Y-m-d'){
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
    
    public static function validarFechaNacimiento($fecha, $obligatorio){
        $mensajeError = null;
        $fechaMinima = "1900-01-01";
        $fechaHoy = date('Y-m-j');
        $nuevafecha = strtotime ( '-18 year' , strtotime ( $fechaHoy ) ) ;
        $fechaMaxima = date ( 'Y-m-j' , $nuevafecha );
        
        if (self::validateDate($fecha) && self::comprobarNoVacio($fecha) && ($fecha > $fechaMinima) && ($fecha < $fechaMaxima)) {
            $mensajeError = null;
        } else {
            $mensajeError = "Por favor introduzca una fecha entre " . $fechaMinima . " y " . $fechaMaxima;
        }
        if (!self::validateDate($fecha, 'Y-m-d')) {
            $mensajeError = " formato incorrecto de fecha (Año-Mes-dia) (2000-01-01)";
        }
        if ($fecha < $fechaMinima) {
            $mensajeError = " la fecha tiene que ser superior a $fechaMinima";
        }
        if ($fecha > $fechaMaxima) {
            $mensajeError = " la fecha tiene que ser inferior a $fechaMaxima";
        }
        if (empty(htmlspecialchars(strip_tags(trim($fecha)))) && $obligatorio == 0) {
            $mensajeError = null;
        }
        return $mensajeError;
    }
    
    /**
     * @function comprobarNoVacio($cadena)
     * 
     * Funcion para comprobar que un campo no esta vacio
     * 
     * @param  string $cadena
     * 
     * @return true si no esta vacia y false si si lo esta
     * 
     */
    
    public static function comprobarNoVacio($cadena){
        $mensajeError = false;
        $cadena = htmlspecialchars(strip_tags(trim($cadena)));
        if (!empty($cadena)) {
            $mensajeError = true;
        }
        return $mensajeError;
    }
    
    /**
     * @function comprobarMaxTamanio($cadena, $tamanio)
     * 
     * Funcion para comprobar que un campo no supera el tamaño maximo
     * 
     * @param  string $cadena, int $tamanio
     * 
     * @return true si no es mas grande que el tamaño maximo y false en caso contrario
     * 
     */
    
    public static function comprobarMaxTamanio($cadena, $tamanio){
        $mensajeError = false;
        if ((strlen($cadena)) <= $tamanio || $tamanio == 0) {
            $mensajeError = true;
        }
        return $mensajeError;
    }
    
    /**
     * @function comprobarMinTamanio($cadena, $tamanio)
     * 
     * Funcion para comprobar que un campo supera el tamaño minimo
     * 
     * @param  string $cadena, int $tamanio
     * 
     * @return true si supera el tamaño minimo y false en caso contrario
     * 
     */
    
    public static function comprobarMinTamanio($cadena, $tamanio){
        $mensajeError = false;
        if (strlen($cadena) >= $tamanio || $tamanio == 0) {
            $mensajeError = true;
        }
        return $mensajeError;
    }
    
}