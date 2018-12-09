<!DOCTYPE html>
<?php
 if (isset($_SESSION['usuario'])){
        $vista='view/vMtoMascotas.php';
    }else{
        $vista='view/vLogin.php';
    }

    if(isset($_GET['pagina'])){
        $vista=$vistas[$_GET['pagina']];
    } 
   
?>
<html lang="es">
<head>
    <link rel="shortcut icon" href="webroot/img/favicon.ico" />
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="webroot/css/bootstrap.css">
    <link rel="stylesheet" href="webroot/css/bootstrap-theme.css">
    <link rel="stylesheet" href="webroot/css/estilos.css">
</head>


<body>
<?php if(isset($_SESSION['usuario'])){ ?>
<nav class="navbar navbar-default " role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"><img class="img-responsive logotipo" src="/webroot/img/logoProtectora.png" alt="Chania" width="80%" height="80%"></a>                                
             </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right ">
                    <?php
                    if(isset($_SESSION['usuario'])){ ?> 
                        <li> <a class="" href="index.php?numeroPagina=1&pagina=mtoMascotas">Ver Mascotas</a></li>
                    <?php } ?>   
                    <?php
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                    ?>
                        <li class=""><a class="" href="index.php?numeroPagina=1&pagina=mtoUsuarios">Mantenimiento de Usuarios</a></li>
                        <li><a href="index.php?pagina=nuevaMascota" class="text-white">Nueva Mascota</a></li>
                    <?php }?>
                    <?php
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario'){ ?>    
                        <li> <a class="" href="index.php?pagina=editarPerfil">Editar Perfil</a></li>
                    <?php }?>
                    <?php
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario'){ ?>        
                        <li><a class="" href="index.php?pagina=eliminarCuenta">Borrar Cuenta</a></li>
                    <?php }?>   
                    <?php
                    if(isset($_SESSION['usuario'])){ ?>       
                        <li>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                                <input type="submit" name="salir" value="Cerrar sesión" class="boton" style="">
                            </form>
                        </li>
                    <?php } ?>
                    
                </ul>
                
              </div>
    </nav>
<?php } ?>
    
   
    
    
    
    <?php  require_once $vista; ?>
    
    
 
    <div id="footer" class="foot">
        <div class="container">
            <p class="pfoot ">&copy; Lucía Rodríguez Álvarez</p>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
       <!-- <script src="/webroot/js/bootstrap.min.js"></script>
        <script src="/webroot/js/jquery.js"></script>-->
</body>
</html>


