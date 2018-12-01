<?php

echo "Estas en editar perfil";
?>
 <form name="formulario" class="form-horizontal" action="index.php?pagina=editarPerfil" method="post">
    <p class="h4 text-center py-4">Editar perfil</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <label for="materialFormCardNameEx" class="font-weight-light">Usuario</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario(); ?>" readonly>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <label for="materialFormCardPasswordEx" class="font-weight-light">Perfil</label>
        <input type="text" id="materialFormCardPasswordEx" class="form-control" name="perfil" value="<?php echo $_SESSION['usuario']->getPerfil(); ?>" readonly>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Nombre</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="nombre" value="<?php if(isset($_POST['enviar'])){ echo $_POST['nombre'];}else{ echo $_SESSION['usuario']->getNombre();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Primer Apellido</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido1" value="<?php if(isset($_POST['enviar'])){ echo $_POST['apellido1'];}else{ echo $_SESSION['usuario']->getApellido1();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorPrimerApellido'])){echo '<span style="color:red">'.$mensajeError['errorPrimerApellido'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Segundo Apellido</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido2" value="<?php if(isset($_POST['enviar'])){ echo $_POST['apellido2'];}else{ echo $_SESSION['usuario']->getApellido2();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorSegundoApellido'])){echo '<span style="color:red">'.$mensajeError['errorSegundoApellido'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">DNI</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="DNI" value="<?php if(isset($_POST['enviar'])){ echo $_POST['DNI'];}else{ echo $_SESSION['usuario']->getDni();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorDNI'])){echo '<span style="color:red">'.$mensajeError['errorDNI'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Fecha de Nacimiento</label>
        <input type="date" id="materialFormCardNameEx" class="form-control" name="fNacimiento" value="<?php if(isset($_POST['enviar'])){ echo $_POST['DNI'];}else{ echo $_SESSION['usuario']->getFNacimiento();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorFNacimiento'])){echo '<span style="color:red">'.$mensajeError['errorFNacimiento'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Teléfono</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="telefono" value="<?php if(isset($_POST['enviar'])){ echo $_POST['telefono'];}else{ echo $_SESSION['usuario']->getTelefono();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorTelefono'])){echo '<span style="color:red">'.$mensajeError['errorTelefono'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Correo Electrónico</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="email" value="<?php if(isset($_POST['enviar'])){ echo $_POST['email'];}else{ echo $_SESSION['usuario']->getEmail();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorEmail'])){echo '<span style="color:red">'.$mensajeError['errorEmail'].'</span>';}
        ?>
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Dirección</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="direccion" value="<?php if(isset($_POST['enviar'])){ echo $_POST['direccion'];}else{ echo $_SESSION['usuario']->getDireccion();}?>">
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorDireccion'])){echo '<span style="color:red">'.$mensajeError['errorDireccion'].'</span>';}
        ?>
    </div>
    
    <div class="form-group row">
        <label for="password" class="control-label col-md-2">Nueva Contraseña</label>
        <div class="col-md-10">
            <input type="password" class="form-control" id="alfabetico" name="password" >
             <?php //si existe mensaje de error lo mostramos
            if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>                   
        </div>
    </div>
    
    <div class="form-group row">
        <label for="repPassword" class="control-label col-md-2">Repetir Contraseña</label>
        <div class="col-md-10">
            <input type="password" class="form-control" id="alfabetico" name="repPassword" >
             <?php //si existe mensaje de error lo mostramos
            if(isset($mensajeError['errorPasswordNoIgual'])){echo '<span style="color:red">'.$mensajeError['errorPasswordNoIgual'].'</span><br>';} ?>                   
        </div>
    </div>

    <div class="text-center py-4 mt-3">
        <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar">
        <input type="submit" name="volver" class="btn btn-rounded btn-danger" value="Cancelar">
    </div>
</form>
