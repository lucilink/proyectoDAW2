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
<div class="container">
    <section class="main row"> 
        <div class="col-md-12">
            <form name="formulario" class="" action="index.php?pagina=mtoMascotas" method="post" >
            <br>
                <div class="col-md-4 col-xs-9">
                    <img src="/webroot/img/verMascotas.png" width="50%" height="50%" class="img-rounded img-responsive imgmtomascotas" style="margin-left:40%;"/>                     
                </div>
            <br>
            <!-- Material input -->
                <div class="col-md-5 col-xs-8">
                    <input type="text" class="form-control buscadorMascota" id="alfabetico" name="Tipo"
                           placeholder="Tipo de mascota" <?php if (isset($_SESSION['criterioBusqueda'])){
                        echo 'value="', $_SESSION['criterioBusqueda'], '"';
                    } ?>>

                </div>
                <div class="col-md-3 col-xs-4 ">
                    <div class="float-right">
                        <input type="submit" name="buscar" class="btn btn-rounded btn-default botonBuscadorMascota" value="Buscar"/>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<br>
<div class="container">
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
                    echo '<td width="40%"><img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascotas[$i]->getImagen())) .' " width="100%" height="100%" class="img-rounded img-responsive"/></td>';
                    /*if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                        echo "<td>". $mascotas[$i]->getCodMascota() ."</td>";
                    }*/
                    echo "<td class=''>";
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                        echo '<p class="text-center mascota">'. $mascotas[$i]->getCodMascota() .'</p>';
                    }
                    echo '<h2 class="text-center datosmas">'.$mascotas[$i]->getNombre().'</h2>';
                    echo '<p class="text-center mascota"> '.$mascotas[$i]->getDescripcion().'</p>';
                    echo '<ul class="list-inline text-center">';
                        echo '<li class="mascota"> Edad: '. $mascotas[$i]->getEdad().'</li>';
                        echo '<li class="mascota">'. $mascotas[$i]->getSexo().'</li>';
                    echo '</ul>';                   
                    echo '<ul class="list-inline text-center">';
                        echo '<li class="mascota"> Vacunado: '. $mascotas[$i]->getVacunado().'</li>';
                        echo '<li class="mascota"> Esterilizado: '. $mascotas[$i]->getEsterilizado().'</li>';
                        echo '<li class="mascota"> Micrhochip: '.$mascotas[$i]->getMicrohip() .'</li>';
                    echo '</ul>';
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                        echo '<ul class="list-inline text-center">';
                            echo '<li class="mascota"> Fecha Llegada: '. $mascotas[$i]->getFechaLlegada() .'</li>';
                            if($mascotas[$i]->getFechaReserva()!=Null){
                                echo '<li class="mascota"> Fecha Reserva: '. $mascotas[$i]->getFechaReserva() .'</li>';
                            }
                        echo '</ul>';
                        if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador' && is_null($mascotas[$i]->getFechaReserva())){
                        echo '<ul class="list-inline text-center">';
                            echo '<li class="mascota"><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&pagina=eliminarMascota" title="Eliminar Mascota">Eliminar</a></li>';
                        echo '</ul>';
                        }
                    } 
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario' && is_null($mascotas[$i]->getFechaReserva())){
                        echo '<p class="text-center mascota"><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=reservaMascota" title="Reservar Mascota">Reservar</p></td>';
                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario' && $_SESSION['usuario']->getCodUsuario()!=$mascotas[$i]->getCodUsuario()){
                        echo '<p class="text-center mascota" style="color:red;">Reservado</p>';

                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario' && $_SESSION['usuario']->getCodUsuario()==$mascotas[$i]->getCodUsuario()){
                        echo '<p class="text-center mascota"><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=anularReserva" title="Anular reserva Mascota">Anular Reserva</p></td>';

                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador' && is_null($mascotas[$i]->getFechaReserva())){
                        echo '<p class="text-center mascota" style="color:green;">Disponible</p>';
                    }else if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador' && $mascotas[$i]->getFechaReserva()!=Null){
                       echo '<p class="text-center mascota"><a href="index.php?Mascota='.$mascotas[$i]->getCodMascota().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=anularReserva" title="Anular reserva Mascota">Anular Reserva</p></td>';
                    } 
                    echo "</td>";
                    echo "</tr>";
                    
            }
            if(count($mascotas)==0){?>
            <br>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center">No se han encontrado resultados para su busqueda</h2>
            </div>
            <div class="col-md-2"></div>
            <br>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="/webroot/img/noresult.png" width="50%" height="50%" class="img-rounded img-responsive" style="margin-left:20%;"/>  
            </div>
            <div class="col-md-3"></div>
           <?php }
            
            
            ?>
            </tbody>   
        </table>
  </div>
</div>

<div class="container-fluid">
    <div class="col-md-12">
        <form name="formulario" class="" action="index.php?pagina=mtoMascotas" method="post" >
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
                            <li class="page-item <?php if($numeroPaginas==1 || $numeroPaginas==0){echo 'disabled';}?>"><a class="page-link" href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']+1;?>&pagina=mtoMascotas">&raquo;</a></li>
                            <?php
                        }elseif ($_GET['numeroPagina']<$numeroPaginas){
                            ?>
                            <li class="page-item"><a class="page-link"href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']-1;?>&pagina=mtoMascotas">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href=""><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item"><a class="page-link"href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']+1;?>&pagina=mtoMascotas">&raquo;</a></li>
                            <?php
                        }elseif ($_GET['numeroPagina']==$numeroPaginas){
                            ?>
                            <li class="page-item"><a class="page-link" href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']-1;?>&pagina=mtoMascotas">&laquo;</a></li>
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