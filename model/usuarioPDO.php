<?php
/**
 * File UsuarioPDO.php
 * @author Lucía Rodríguez Álvarez
 *
 * Fichero que contiene realiza las operaciones en la base de datos del objeto Usuario.
 * Fecha ultima revision 09-08-2018
 */

require_once "DBPDO.php";//Llamamos a la clase para la conexión a la base de datos

/**
 * Class UsuariosPDO
 * @author Lucía Rodríguez Álvarez
 * Fecha última revisión 09-08-2018
 */

class UsuarioPDO{
    /**
     * @function validarUsuario($codUsuario, $password)
     * 
     * Funcion para comprobar si el usuario puede acceder o no
     * 
     * @param  string $codUsuario, string $password
     * 
     * @return array con los datos del Usuario
     * 
     */

    public static function validarUsuario($codUsuario, $password) {
        $consulta= "SELECT * from Usuarios where CodUsuario='".$codUsuario."' and Password=SHA2('".$password."',256)"; //Creacion de la consulta para los usuarios
        $arrayUsuarios=[]; //Creacion del array de usuarios
        $resConsulta= DBPDO::ejecutaConsulta($consulta,[$codUsuario,$password]); //Ejecutamos la consulta
        if ($resConsulta->rowCount()==1){ //Comprobamos si se han obtenido resultados en la consulta
            $resFetch = $resConsulta->fetchObject(); 
            //Metemos los resultados de la consulta en el array
            $arrayUsuarios['Nombre'] = $resFetch->Nombre;
            $arrayUsuarios['Apellido1'] = $resFetch->Apellido1;
            $arrayUsuarios['Apellido2'] = $resFetch->Apellido2;
            $arrayUsuarios['DNI'] = $resFetch->DNI;
            $arrayUsuarios['Fnacimiento'] = $resFetch->Fnacimiento;
            $arrayUsuarios['Perfil'] = $resFetch->Perfil;
            $arrayUsuarios['Telefono'] = $resFetch->Telefono;
            $arrayUsuarios['Email'] = $resFetch->Email;
            $arrayUsuarios['Direccion'] = $resFetch->Direccion;
        }
        return $arrayUsuarios;         
    }
    
    /**
     * @function registrarUsuario($codUsuario, $password, $nombre, $apellido1, $apellido2, $dni, $fNacimiento, $telefono, $email)
     * 
     * Funcion para registar a un usuario
     * 
     * @param  string $codUsuario, string $password, string $nombre, string $apellido1, string $apellido2 string $dni, date (Y-m-d) $fNacimiento, string $telefono, string $email
     * 
     * @return boolean devuelve true si ha podido registrar y false en caso contrario
     * 
     */
    
    public static function registrarUsuario($codUsuario, $password, $nombre, $apellido1, $apellido2, $dni, $fNacimiento, $telefono, $email, $direccion) {
        $registrado=false;
        $consulta="INSERT INTO Usuarios (CodUsuario,Password,Nombre,Apellido1,Apellido2,DNI,Fnacimiento,Perfil,Telefono,Email,Direccion) VALUES (?,?,?,?,?,?,?,'Usuario',?,?,?)";
        $resConsulta= DBPDO::ejecutaConsulta($consulta,[$codUsuario,$password,$nombre,$apellido1,$apellido2,$dni,$fNacimiento,$telefono,$email,$direccion]);
        if ($resConsulta->rowCount()==1){
            $registrado=true;
        }
        return $registrado;
    }
    
    /**
     * @function comprobarExisteUsuario($codUsuario)
     * 
     * Funcion para comprobar si existe un usuario
     * 
     * @param  string $codUsuario
     * 
     * @return boolean devuelve true si el usuario existe y false en caso contrario
     * 
     */
    
     public static function comprobarExisteUsuario($codUsuario){
        $registrado=false;
        $consulta="Select * from Usuarios where CodUsuario=?";
        $resConsulta= DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
        if ($resConsulta->rowCount()==1){
            $registrado=true;
        }
        return $registrado;
    }
    
    /**
     * @function editarPerfil($nombre,$apellido1,$apellido2,$dni,$fNacimiento,$telefono,$email$cod,Usuario)
     * 
     * Funcion para editar el perfil del usuario
     * 
     * @param  string $codUsuario, string $password, string $nombre, string $apellido1, string $apellido2 string $dni, date (Y-m-d) $fNacimiento, string perfil, string $telefono, atring $email
     * 
     * @return boolean devuelve true si el usuario se ha podido editar y false en caso contrario
     * 
     */
    
    public static function editarPerfilUsuario($password,$nombre,$apellido1,$apellido2,$dni,$fNacimiento,$telefono,$email,$direccion,$codUsuario){
        $editado=false;
        $consulta="update Usuarios set Password=?,Nombre=?,Apellido1=?,Apellido2=?,DNI=?,Fnacimiento=?,Telefono=?,Email=?, Direccion=? where CodUsuario=?";
        $resConsulta= DBPDO::ejecutaConsulta($consulta,[$password,$nombre,$apellido1,$apellido2,$dni,$fNacimiento,$telefono,$email,$direccion,$codUsuario]);
        if ($resConsulta->rowCount()==1){
            $editado=true;
        }
        return $editado;
    }
    
    /**
     * @function eliminarUsuario($codUsuario)
     * 
     * Funcion para eliminar un perfil de usuario
     * 
     * @param  string $codUsuario
     * 
     * @return boolean devuelve true si el usuario se ha podido eliminar y false en caso contrario
     * 
     */
    
    public static function eliminarUsuario($codUsuario){
        $eliminado=false;
        $consulta="delete from Usuarios where CodUsuario=?";
        DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
        if (UsuarioPDO::comprobarExisteUsuario($codUsuario)){
            $eliminado=true;
        }
        return $eliminado;
    }
    
    
    /**
     * @function bajaUsuario($codUsuario)
     * 
     * Funcion para eliminar un perfil de usuario
     * 
     * @param  string $codUsuario
     * 
     * @return boolean devuelve true si el usuario se ha podido eliminar y false en caso contrario
     * 
     */
    
     public static function bajaUsuario($codUsuario){
        $eliminado = false;
        $consulta = "delete from Usuarios where CodUsuario=?";
        $resultado = DBPDO::ejecutaConsulta($consulta,[$codUsuario]);
        if($resultado->rowCount()==1){
            $eliminado = true;
        }
        return $eliminado;
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
    
    public static function buscarUsuarioNombre($codUsuario,$pagina,$registrosPagina){
        $arrayUsuarios=[];
        $usuario=[];
        if(is_null($pagina)){
            $pagina = 1;
        }
        $primerRegistro = ($pagina-1)*($registrosPagina);
        $consulta = "SELECT * FROM Usuarios WHERE Nombre LIKE concat('%',?,'%') LIMIT $primerRegistro, $registrosPagina";
        $resultado = DBPDO::ejecutaConsulta($consulta,[$codUsuario]);
        $contador = 0;
        
        if($resultado->rowCount()>0){
            while ($resFetch = $resultado -> fetchObject()){
                $arrayUsuarios['Codigo'] = $resFetch->CodUsuario;
                $arrayUsuarios['Password'] = $resFetch->Password;
                $arrayUsuarios['Nombre'] = $resFetch->Nombre;
                $arrayUsuarios['Apellido1'] = $resFetch->Apellido1;
                $arrayUsuarios['Apellido2'] = $resFetch->Apellido2;
                $arrayUsuarios['DNI'] = $resFetch->DNI;
                $arrayUsuarios['Fnacimiento'] = $resFetch->Fnacimiento;
                $arrayUsuarios['Perfil'] = $resFetch->Perfil;
                $arrayUsuarios['Telefono'] = $resFetch->Telefono;
                $arrayUsuarios['Email'] = $resFetch->Email;
                $arrayUsuarios['Direccion'] = $resFetch->Direccion;
                $usuario[$contador]=$arrayUsuarios;
                $contador++;
            }
        }
        
        return $usuario;
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
    
    public static function contarUsuariosNombre($codUsuario){
        $numUsuarios = "SELECT count(*) FROM Usuarios WHERE Nombre LIKE concat('%',?,'%')";
        $resultado = DBPDO::ejecutaConsulta($numUsuarios, [$codUsuario]);
        if ($resultado->rowCount()) {
            $totalUsuarios = $resultado->fetchColumn(0);
        }
        return $totalUsuarios;
    }
    
    /**
     * @function buscarUsuarioPorCodigo($codUsuario)
     * 
     * Funcion para buscar usuarios por el codigo
     * 
     * @param  string $codUsuario
     * 
     * @return devuelve un arrray con los datos del usuario
     * 
     */
    
     public static function buscarUsuarioPorCodigo($codUsuario){
        $consulta = "SELECT * FROM Usuarios WHERE CodUsuario = ?";
        $arrayUsuarios = [];
        $resultado = DBPDO::ejecutaConsulta($consulta,[$codUsuario]);
        if($resultado->rowCount()==1){
            $resFetch = $resultado->fetchObject();
            $arrayUsuarios['Codigo'] = $resFetch->CodUsuario;
            $arrayUsuarios['Password'] = $resFetch->Password;
            $arrayUsuarios['Nombre'] = $resFetch->Nombre;
            $arrayUsuarios['Apellido1'] = $resFetch->Apellido1;
            $arrayUsuarios['Apellido2'] = $resFetch->Apellido2;
            $arrayUsuarios['DNI'] = $resFetch->DNI;
            $arrayUsuarios['Fnacimiento'] = $resFetch->Fnacimiento;
            $arrayUsuarios['Perfil'] = $resFetch->Perfil;
            $arrayUsuarios['Telefono'] = $resFetch->Telefono;
            $arrayUsuarios['Email'] = $resFetch->Email;
            $arrayUsuarios['Direccion'] = $resFetch->Direccion;
        }
        return $arrayUsuarios;
    }
    
}


