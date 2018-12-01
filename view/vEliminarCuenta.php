<form name="formulario" class="form-horizontal" action="index.php?pagina=eliminarCuenta" method="post" style="width: 100%;">
    <fieldset>
        <br>
        <h4>¿Estas seguro que que quieres eliminar tu cuenta?</h4>
        <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Usuario</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Nombre</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getNombre();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Primer Apellido</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getApellido1();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Segundo Apellido</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getApellido2();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">DNI</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getDni();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Fecha de Nacimiento</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getFNacimiento();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Telefono</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getTelefono();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Email</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getEmail();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Direccion</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getDireccion();?>" readonly>
    </div>
        <div class="form-group">
            <div class="float-right">
                <div class="col-md-12">
                    <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar"/>
                    <input type="submit" name="enviar" class="btn btn-rounded btn-danger" value="Cancelar"/>
                </div>
            </div>
        </div>
  

</form>

