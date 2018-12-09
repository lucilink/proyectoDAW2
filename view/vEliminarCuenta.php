<header>
    <div class="container">
        <h1 class="text-center">¿Seguro que quieres borrar tu cuenta?</h1>
    </div>
</header>
<br><br>
<div class="container">
    <section class="main row"> 
         <div class="col-md-6">           
             <img src="/webroot/img/eliminarPerfil.png" width="80%" height="80%" class="img-rounded img-responsive imgElim"/>                    
        </div>
        
        <div class="col-md-6 col-xs-10">
            <form name="formulario" class="form-horizontal" action="index.php?pagina=eliminarCuenta" method="post" style="width: 100%;">
                    
                <div class="form-group">  
                    <label for="materialFormCardNameEx" class="font-weight-light campogrande">Usuario</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario();?>" readonly>
                </div>

                <div class="form-group"> 
                    <label for="materialFormCardNameEx" class="font-weight-light campogrande">Nombre</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $_SESSION['usuario']->getNombre();?>" readonly>
                </div>

                <div class="form-inline"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control campopeque" name="apellido1" value="<?php echo $_SESSION['usuario']->getApellido1();?>" readonly>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido2" value="<?php echo $_SESSION['usuario']->getApellido2();?>" readonly>                    
                </div>
                <br>
                <div class="form-inline"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control campopeque" name="codUsuario" value="<?php echo $_SESSION['usuario']->getDni();?>" readonly>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getFNacimiento();?>" readonly>                   
                </div>
                <br>
                <div class="form-inline"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control campopeque" name="codUsuario" value="<?php echo $_SESSION['usuario']->getTelefono();?>" readonly>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $_SESSION['usuario']->getEmail();?>" readonly>                    
                </div>
                <br>                
                <div class="form-group"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $_SESSION['usuario']->getDireccion();?>" readonly>
                </div>
                <br>
                    
               
                <div class="text-center py-4 mt-3">
                        
                    <input type="submit" name="enviar" class="btn btn-rounded btnAceptar" value="Aceptar"/>
                    <input type="submit" name="volver" class="btn btn-rounded btnCancelar" value="Cancelar"/>
                           
                </div>
                 <br>
            </form>
        </div>
    </section>
</div>

