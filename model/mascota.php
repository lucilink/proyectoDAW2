<?php

/**
 * File usuario.php
 * @author Lucía Rodríguez Álvarez
 *
 * Fichero que contiene los metodos y atributos del objeto mascota
 * Fecha ultima revision 01-12-2018
 */

require_once 'mascotasPDO.php';

/**
 * Class Mascota
 * @author Lucía Rodríguez Álvarez
 * Fecha última revisión 01-12-2018
 */

class Mascota{
    private $codMascota;
    private $nombre;
    private $imagen;
    private $edad;
    private $vacunado;
    private $microhip;
    private $esterilizado;
    private $tipo;
    private $fechaLlegada;
    private $fechaReserva;
    private $fechaAdopcion;
    private $codUsuario;
    
    function __construct($codMascota, $nombre, $imagen, $edad, $vacunado, $microhip, $esterilizado, $tipo, $fechaLlegada, $fechaReserva, $fechaAdopcion, $codUsuario) {
        $this->codMascota = $codMascota;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->edad = $edad;
        $this->vacunado = $vacunado;
        $this->microhip = $microhip;
        $this->esterilizado = $esterilizado;
        $this->tipo = $tipo;
        $this->fechaLlegada = $fechaLlegada;
        $this->fechaReserva = $fechaReserva;
        $this->fechaAdopcion = $fechaAdopcion;
        $this->codUsuario = $codUsuario;
    }
    
    function getCodMascota() {
        return $this->codMascota;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getEdad() {
        return $this->edad;
    }

    function getVacunado() {
        return $this->vacunado;
    }

    function getMicrohip() {
        return $this->microhip;
    }

    function getEsterilizado() {
        return $this->esterilizado;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getFechaLlegada() {
        return $this->fechaLlegada;
    }

    function getFechaReserva() {
        return $this->fechaReserva;
    }

    function getFechaAdopcion() {
        return $this->fechaAdopcion;
    }

    function getCodUsuario() {
        return $this->codUsuario;
    }

    function setCodMascota($codMascota) {
        $this->codMascota = $codMascota;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setVacunado($vacunado) {
        $this->vacunado = $vacunado;
    }

    function setMicrohip($microhip) {
        $this->microhip = $microhip;
    }

    function setEsterilizado($esterilizado) {
        $this->esterilizado = $esterilizado;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setFechaLlegada($fechaLlegada) {
        $this->fechaLlegada = $fechaLlegada;
    }

    function setFechaReserva($fechaReserva) {
        $this->fechaReserva = $fechaReserva;
    }

    function setFechaAdopcion($fechaAdopcion) {
        $this->fechaAdopcion = $fechaAdopcion;
    }

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    public static function buscarMascotaTipo($codMascota,$pagina,$registrosPagina){
        $arrayMascotas=null;
        if(is_null($pagina)){
            $pagina=1;
        }
        $mascota= MascotasPDO::buscarMascotaTipo($codMascota, $pagina, $registrosPagina);
        if(!empty($mascota)){
            for($i=0;$i<count($mascota);$i++){
                $arrayMascotas[$i]=new Mascota($mascota[$i]['Codigo'],$mascota[$i]['Nombre'],$mascota[$i]['Imagen'],$mascota[$i]['Edad'],$mascota[$i]['Vacunado'],$mascota[$i]['Microchip'],$mascota[$i]['Esterilizado'],$mascota[$i]['Tipo'],$mascota[$i]['FechaLlegada'],$mascota[$i]['FechaReserva'],$mascota[$i]['FechaAdopcion'],$mascota[$i]['CodUsuario']);
            }
        }
        return $arrayMascotas;
    }
    
    public static function contarMascotaTipo($codMascota){
        return MascotasPDO::contarMascotaTipo($codMascota);
    }

    

    
    
}
