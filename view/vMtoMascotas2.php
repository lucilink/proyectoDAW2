<?php
/**
 * File  vMantenimientoUsuarios.php
 * @author Lucía.
 *
 * Fichero que contiene la vista del mantenimiento de los departamentos.
 * Fecha última revisión 09-05-2018
 */
?>
<!--
    Cargamos el fichero de jQuery, que será utlizado para activar o desactivar el botón de importar,
    dependiendo de si hay algún fichero seleccionado.
    -->




<!--Formulario en el que mostraremos el cuadro de búsqueda y una tabla con los resultados devueltos por la base de datos-->
<header>
    <div class="container">
        <h1 class="text-center">Nuestras Mascotas</h1>
    </div>
</header>
<div class="container-fluid">
    <section class="main row"> 
        <div class="col-md-12">
            <form name="formulario" class="" action="index.php?pagina=mtoMascotas2" method="post" >
            <br>
       
            <!-- Material input -->
                <label for="" class="col-sm-3 col-form-label">Tipo MASCOTA:</label>
                <div class="col-md-6">

                    <input type="text" class="form-control" id="alfabetico" name="Tipo"
                           placeholder="" <?php if (isset($_SESSION['criterioBusqueda'])){
                        echo 'value="', $_SESSION['criterioBusqueda'], '"';
                    } ?>>

                </div>
                <div class="col-sm-3">
                    <div class="float-right">
                        <input type="submit" name="buscar" class="btn btn-rounded btn-default" value="Buscar"/>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<br>
<div class="container-fluid">
    <div class="col-md-12">
        <table class="table">
           
            
            <tbody>
            <?php
            /**
             * Obtenemos los registros de la base de datos los recorremos cargándolos en una tabla.
             * //$mascotas[$i]->getImagen()
             */
            for ($i=0;$i<count($mascotas);$i++){
                //if(is_null($usuarios[$i]->getFechaBajaUsuario())){
                    echo "<tr class='table-info'>";
                    echo '<td width="50%"><img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascotas[$i]->getImagen())) .' " width="100%" height="100%" class="img-rounded img-responsive"/></td>';
                    /*if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                        echo "<td>". $mascotas[$i]->getCodMascota() ."</td>";
                    }*/
                    echo "<td class=''>";
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                        echo '<p class="text-center">'. $mascotas[$i]->getCodMascota() .'</p>';
                    }
                    echo '<h2 class="text-center">'.$mascotas[$i]->getNombre().'</h2>';
                    echo '<p class="text-center">Edad: '.$mascotas[$i]->getEdad().'</p>';
                    echo '<ul class="list-inline text-center">';
                        echo '<li> Vacunado: '. $mascotas[$i]->getVacunado().'</li>';
                        echo '<li> Esterilizado: '. $mascotas[$i]->getEsterilizado().'</li>';
                        echo '<li> Micrhochip: '.$mascotas[$i]->getMicrohip() .'</li>';
                    echo '</ul>';
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                        echo '<ul class="list-inline text-center">';
                            echo "<li>". $mascotas[$i]->getFechaLlegada() ."</li>";
                            echo "<li>". $mascotas[$i]->getFechaReserva() ."</li>";
                        echo '</ul>';
                        echo '<ul class="list-inline text-center">';
                            echo '<li><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&pagina=eliminarMascota" title="Eliminar Mascota">Eliminar</a></li>';
                            echo '<li><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=editarMascota" title="Editar Mascota">Editar</a></li>';
                        echo '</ul>';
                    
                    } 
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario' && is_null($mascotas[$i]->getFechaReserva())){
                        echo '<p class="text-center"><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=reservaMascota" title="Reservar Mascota">Reservar</p></td>';
                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario' && $_SESSION['usuario']->getCodUsuario()!=$mascotas[$i]->getCodUsuario()){
                        echo '<p class="text-center" style="color:red;">Reservado</p>';

                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario' && $_SESSION['usuario']->getCodUsuario()==$mascotas[$i]->getCodUsuario()){
                        echo '<p class="text-center"><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=anularReserva" title="Anular reserva Mascota">Anular Reserva</p></td>';

                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador' && is_null($mascotas[$i]->getFechaReserva())){
                        echo '<p class="text-center" style="color:green;">Disponible</p>';
                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador' && $mascotas[$i]->getFechaReserva()!=Null){
                        echo '<p class="text-center" style="color:red;">Reservado</p>';
                    } 
                    echo "</td>";
                    echo "</tr>";
                    
            }
            ?>
            </tbody>   
        </table>
  </div>
</div>

<div class="container-fluid">
    <div class="col-md-12">
        <form name="formulario" class="" action="index.php?pagina=mtoMascotas2" method="post" >
        <div class="row">
            <div class="col-md-12"></div>
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <nav aria-label="pagination example">
                    <ul class="pagination pg-blue mb-0">
                        <?php
                        if($_GET['numeroPagina']==1){
                            ?>
                            <li class="page-item disabled"><a class="page-link">&laquo;</a></li>

                            <li class="page-item active"><a class="page-link"><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item <?php if($numeroPaginas==1 || $numeroPaginas==0){echo 'disabled';}?>"><a class="page-link" href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']+1;?>&pagina=mtoMascotas2">&raquo;</a></li>
                            <?php
                        }elseif ($_GET['numeroPagina']<$numeroPaginas){
                            ?>
                            <li class="page-item"><a class="page-link"href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']-1;?>&pagina=mtoMascotas2">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href=""><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item"><a class="page-link"href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']+1;?>&pagina=mtoMascotas2">&raquo;</a></li>
                            <?php
                        }elseif ($_GET['numeroPagina']==$numeroPaginas){
                            ?>
                            <li class="page-item"><a class="page-link" href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']-1;?>&pagina=mtoMascotas2">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href=""><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-5"></div>
        </div>
</form>
</div>
</div>

