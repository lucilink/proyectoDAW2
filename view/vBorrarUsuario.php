<?php

echo "Estas en Borrar Usuario";
?>
 <form name="formulario" class="form-horizontal" action="index.php?pagina=borrarUsuario&Usuario=<?php echo $_GET['Usuario'];?>" method="post">
    <p class="h4 text-center py-4">SEGURO QUE QUIERES ELIMINAR ESTE USUARIO</p>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Usuario</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getCodUsuario();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Nombre</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getNombre();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Primer Apellido</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getApellido1();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Segundo Apellido</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getApellido2();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">DNI</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getDni();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Fecha de Nacimiento</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getFNacimiento();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Telefono</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getTelefono();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Email</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getEmail();?>" readonly>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Direccion</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getDireccion();?>" readonly>
    </div>

    <div class="text-center py-4 mt-3">
        <input type="submit" name="si" class="btn btn-rounded btn-success" value="Si">
        <input type="submit" name="no" class="btn btn-rounded btn-danger" value="No">
    </div>
</form>

