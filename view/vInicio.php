
<!-- <a class="" href="index.php?pagina=login">Iniciar sesion</a>--> 
 <a class="" href="index.php?numeroPagina=1&pagina=mtoMascotas">Ver Mascotas</a>

 <?php
    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
?>
 <a class="" href="index.php?numeroPagina=1&pagina=mtoUsuarios">Mantenimiento de Usuarios</a> 
    <?php } ?>
 
 <?php
 if(isset($_SESSION['usuario'])){ ?>
 <a class="" href="index.php?pagina=editarPerfil">Editar Perfil</a> 
 <a class="" href="index.php?pagina=eliminarCuenta">Borrar Cuenta</a> 
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <input type="submit" name="salir" value="Cerrar sesión">
</form>
 <?php } ?>
 
 


<?php
echo "<br>Estas en el inicio";
