<form name="formularioAlta" class="" action="index.php?pagina=editarMascota&Mascota=<?php echo $_GET['Mascota'];?>&numeroPagina=<?php echo $_GET['numeroPagina'];?>" method="post" style="width: 100%;">
    <fieldset>
        <br>
        <div class="form-group row">
            <!-- Material input -->
            <label for="CodDepartamento" class="control-label col-sm-2">Codigo Mascota:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="codMascota" value="<?php echo $mascota->getCodMascota(); //Mostramos el código del departamento que se va a editar.?>" readonly> 
            </div>
        </div>
        
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control" id="alfabetico" name="nombre" value="<?php if(isset($_POST['enviar'])){ echo $_POST['nombre'],'"';}else{ echo $mascota->getNombre();}//Mostramos la descripción del departamento?>">
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';} ?>
            </div>
        </div>
        
       <?php 
       // echo '<img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascota->getImagen())) .' " width="15%" height="15%"/>';
        ?>
        <br>
        <div class="md-form">
            <label for="materialFormCardNameEx" class="font-weight-light">Edad</label>
            <input type="text" id="materialFormCardNameEx" class="form-control" name="edad" value="<?php if(isset($_POST['enviar'])){ echo 'value="',$_POST['edad'],'"';}else{ echo $mascota->getEdad();}?>">
            <?php //si existe mensaje de error lo mostramos
            if(isset($mensajeError['errorEdad'])){echo '<span style="color:red">'.$mensajeError['errorEdad'].'</span>';}
            ?>
        </div>
        
        
        
        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-12">
                    <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar">
                    <input type="submit" name="volver" class="btn btn-rounded btn-danger" value="Cancelar">
                </div>
            </div>
        </div>
    </fieldset>
</form>

