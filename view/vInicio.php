<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <input type="submit" name="salir" value="Cerrar sesión">
</form>
 <a class="" href="index.php?numeroPagina=1&pagina=mtoUsuarios">Mantenimiento de Usuarios</a> 
 <a class="" href="index.php?pagina=editarPerfil">Editar Perfil</a> 
 <a class="" href="index.php?numeroPagina=1&pagina=mtoMascotas">Mantenimiento de Mascotas</a>
 <a class="" href="index.php?pagina=eliminarCuenta">Borrar Cuenta</a> 
 

<?php
echo "<br>Estas en el inicio";
