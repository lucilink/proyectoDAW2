<header>
    <div class="container">
        <h1 class="text-center">Nueva Mascota</h1>
    </div>
</header>
<br><br>
<div class="container">
    <section class="main row"> 
        
        <div class="col-md-6">           
            <img src="/webroot/img/FormularioNuevaMascota.png" width="65%" height="65%" class="img-rounded img-responsive imgestrecha imgElim"/>                     
        </div>
        <div class="col-xs-1"></div>
        <div class="col-md-6 col-xs-10">
            <form name="formulario" class="form-horizontal formularioizda" action="index.php?pagina=nuevaMascota" method="post" enctype="multipart/form-data">
               <div class="form-inline">
                    <input type="text" id="materialFormCardNameEx" class="form-control campopeque" placeholder="Codigo Mascota" name="codMascota" <?php if(isset($_POST['codMascota']) && empty($mensajeError['errorCodMascota'])){ echo 'value="',$_POST['codMascota'],'"';}?>>
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorCodMascota'])){echo '<span style="color:red">'.$mensajeError['errorCodMascota'].'</span>';}
                   if(isset($mensajeError['errorMascotaRepetida'])){echo '<span style="color:red">'.$mensajeError['errorMascotaRepetida'].'</span>';} ?>
                   
                    <input type="text" id="materialFormCardNameEx" class="form-control campopeque" placeholder="Nombre" name="nombre" <?php if(isset($_POST['nombre']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['nombre'],'"';}?>>
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
                   ?>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" id="materialFormCardNameEx" class="form-control campoancho" placeholder="Descripción" name="descripcion" <?php if(isset($_POST['descripcion']) && empty($mensajeError['errorDescripcion'])){ echo 'value="',$_POST['descripcion'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDescripcion'])){echo '<span style="color:red">'.$mensajeError['errorDescripcion'].'</span>';}
                    ?>
                </div>
                <br>
               <div class="form-group">
                   <label for="imagen" class="campogrande">Imagen:</label>
                   <input type="file" name="imagen" id="imagen" class="form-control-file campoancho" /> 
                    <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorImagen'])){echo '<span style="color:red">'.$mensajeError['errorImagen'].'</span>';}
                   ?>
               </div>
                <br>
               <div class="form-inline">                 
                   <input type="text" id="materialFormCardNameEx" class="form-control campopeque" placeholder="Edad" name="edad" <?php if(isset($_POST['edad']) && empty($mensajeError['errorEdad'])){ echo 'value="',$_POST['edad'],'"';}?>>
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorEdad'])){echo '<span style="color:red">'.$mensajeError['errorEdad'].'</span>';}
                   ?>
                   <select class="form-control" id="select" name="sexo">
                        <option selected="true" disabled>Sexo</option>
                        <option value="Macho" >Macho</option> 
                        <option value="Hembra" >Hembra</option> 
                    </select>
                   
               </div>
                <br>
                <div class="form-inline">
                    <select class="form-control campopeque" id="select" name="vacunado">
                        <option selected="true" disabled>Vacunado</option>
                        <option value="Si" >SI</option> 
                        <option value="No" >NO</option> 
                    </select>                  
                    <select class="form-control campopeque" id="select" name="microchip">
                        <option selected="true" disabled>Microchip</option>
                        <option value="Si" >SI</option> 
                        <option value="No" >NO</option> 
                    </select> 
                    <select class="form-control campopeque" id="select" name="esterilizado">
                        <option selected="true" disabled>Esterilizado</option>
                        <option value="Si" >SI</option> 
                        <option value="No" >NO</option> 
                    </select> 
                </div>
                <br>
                <div class="form-group">
                   <select class="form-control campoancho" id="select" name="tipo">
                        <option selected="true" disabled>Tipo</option>
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
                <br>
               <div class="text-center py-4 mt-3">
                   <input type="submit" name="enviar" class="btn btn-rounded btnAceptar" value="Aceptar">
                   <input type="submit" name="volver" class="btn btn-rounded btnCancelar" value="Cancelar">
               </div>
                <br>
           </form>
        </div>
    </section>
</div>
