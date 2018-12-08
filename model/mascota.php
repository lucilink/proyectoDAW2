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
    private $descripcion;
    private $edad;
    private $sexo;
    private $vacunado;
    private $microhip;
    private $esterilizado;
    private $tipo;
    private $fechaLlegada;
    private $fechaReserva;
    private $fechaAdopcion;
    private $codUsuario;
    
    function __construct($codMascota, $nombre, $imagen,$descripcion, $edad,$sexo, $vacunado, $microhip, $esterilizado, $tipo, $fechaLlegada, $fechaReserva, $fechaAdopcion, $codUsuario) {
        $this->codMascota = $codMascota;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
        $this->edad = $edad;
        $this->sexo = $sexo;
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
    function getDescripcion() {
        return $this->descripcion;
    }

    function getEdad() {
        return $this->edad;
    }
    function getSexo() {
        return $this->sexo;
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
    
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setSexo($sexo) {
        $this->descripcion = $sexo;
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

    
    /**
     * @function buscarMascotaTipo($codMascota,$pagina,$registrosPagina)
     * 
     * Funcion para buscar mascotas por el tipo de estas
     * 
     * @param  string $codMascota, int $pagina, int $registroPagina
     * 
     * @return devuelve un arrray con el congunto de mascotas por pagina
     * 
     */
    
    public static function buscarMascotaTipo($codMascota,$pagina,$registrosPagina){
        $arrayMascotas=null;
        if(is_null($pagina)){
            $pagina=1;
        }
        $mascota= MascotasPDO::buscarMascotaTipo($codMascota, $pagina, $registrosPagina);
        if(!empty($mascota)){
            for($i=0;$i<count($mascota);$i++){
                $arrayMascotas[$i]=new Mascota($mascota[$i]['Codigo'],$mascota[$i]['Nombre'],$mascota[$i]['Imagen'],$mascota[$i]['Descripcion'],$mascota[$i]['Edad'],$mascota[$i]['Sexo'],$mascota[$i]['Vacunado'],$mascota[$i]['Microchip'],$mascota[$i]['Esterilizado'],$mascota[$i]['Tipo'],$mascota[$i]['FechaLlegada'],$mascota[$i]['FechaReserva'],$mascota[$i]['FechaAdopcion'],$mascota[$i]['CodUsuario']);
            }
        }
        return $arrayMascotas;
    }
    
    /**
     * @function contarMascotaTipo($codMascota)
     * 
     * Funcion para sacar el total de mascotas que hay en la base de datos
     * 
     * @param  string $codMascota
     * 
     * @return devuelve el total de mascotas
     * 
     */
    
    public static function contarMascotaTipo($codMascota){
        return MascotasPDO::contarMascotaTipo($codMascota);
    }

    /**
     * @function altaMascotaaltaMascota($codMascota, $nombre,$imagen, $edad, $vacunado, $microchip, $esterilizado, $tipo, $fechallegada)
     * 
     * Funcion para dar de alta una mascota
     * 
     * @param  string $codMascota, string $nombre,blob $imagen, int $edad, boolean $vacunado, boolean $microchip, boolean $esterilizado,string $tipo, date $fechallegada, 
     * 
     * @return boolean devuelve true si se ha podido dar de alta y false en caso contrario
     * 
     */
    
    public static function altaMascota($codMascota, $nombre,$imagen,$descripcion, $edad,$sexo, $vacunado, $microchip, $esterilizado, $tipo, $fechallegada){
        $mascota=null;
        if(MascotasPDO::altaMascota($codMascota, $nombre, $imagen,$descripcion, $edad,$sexo, $vacunado, $microchip, $esterilizado, $tipo, $fechallegada)){
            $mascota=new Mascota($codMascota, $nombre, $imagen,$descripcion, $edad,$sexo, $vacunado, $microchip, $esterilizado, $tipo, $fechallegada,null,null,null);
        }
        return $mascota;
    }
    
    /**
     * @function comprobarExisteMascota($codMascota)
     * 
     * Funcion para comprobar si existe una Mascota
     * 
     * @param  string $codMascota
     * 
     * @return boolean devuelve true las mascota existe y false en caso contrario
     * 
     */

    public static function comprobarExisteMascota($codMascota){
        return MascotasPDO::comprobarExisteMascota($codMascota);
    }
    

    /**
     * @function eliminarMascota($codMascota).
     *
     * Función para eliminar una mascota de nuestra base de datos.
     *
     * @param string $codMascota 
     *
     * @return boolean devuelve true si la mascota existe y false en caso contrario y false en caso contrario
     * 
     */
    public function eliminarMascota($codMascota){
        return MascotasPDO::eliminarMascota($codMascota);
    }
    
    /**
     * @function buscarMascotaPorCodigo($codMascota).
     *
     * Función para buscar una mascota por su código.
     *
     * @param string $codMascota Código de la mascota a buscar.
     *
     * @return Mascota|null Dependiendo de si se ha encontrado ese registro en la base de datos.
     */
    
    public static function buscarMascotaPorCodigo($codMascota){
        $mascota = null;
        $arrayMascota = MascotasPDO::buscarMascotaPorCodigo($codMascota);
        if(!empty($arrayMascota)){
            $mascota=new Mascota($arrayMascota['Codigo'],$arrayMascota['Nombre'],$arrayMascota['Imagen'],$arrayMascota['Descripcion'],$arrayMascota['Edad'],$arrayMascota['Sexo'],$arrayMascota['Vacunado'],$arrayMascota['Microchip'],$arrayMascota['Esterilizado'],$arrayMascota['Tipo'],$arrayMascota['FechaLlegada'],$arrayMascota['FechaReserva'],$arrayMascota['FechaAdopcion'],$arrayMascota['CodUsuario']);
        }
        return $mascota;
    }
    

    
    public function editarDatosMascota ($nombre,$edad,$codMascota){
        $editado = false;
        if(MascotasPDO::editarDatosMascota($nombre,$edad,$codMascota)){
            $editado=true;
        }
        return $editado;
    }
    
    /**
 public function editarDatosMascota ($nombre,$edad,$vacunado,$microchip,$esterilizado,$tipo,$codMascota){
        $editado = false;
        if(MascotasPDO::editarDatosMascota($nombre,$edad,$vacunado,$microchip,$esterilizado,$tipo,$codMascota)){
            $editado=true;
        }
        return $editado;
    }
     *      */
    
    
   /**
     * @function reservarMascota($fechaReserva,$codUsuario,$codMascota)
     * 
     * Funcion para adoptar una mascota
     * 
     * @param  string $codMascota, string $codUsuario, date $fechaAdopcion
     * 
     * @return boolean devuelve true si se ha podido adoptar
     * 
     */   
    public function reservarMascota($fechaReserva,$codUsuario, $codMascota){
        return MascotasPDO::reservarMascota($fechaReserva, $codUsuario, $codMascota);
    }

    /**
     * @function deshacerReservaMascota($codMascota)
     * 
     * Funcion para adoptar una mascota
     * 
     * @param  string $codMascota
     * 
     * @return boolean devuelve true si se ha podido adoptar
     * 
     */    
    public function deshacerReservaMascota ($codMascota){
        return MascotasPDO::deshacerReservaMascota($codMascota);
    }
    
    
     
}

 