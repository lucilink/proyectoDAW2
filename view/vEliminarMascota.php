<?php

echo "Estas en eliminar mascota";
?>
 <form name="formulario" class="form-horizontal" action="index.php?pagina=eliminarMascota&Mascota=<?php echo $_GET['Mascota'];?>" method="post" enctype="multipart/form-data">
    <p class="h4 text-center py-4">DATOS MASCOTA A ELIMINAR</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <label for="materialFormCardNameEx" class="font-weight-light">Codigo Mascota</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codMascota" value="<?php echo $mascota->getCodMascota();?>" readonly>
        
    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Nombre</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="nombre" value="<?php echo $mascota->getNombre();?>" readonly>
    </div>
    
    <div class="md-form">
        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascota->getImagen())) .' " width="15%" height="15%"/>';
        ?>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Tipo</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="edad" value="<?php echo $mascota->getTipo();?>" readonly>
    </div>

    <div class="text-center py-4 mt-3">
        <input type="submit" name="si" class="btn btn-rounded btn-success" value="Si">
        <input type="submit" name="no" class="btn btn-rounded btn-danger" value="No">
    </div>
</form>


