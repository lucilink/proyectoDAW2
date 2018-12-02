<form name="formularioAlta" class="" action="index.php?pagina=editarMascota&Mascota=<?php echo $_GET['Mascota'];?>&numeroPagina=<?php echo $_GET['numeroPagina'];?>" method="post" style="width: 100%;">
    <fieldset>
        <br>
        <div class="form-group row">
            <!-- Material input -->
            <label for="CodDepartamento" class="control-label col-sm-2">Codigo Mascota:</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="codMascota" value="<?php echo $mascota->getCodMascota(); //Mostramos el código del departamento que se va a editar.?>" readonly>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorCodDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCodDepartamento'].'</span>';} ?>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control" id="alfabetico" name="nombre" value="<?php if(isset($_POST['editar'])){ echo $_POST['nombre'],'"';}else{ echo $mascota->getNombre();}?>">
                    
            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Edad</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control col-sm-1" id="float" name="edad" placeholder="" value="<?php if(isset($_POST['editar'])){ echo $_POST['edad'],'"';}else{ echo $mascota->getEdad();}?>">
                    
            </div>
        </div>
      
        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-12">
                    <input type="submit" name="editar" class="btn btn-rounded btn-success" value="Aceptar"/>
                    <input type="submit" name="cancelar" class="btn btn-rounded btn-danger" value="Cancelar"/>
                </div>
            </div>
        </div>
    </fieldset>
</form>
