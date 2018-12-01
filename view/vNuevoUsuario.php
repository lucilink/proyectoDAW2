<?php

echo "Estas en registar";
?>
 <form name="formulario" class="form-horizontal" action="index.php?pagina=registrar" method="post">
                <p class="h4 text-center py-4">Formulario de registro</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label for="materialFormCardNameEx" class="font-weight-light">Usuario</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" <?php if(isset($_POST['codUsuario']) && empty($mensajeError['errorCodUsuario'])){ echo 'value="',$_POST['codUsuario'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorCodUsuario'])){echo '<span style="color:red">'.$mensajeError['errorCodUsuario'].'</span>';}
                    if(isset($mensajeError['errorUsuarioRepetido'])){echo '<span style="color:red">'.$mensajeError['errorUsuarioRepetido'].'</span>';} ?>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label for="materialFormCardPasswordEx" class="font-weight-light">Password</label>
                    <input type="password" id="materialFormCardPasswordEx" class="form-control" name="password">
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>
                </div>

                <div class="md-form">
                    <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                    <label for="materialFormCardConfirmEx" class="font-weight-light">Repite password</label>
                    <input type="password" id="materialFormCardConfirmEx" class="form-control" name="repPassword">
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPasswordNoIgual'])){echo '<span style="color:red">'.$mensajeError['errorPasswordNoIgual'].'</span><br>';} ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Nombre</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="nombre" <?php if(isset($_POST['nombre']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['nombre'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Primer Apellido</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido1" <?php if(isset($_POST['apellido1']) && empty($mensajeError['errorPrimerApellido'])){ echo 'value="',$_POST['apellido1'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPrimerApellido'])){echo '<span style="color:red">'.$mensajeError['errorPrimerApellido'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Segundo Apellido</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido2" <?php if(isset($_POST['apellido2']) && empty($mensajeError['errorSegundoApellido'])){ echo 'value="',$_POST['apellido2'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorSegundoApellido'])){echo '<span style="color:red">'.$mensajeError['errorSegundoApellido'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">DNI</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="DNI" <?php if(isset($_POST['DNI']) && empty($mensajeError['errorDNI'])){ echo 'value="',$_POST['DNI'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDNI'])){echo '<span style="color:red">'.$mensajeError['errorDNI'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Fecha de Nacimiento</label>
                    <input type="date" id="materialFormCardNameEx" class="form-control" name="fNacimiento" <?php if(isset($_POST['fNacimiento']) && empty($mensajeError['errorFNacimiento'])){ echo 'value="',$_POST['fNacimiento'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorFNacimiento'])){echo '<span style="color:red">'.$mensajeError['errorFNacimiento'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Teléfono</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="telefono" <?php if(isset($_POST['telefono']) && empty($mensajeError['errorTelefono'])){ echo 'value="',$_POST['telefono'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorTelefono'])){echo '<span style="color:red">'.$mensajeError['errorTelefono'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Correo Electrónico</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="email" <?php if(isset($_POST['email']) && empty($mensajeError['errorEmail'])){ echo 'value="',$_POST['email'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorEmail'])){echo '<span style="color:red">'.$mensajeError['errorEmail'].'</span>';}
                    ?>
                </div>
                
                <div class="md-form">
                    <label for="materialFormCardNameEx" class="font-weight-light">Dirección</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="direccion" <?php if(isset($_POST['direccion']) && empty($mensajeError['errorDireccion'])){ echo 'value="',$_POST['direccion'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDireccion'])){echo '<span style="color:red">'.$mensajeError['errorDireccion'].'</span>';}
                    ?>
                </div>

                <div class="text-center py-4 mt-3">
                    <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar">
                    <input type="submit" name="volver" class="btn btn-rounded btn-danger" value="Cancelar">
                </div>
            </form>
