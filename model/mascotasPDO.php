<?php

/**
 * File mascotasPDO.php
 * @author Lucía Rodríguez Álvarez
 *
 * Fichero que contiene las operaciones en la base de datos del objeto Mascotas.
 * Fecha ultima revision 12-09-2018
 */

require_once "DBPDO.php";//Llamamos a la clase para la conexión a la base de datos

/**
 * Class MascotasPDO
 * @author Lucía Rodríguez Álvarez
 * Fecha última revisión 12-08-2018
 */

class MascotasPDO{
    
    /**
     * @function altaMascota($codMascota, $nombre, $edad, $vacunado, $microchip, $tipo, $fechallegada,$imagen)
     * 
     * Funcion para dar de alta una mascota
     * 
     * @param  string $codMascota, string $nombre, int $edad, boolean $vacunado, boolean $microchip, string $tipo, date $fechallegada, blob $imagen
     * 
     * @return boolean devuelve true si se ha podido dar de alta y false en caso contrario
     * 
     */
    
    public static function altaMascota($codMascota, $nombre, $edad, $vacunado, $microchip, $tipo, $fechallegada,$imagen){
        $registrado=false;
        $consulta="INSERT INTO Mascotas (CodMascota, Nombre, Edad, Vacunado, Microchip, Tipo, FechaLlegada, Imagen) VALUES (?,?,?,?,?,?,?,?,?)";
        $resConsulta= DBPDO::ejecutaConsulta($consulta, [$codMascota, $codProtectora, $nombre, $edad, $vacunado, $microchip, $tipo, $fechallegada,$imagen]);
        if ($resConsulta->rowCount()==1){
            $registrado=true;
        }
        return $registrado;
    }
    
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
    
    public static function reservarMascota ($fechaReserva,$codUsuario, $codMascota){
        $adoptado = false;
        $consulta = "UPDATE Mascotas SET FechaReserva=?,CodUsuario=? WHERE CodMascota = ?";
        $resconsulta = DBPDO::ejecutaConsulta($consulta,[$fechaReserva,$codUsuario, $codMascota]);
        if($resconsulta->rowCount()==1){
            $adoptado = true;
        }
        return $adoptado;
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
    public static function deshacerReservaMascota ($codMascota){
        $devuelto = false;
        $consulta = "UPDATE Departamento SET FechaReserva=NULL,CodUsuario=NULL WHERE CodMascota = ?";
        $resconsulta = DBPDO::ejecutaConsulta($consulta,[$codMascota]);
        if($resconsulta->rowCount()==1){
            $devuelto = true;
        }
        return $devuelto;
    }
    
    /**
     * @function buscarUsuarioNombre($codUsuario,$pagina,$registrosPagina)
     * 
     * Funcion para buscar usuarios por el nombre de estos
     * 
     * @param  string $codUsuario, int $pagina, int $registroPagina
     * 
     * @return devuelve un arrray con el congunto de usuarios por pagina
     * 
     */
    
    public static function buscarMascotaTipo($codMascota,$pagina,$registrosPagina){
        $arrayMascotas=[];
        $mascota=[];
        if(is_null($pagina)){
            $pagina = 1;
        }
        $primerRegistro = ($pagina-1)*($registrosPagina);
        $consulta = "SELECT * FROM Mascotas WHERE Tipo LIKE concat('%',?,'%') LIMIT $primerRegistro, $registrosPagina";
        $resultado = DBPDO::ejecutaConsulta($consulta,[$codMascota]);
        $contador = 0;
        
        if($resultado->rowCount()>0){
            while ($resFetch = $resultado -> fetchObject()){
                $arrayMascotas['Codigo'] = $resFetch->CodMascota;
                $arrayMascotas['Nombre'] = $resFetch->Nombre;
                $arrayMascotas['Imagen'] = $resFetch->Imagen;
                $arrayMascotas['Edad'] = $resFetch->Edad;
                $arrayMascotas['Vacunado'] = $resFetch->Vacunado;
                $arrayMascotas['Microchip'] = $resFetch->Microchip;
                $arrayMascotas['Esterilizado'] = $resFetch->Esterilizado;
                $arrayMascotas['Tipo'] = $resFetch->Tipo;
                $arrayMascotas['FechaLlegada'] = $resFetch->FechaLlegada;
                $arrayMascotas['FechaReserva'] = $resFetch->FechaReserva;
                $arrayMascotas['FechaAdopcion'] = $resFetch->FechaAdopcion;
                $arrayMascotas['CodUsuario'] = $resFetch->CodUsuario;
                $mascota[$contador]=$arrayMascotas;
                $contador++;
            }
        }
        
        return $mascota;
    }
    
    /**
     * @function contarUsuariosNombre($codUsuario)
     * 
     * Funcion para sacar el total de usuarios que hay en la base de datos
     * 
     * @param  string $codUsuario
     * 
     * @return devuelve el total de usuarios
     * 
     */
    
    public static function contarMascotaTipo($codMascota){
        $numMascotas = "SELECT count(*) FROM Mascotas WHERE Tipo LIKE concat('%',?,'%')";
        $resultado = DBPDO::ejecutaConsulta($numMascotas, [$codMascota]);
        if ($resultado->rowCount()) {
            $totalMascotas = $resultado->fetchColumn(0);
        }
        return $totalMascotas;
    }
    
    
    
    
    
}