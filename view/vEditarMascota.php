<header>
    <div class="container">
        <h1 class="text-center">DATOS DE LA MASCOTA</h1>
    </div>
</header>
 <br>
<div class="container">
    <section class="main row"> 
        <div class="col-md-6">
            <?php
                echo '<img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascota->getImagen())) .' " width="100%" height="100%" class="img-rounded img-responsive imgfor"/>';
                   ?>       
        </div>
        <div class="col-md-6">
            <form name="formulario" class="form-horizontal" action="index.php?pagina=editarMascota&Mascota=<?php echo $_GET['Mascota'];?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="vacunado" class="control-label">Codigo Mascota: </label> 
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="codMascota" value="<?php  echo $mascota->getCodMascota();?>" readonly>
                </div>
                
               <div class="form-group">
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" name="nombre" value="<?php if(isset($_POST['si'])){ echo $_POST['nombre'],'"';}else{echo $mascota->getNombre();}?>">
                    <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';}
                    ?>
               </div>       
               
                
                <div class="form-group">
                    <input type="text" id="materialFormCardNameEx" class="form-control campogrande" placeholder="Descripción" name="descripcion" value="<?php if(isset($_POST['si'])){ echo $_POST['descripcion'],'"';}else{echo $mascota->getDescripcion();}?>" >
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDescripcion'])){echo '<span style="color:red">'.$mensajeError['errorDescripcion'].'</span>';}
                    ?>
                </div>                             
                
                <div class="form-inline">  
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="edad" value="<?php if(isset($_POST['si'])){ echo $_POST['edad'],'"';}else{ echo $mascota->getEdad();}?>">                           
                   <?php //si existe mensaje de error lo mostramos
                   if(isset($mensajeError['errorEdad'])){echo '<span style="color:red">'.$mensajeError['errorEdad'].'</span>';}
                   ?>
                   <select class="form-control" id="select" name="sexo">
                        <option selected="true" disabled>Sexo</option>
                        <option value="Macho" <?php if($mascota->getSexo()=="Macho"){ echo 'selected';}?> >Macho</option> 
                        <option value="Hembra" <?php if($mascota->getSexo()=="Hembra"){ echo 'selected';}?> >Hembra</option> 
                    </select>                  
               </div>
                <br>
                
                <div class="form-inline">
                    <select class="form-control campopeque" id="select" name="vacunado">
                        <option value="Si" <?php if($mascota->getVacunado()=="Si"){ echo 'selected';}?>>SI</option> 
                        <option value="No" <?php if($mascota->getVacunado()=="No"){ echo 'selected';}?>>NO</option> 
                    </select>                  
                    <select class="form-control campopeque" id="select" name="microchip">
                        <option value="Si" <?php if($mascota->getMicrohip()=="Si"){ echo 'selected';}?>>SI</option> 
                        <option value="No" <?php if($mascota->getMicrohip()=="No"){ echo 'selected';}?>>NO</option> 
                    </select> 
                    <select class="form-control campopeque" id="select" name="esterilizado">
                        <option value="Si" <?php if($mascota->getEsterilizado()=="Si"){ echo 'selected';}?>>SI</option> 
                        <option value="No" <?php if($mascota->getEsterilizado()=="No"){ echo 'selected';}?>>NO</option> 
                    </select> 
                </div>
                <br>
                
                <div class="form-group">
                   <select class="form-control campogrande" id="select" name="tipo">
                        <option selected="true" disabled>Tipo</option>
                        <option value="Gato" <?php if($mascota->getTipo()=="Gato"){ echo 'selected';}?>>Gato</option> 
                        <option value="Perro" <?php if($mascota->getTipo()=="Perro"){ echo 'selected';}?>>Perro</option> 
                        <option value="Cobaya" <?php if($mascota->getTipo()=="Cobaya"){ echo 'selected';}?>>Cobaya</option> 
                        <option value="Conejo" <?php if($mascota->getTipo()=="Conejo"){ echo 'selected';}?>>Conejo</option> 
                        <option value="Roedor" <?php if($mascota->getTipo()=="Roedor"){ echo 'selected';}?>>Roedor</option> 
                        <option value="Reptil" <?php if($mascota->getTipo()=="Reptil"){ echo 'selected';}?>>Reptil</option> 
                        <option value="Pajaro" <?php if($mascota->getTipo()=="Pajaro"){ echo 'selected';}?>>Pajaro</option> 
                        <option value="Otro" <?php if($mascota->getTipo()=="Otro"){ echo 'selected';}?>>Otro</option> 
                    </select> 
               </div>
                  <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorModificar'])){echo '<span style="color:red">'.$mensajeError['errorModificar'].'</span>';}
                    ?>
                <br><br>
                <div class="text-center py-4 mt-3">
                    <input type="submit" name="si" class="btn btn-rounded btnAceptar" value="Si">
                    <input type="submit" name="no" class="btn btn-rounded btnCancelar" value="No">
                </div>
                <br>
            </form>
        </div>
    </section>
</div>
