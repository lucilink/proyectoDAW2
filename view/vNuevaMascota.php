<?php

echo "Estas en nueva mascota";
?>
 <form name="formulario" class="form-horizontal" action="index.php?pagina=nuevaMascota" method="post" enctype="multipart/form-data">
    <p class="h4 text-center py-4">Formulario nueva mascota</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <label for="materialFormCardNameEx" class="font-weight-light">Codigo Mascota</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="codMascota" <?php if(isset($_POST['codMascota']) && empty($mensajeError['errorCodMascota'])){ echo 'value="',$_POST['codMascota'],'"';}?>>
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorCodMascota'])){echo '<span style="color:red">'.$mensajeError['errorCodMascota'].'</span>';}
        if(isset($mensajeError['errorMascotaRepetida'])){echo '<span style="color:red">'.$mensajeError['errorMascotaRepetida'].'</span>';} ?>

    </div>

    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Nombre</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="nombre" <?php if(isset($_POST['nombre']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['nombre'],'"';}?>>
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
        ?>
    </div>
    
    <div class="md-form">
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" />
         <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorImagen'])){echo '<span style="color:red">'.$mensajeError['errorImagen'].'</span>';}
        ?>
    </div>
    
    <div class="md-form">
        <label for="materialFormCardNameEx" class="font-weight-light">Edad</label>
        <input type="text" id="materialFormCardNameEx" class="form-control" name="edad" <?php if(isset($_POST['edad']) && empty($mensajeError['errorEdad'])){ echo 'value="',$_POST['edad'],'"';}?>>
        <?php //si existe mensaje de error lo mostramos
        if(isset($mensajeError['errorEdad'])){echo '<span style="color:red">'.$mensajeError['errorEdad'].'</span>';}
        ?>
    </div>
    
    <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Vacunado:</label>
            <div class="col-sm-10">
                <select class="form-control" id="select" name="vacunado">
                    <option value="Si" >SI</option> 
                    <option value="No" >NO</option> 
                </select> 
            </div>
        </div>
    
    <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Microchip:</label>
            <div class="col-sm-10">
                <select class="form-control" id="select" name="microchip">
                    <option value="Si" >SI</option> 
                    <option value="No" >NO</option> 
                </select> 
            </div>
        </div>
    
    <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Esterilizado:</label>
            <div class="col-sm-10">
                <select class="form-control" id="select" name="esterilizado">
                    <option value="Si" >SI</option> 
                    <option value="No" >NO</option> 
                </select> 
            </div>
        </div>
    
    <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Tipo:</label>
            <div class="col-sm-10">
                <select class="form-control" id="select" name="tipo">
                    <option value="Gato" >Gato</option> 
                    <option value="Perro" >Perro</option> 
                    <option value="Cobaya" >Cobaya</option> 
                    <option value="Conejo" >Conejo</option> 
                    <option value="Roedor" >Roedor</option> 
                    <option value="Reptil" >Reptil</option> 
                    <option value="Pajaro" >Pajaro</option> 
                    <option value="Otro" >Otro</option> 
                </select> 
            </div>
        </div>

    <div class="text-center py-4 mt-3">
        <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar">
        <input type="submit" name="volver" class="btn btn-rounded btn-danger" value="Cancelar">
    </div>
</form>
