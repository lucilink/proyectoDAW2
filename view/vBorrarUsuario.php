<header>
    <div class="container">
        <h1 class="text-center">¿Seguro que quieres borrar esta cuenta?</h1>
    </div>
</header>
<br><br>
<div class="container">
    <section class="main row">
        <div class="col-md-6">           
            <img src="/webroot/img/eliminarPerfil.png" width="80%" height="80%" class="img-rounded img-responsive"/>                     
        </div>
        <div class="col-md-6">
            <form name="formulario" class="form-horizontal" action="index.php?pagina=borrarUsuario&Usuario=<?php echo $_GET['Usuario'];?>" method="post">          

                <div class="form-group">  
                    <label for="materialFormCardNameEx" class="font-weight-light campogrande">Usuario</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $usuario->getCodUsuario();?>" readonly>
                </div>

                <div class="form-group"> 
                    <label for="materialFormCardNameEx" class="font-weight-light campogrande">Nombre</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $usuario->getNombre();?>" readonly>
                </div>

                <div class="form-inline"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido1" value="<?php echo $usuario->getApellido1();?>" readonly>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="apellido2" value="<?php echo $usuario->getApellido2();?>" readonly>                    
                </div>
                <br>
                <div class="form-inline"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getDni();?>" readonly>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getFNacimiento();?>" readonly>                   
                </div>
                <br>
                <div class="form-inline"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getTelefono();?>" readonly>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" value="<?php echo $usuario->getEmail();?>" readonly>                    
                </div>
                <br>                
                <div class="form-group"> 
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codUsuario" value="<?php echo $usuario->getDireccion();?>" readonly>
                </div>
                <br>
                <div class="text-center py-4 mt-3"> 
                    <input type="submit" name="si" class="btn btn-rounded btnAceptar" value="Si">
                    <input type="submit" name="no" class="btn btn-rounded btnCancelar" value="No">
                </div>
                <br>
            </form>
        </div>
    </section>
</div>
            

