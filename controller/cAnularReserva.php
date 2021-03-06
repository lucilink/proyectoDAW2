<?php
$mascota= Mascota::buscarMascotaPorCodigo($_GET['Mascota']);

/**
 * En el caso de que se haya pulsado el botón de no, volveremos a la página de inicio.
 */
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else { 
    if (isset($_POST['no'])) {
         header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
    }
    /**
     * En el caso de pulsar sí, comprobaremos que se ejecuta la consulta, y en el caso de que se ejecute la consulta
     * nos iremos a la página de inicio.
     * En el caso de no pulsar el sí, cargaremos la página de rehabilitar junto con el layout.
     */
    if (isset($_POST['si'])) {
        if (Mascota::deshacerReservaMascota($_GET['Mascota'])) {
             header('Location: index.php?numeroPagina=1&pagina=mtoMascotas');
        }
    } else {
        $_GET["pagina"] = "anularReserva";
        include_once "view/layout.php";
    }
    $_GET["pagina"] = "anularReserva";
    include_once "view/layout.php";
}
?>

