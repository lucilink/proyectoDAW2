<nav class="navbar navbar-default " role="navigation">
             <div class="navbar-header">
            <a class="navbar-brand" href="#"><img class="img-responsive logotipo" src="/webroot/img/logoProtectora.png" alt="Chania" width="80%" height="80%"></a>                                
             </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right "> 
                    <li> <a class="" href="index.php">Iniciar Sesion</a></li>
                </ul>
                
              </div>
    </nav>


<header>
    <div class="container">
        <h1 class="text-center">Formulario de Registro</h1>
    </div>
</header>
<br>
<div class="container">
    <section class="main row">
        <div class="col-md-6">           
            <img src="/webroot/img/formularioAlta.png" width="100%" height="100%" class="img-rounded img-responsive"/>                     
        </div>
        <div class="col-md-6">
            <form name="formulario" class="form-horizontal" action="index.php?pagina=registrar" method="post">
                
                <div class="form-group">   
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" placeholder="Nombre usuario" name="codUsuario" <?php if(isset($_POST['codUsuario']) && empty($mensajeError['errorCodUsuario'])){ echo 'value="',$_POST['codUsuario'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorCodUsuario'])){echo '<span style="color:red">'.$mensajeError['errorCodUsuario'].'</span>';}
                    if(isset($mensajeError['errorUsuarioRepetido'])){echo '<span style="color:red">'.$mensajeError['errorUsuarioRepetido'].'</span>';} ?>
                </div>
                
                <div class="form-group">                   
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" placeholder="Nombre" name="nombre" <?php if(isset($_POST['nombre']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['nombre'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
                    ?>
                </div>
                <div class="form-inline formus">
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioUsuario" placeholder="Primer Apellido" name="apellido1" <?php if(isset($_POST['apellido1']) && empty($mensajeError['errorPrimerApellido'])){ echo 'value="',$_POST['apellido1'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPrimerApellido'])){echo '<span style="color:red">'.$mensajeError['errorPrimerApellido'].'</span>';}
                    ?>
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioUsuario" placeholder="Segundo Apellido" name="apellido2" <?php if(isset($_POST['apellido2']) && empty($mensajeError['errorSegundoApellido'])){ echo 'value="',$_POST['apellido2'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorSegundoApellido'])){echo '<span style="color:red">'.$mensajeError['errorSegundoApellido'].'</span>';}
                    ?>
                </div>
                <br>
                <div class="form-inline formus">
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioUsuario" placeholder="DNI" name="DNI" <?php if(isset($_POST['DNI']) && empty($mensajeError['errorDNI'])){ echo 'value="',$_POST['DNI'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDNI'])){echo '<span style="color:red">'.$mensajeError['errorDNI'].'</span>';}
                    ?>
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioUsuario" placeholder="Telefono" name="telefono" <?php if(isset($_POST['telefono']) && empty($mensajeError['errorTelefono'])){ echo 'value="',$_POST['telefono'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorTelefono'])){echo '<span style="color:red">'.$mensajeError['errorTelefono'].'</span>';}
                    ?>
                </div>
                <br>
                <div class="form-inline formus">
                    <label for="materialFormCardNameEx" class="font-weight-light">Fecha de Nacimiento</label>
                    <input type="date" id="materialFormCardNameEx" class="form-control formufecha campogrande" name="fNacimiento" <?php if(isset($_POST['fNacimiento']) && empty($mensajeError['errorFNacimiento'])){ echo 'value="',$_POST['fNacimiento'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorFNacimiento'])){echo '<span style="color:red">'.$mensajeError['errorFNacimiento'].'</span>';}
                    ?>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="email" placeholder="Correo Electrónico" <?php if(isset($_POST['email']) && empty($mensajeError['errorEmail'])){ echo 'value="',$_POST['email'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorEmail'])){echo '<span style="color:red">'.$mensajeError['errorEmail'].'</span>';}
                    ?>
                </div>
                
                <div class="form-group">
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" placeholder="Dirección" name="direccion" <?php if(isset($_POST['direccion']) && empty($mensajeError['errorDireccion'])){ echo 'value="',$_POST['direccion'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDireccion'])){echo '<span style="color:red">'.$mensajeError['errorDireccion'].'</span>';}
                    ?>
                </div>
                
                <div class="form-group">
                    <input type="password" id="materialFormCardPasswordEx" class="form-control campogrande" placeholder="Contraseña" name="password">
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>
                </div>

                <div class="form-group">
                    <input type="password" id="materialFormCardConfirmEx" class="form-control campogrande" placeholder="Repetir Contraseña" name="repPassword">
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPasswordNoIgual'])){echo '<span style="color:red">'.$mensajeError['errorPasswordNoIgual'].'</span><br>';} ?>
                </div>



                

                
                <br>
                <div class="text-center py-4 mt-3">
                    <input type="submit" name="enviar" class="btn btn-rounded btnAceptar" value="Aceptar">
                    <input type="submit" name="volver" class="btn btn-rounded btnCancelar" value="Cancelar">
                </div>
                <br>
            </form>
        </div>

    </section>
</div>
