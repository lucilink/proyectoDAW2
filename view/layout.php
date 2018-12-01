<!DOCTYPE html>
<?php
 if (isset($_SESSION['usuario'])){
        $vista='view/vInicio.php';
    }else{
        $vista='view/vLogin.php';
    }

    if(isset($_GET['pagina'])){
        $vista=$vistas[$_GET['pagina']];
    } 
    require_once $vista;
?>
<!--<html lang="es">
<head>
    <title>Luci</title>
    <meta charset="utf-8">
</head>
<body>-->
<?php
   /* if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario'){
        echo $_SESSION['usuario']->getPerfil();
        echo $_SESSION['usuario']->getNombre();
    }elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
        echo $_SESSION['usuario']->getPerfil();
        echo $_SESSION['usuario']->getNombre();
    }*/
    
    
    
    ?>
        
<!--</body>
</html>-->

