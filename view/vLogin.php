
    



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="CodUsuario" placeholder="Usuario"><br>
            <?php  if(isset($mensajeError['errorCodUsuario'])){echo '<span style="color:red">'.$mensajeError['errorCodUsuario'].'</span>';} ?><br>
            <input type="password" name="Password" placeholder="Contraseña">
             <?php  if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span>';} ?><br>
        
        <?php echo "<span style='color:red;'>",$error,"</span>"; ?>
        <input type="submit" name="enviar" value="Iniciar sesión">
        <a class="nav-link" href="index.php?pagina=registrar">Regístrate</a>
        </form>
<?php echo "<br> estas en el login";
?>

