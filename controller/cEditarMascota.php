<?php

$correcto = true;//Variable para controlar los errores.

if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    /**
     * Declaramos la variable departamento que va a contener los datos que nos devuelva la consulta.
     * En el enlace de acceso pasaremos como parámetro el código del departamento, que luego utilizaremos para la
     * búsqueda en la base de datos del mismo.
     */
    $mascota= Mascota::buscarMascotaPorCodigo($_GET['Mascota']);

    /**
     * En el caso de pulsar el botón de cancelar nos iremos a la página de inicio.
     */
    if (isset($_POST['cancelar'])) {
       header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
    }
    /**
     * En el cason de que pulsemos el botón de editar, realizaremos la validación de los campos.
     */
    if (isset($_POST['editar'])) {
        $mensajeError["errorNombre"]= validacion::comprobarAlfabetico($_POST['nombre'], 255, 2, 1);
        $mensajeError["errorEdad"]= validacion::comprobarEntero($_POST['edad'], 1);
        foreach ($mensajeError as $valor) {  //recorremos el array de errores
            if ($valor != null) {
                $correcto = false;
            }
        }
    }
    /**
     * En el caso de haber pulsado el botón de editar y no haya errores, comprobaremos que se ejecuta la consulta y si lo hace nos iremos a la página de inicio,
     * y si no se cargará un mensaje de error y se volverá a cargar la misma página.
     */
    if (isset($_POST['editar']) && $correcto) {
        if (Mascota::editarDatosMascota($_POST['nombre'],$_POST['edad'],$_POST['codMascota'])) {
            header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
        } else {
            $mensajeError['errorModificar'] = "Error al modificar los datos de la mascota";
            $_GET["pagina"] = "editarMascota";
            include_once "view/layout.php";
        }
        /**
         * De no haber pulsado ninguno de los botones cargaremos la vista de modificar los departamentos y el layout.
         */
    } else {
       // echo "no";
        $_GET["pagina"] = "editarMascota";
        include_once "view/layout.php";
    }
}
?>