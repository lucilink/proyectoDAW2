<header>
    <div class="container">
        <h1 class="text-center">Editar Perfil</h1>
    </div>
</header>

<div class="container">
    <section class="main row"> 
        <div class="col-md-6">           
            <img src="/webroot/img/fotoedotarperfil.png" width="100%" height="100%" class="img-rounded img-responsive"/>                     
        </div>
        <div class="col-md-6">
            <form name="formulario" class="form-horizontal" action="index.php?pagina=editarPerfil" method="post">
               
                <div class="form-group">
                   
                   <label for="materialFormCardNameEx" class="font-weight-light campogrande">Usuario</label>
                   <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario(); ?>" readonly>
               </div>

               

               <div class="form-group">
                   <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="nombre" value="<?php if(isset($_POST['enviar'])){ echo $_POST['nombre'];}else{ echo $_SESSION['usuario']->getNombre();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
                   ?>
               </div>

               <div class="form-inline">
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido1" value="<?php if(isset($_POST['enviar'])){ echo $_POST['apellido1'];}else{ echo $_SESSION['usuario']->getApellido1();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorPrimerApellido'])){echo '<span style="color:red">'.$mensajeError['errorPrimerApellido'].'</span>';}
                   ?>
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido2" value="<?php if(isset($_POST['enviar'])){ echo $_POST['apellido2'];}else{ echo $_SESSION['usuario']->getApellido2();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorSegundoApellido'])){echo '<span style="color:red">'.$mensajeError['errorSegundoApellido'].'</span>';}
                   ?>
               </div>
                <br>

               <div class="form-inline">
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="DNI" value="<?php if(isset($_POST['enviar'])){ echo $_POST['DNI'];}else{ echo $_SESSION['usuario']->getDni();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorDNI'])){echo '<span style="color:red">'.$mensajeError['errorDNI'].'</span>';}
                   ?>
                   <input type="date" id="materialFormCardNameEx" class="form-control" name="fNacimiento" value="<?php if(isset($_POST['enviar'])){ echo $_POST['DNI'];}else{ echo $_SESSION['usuario']->getFNacimiento();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorFNacimiento'])){echo '<span style="color:red">'.$mensajeError['errorFNacimiento'].'</span>';}
                   ?>
               </div>
                <br>


               <div class="form-inline">
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="telefono" value="<?php if(isset($_POST['enviar'])){ echo $_POST['telefono'];}else{ echo $_SESSION['usuario']->getTelefono();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorTelefono'])){echo '<span style="color:red">'.$mensajeError['errorTelefono'].'</span>';}
                   ?>
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="email" value="<?php if(isset($_POST['enviar'])){ echo $_POST['email'];}else{ echo $_SESSION['usuario']->getEmail();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorEmail'])){echo '<span style="color:red">'.$mensajeError['errorEmail'].'</span>';}
                   ?>
               </div>
                <br>
               <div class="form-group">
                   <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="direccion" value="<?php if(isset($_POST['enviar'])){ echo $_POST['direccion'];}else{ echo $_SESSION['usuario']->getDireccion();}?>">
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorDireccion'])){echo '<span style="color:red">'.$mensajeError['errorDireccion'].'</span>';}
                   ?>
               </div>

               <div class="form-group">
                   <label for="password" class="font-weight-light campogrande">Nueva Contraseña</label>
                       <input type="password" class="form-control campogrande" id="alfabetico" name="password" >
                        <?php //si existe mensaje de error lo mostramos
                       if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>                   
               </div>

               <div class="form-group">
                   <label for="repPassword" class="control-label campogrande">Repetir Contraseña</label>
                   
                       <input type="password" class="form-control campogrande" id="alfabetico" name="repPassword" >
                        <?php //si existe mensaje de error lo mostramos
                       if(isset($mensajeError['errorPasswordNoIgual'])){echo '<span style="color:red">'.$mensajeError['errorPasswordNoIgual'].'</span><br>';} ?>                   
                   
               </div>
<?php ?>
               <div class="text-center py-4 mt-3 ">
                   <input type="submit" name="enviar" class="btn btn-rounded btnAceptar" value="Aceptar">
                   <input type="submit" name="volver" class="btn btn-rounded btnCancelar" value="Cancelar">
               </div>
           </form>
        </div>
    </section>
</div>
