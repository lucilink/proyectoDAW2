<header>
    <div class="container">
        <h1 class="text-center">¿Quieres Anular La Reserva?</h1>
    </div>
</header>
<br>
<div class="container">
    <section class="main row"> 
        <form name="formulario" class="form-horizontal" action="index.php?Mascota=<?php echo $_GET['Mascota'];?>&pagina=anularReserva&numeroPagina=<?php echo $_GET['numeroPagina'];?>" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
                    <?php
                        echo '<img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascota->getImagen())) .' " width="100%" height="100%" class="img-rounded img-responsive imgfor"/>';
                           ?>       
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                <div class="form-group">
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="nombre" value="<?php echo $mascota->getNombre();?>" readonly>
                    </div>
                <br>
                <div class="form-group">
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="sexo" value="<?php echo $mascota->getSexo();?>" readonly>
                </div>
                <div class="form-group">
                    <p class="descripcion"><?php echo $mascota->getDescripcion();?></p>
                </div>
                
                 <div class="form-group">
                   <label for="vacunado" class="control-label">Edad: </label> 
                   <input type="text" id="materialFormCardNameEx" class="form-control" name="sexo" value="<?php echo $mascota->getEdad();?>" readonly>           
                </div>
                <br>
                <div class="form-inline">
                    <label for="vacunado" class="control-label">Vacunado: </label>
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioPeque" name="vacunado" value="<?php echo $mascota->getVacunado();?>" readonly>
                    <label for="repPassword" class="control-label">Microchip: </label>
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioPeque" name="microchip" value="<?php echo $mascota->getMicrohip();?>" readonly>                              
                    <label for="vacunado" class="control-label">Esterilizado: </label>
                    <input type="text" id="materialFormCardNameEx" class="form-control formularioPeque" name="esterilizado" value="<?php echo $mascota->getEsterilizado();?>" readonly>                   
               </div>
                <br>

                <br>


           <div class="text-center py-4 mt-3 botoformulario">
               <input type="submit" name="si" class="btn btn-rounded btnAceptar" value="Si">
               <input type="submit" name="no" class="btn btn-rounded btnCancelar" value="No">
           </div>
       </form>
        </div>
     </section>
</div>
