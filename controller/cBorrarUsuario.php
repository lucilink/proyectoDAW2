<?php
/**
 * File cBorrarUsuario.php
 * @author Lucía Rodríguez Álvarez
 * Fecha ultima revision 03-09-2018
 */
$usuario = Usuario::buscarUsuarioPorCodigo($_GET['Usuario']);
/**
 * En el caso de que se haya pulsado el botón de no, volveremos a la página de inicio.
 */
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    if (isset($_POST['no'])) {
        header('Location: index.php?numeroPagina=1&pagina=mtoUsuarios');
    }
    /**
     * En el caso de pulsar sí, comprobaremos que se ejecuta la consulta, y en el caso de que se ejecute la consulta
     * nos iremos a la página de inicio.
     * En el caso de no pulsar el sí, cargaremos la página de eliminar junto con el layout.
     */
    if (isset($_POST['si'])) {
        if (Usuario::bajaUsuario($_GET['Usuario'])) {
            header('Location: index.php?numeroPagina=1&pagina=mtoUsuarios');
        }
    } else {
        $_GET["pagina"] = "borrarUsuario";
        include_once "view/layout.php";
    }
}
?>