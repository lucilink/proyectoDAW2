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

<h3 class="text-center">Mantenimiento de Mascotas</h3>

<!--Formulario en el que mostraremos el cuadro de búsqueda y una tabla con los resultados devueltos por la base de datos-->
<form name="formulario" class="" action="index.php?pagina=mtoMascotas" method="post" >
    <fieldset>
        <div class="row">
            
            <a href="index.php?pagina=inicio" class="text-white"><button type="button" class="btn btn-primary"><i class="fa fa-home"></i> Inicio</button></a>

        </div>
        <br>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Tipo MASCOTA:</label>
            <div class="col-sm-8">

                <input type="text" class="form-control" id="alfabetico" name="Tipo"
                       placeholder="" <?php if (isset($_SESSION['criterioBusqueda'])){
                    echo 'value="', $_SESSION['criterioBusqueda'], '"';
                } ?>>

            </div>
            <div class="col-sm-2">
                <div class="float-right">
                    <input type="submit" name="buscar" class="btn btn-rounded btn-default" value="Buscar"/>
                </div>
            </div>
        </div>


        <table class="table">
            <thead class="mdb-color darken-3">
            <tr class="text-white">
                <th class="text-center">Imagen</th>
                <th>CodMascota</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th class="text-center">Vacunado</th>
                <th class="text-center">Microchip</th>
                <th class="text-center">Esterilizado</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Fecha Llegada</th>
            </tr>
            </thead>
            <tbody>
            <?php
            /**
             * Obtenemos los registros de la base de datos los recorremos cargándolos en una tabla.
             * //$mascotas[$i]->getImagen()
             */
            //'<img src="data:image/jpeg;base64,'.base64_encode(stripslashes($imagen->Imagen)) .' "/>'
            for ($i=0;$i<count($mascotas);$i++){
                //if(is_null($usuarios[$i]->getFechaBajaUsuario())){
                    echo "<tr class='table-info'>";
                    echo '<td><img src="data:image/jpeg;base64,'.base64_encode(stripslashes($mascotas[$i]->getImagen())) .' " width="50%" height="50%"/></td>';
                   // echo "<td class='text-center'><img src="data:image/jpeg;base64,'.base64_encode(stripslashes($imagen->Imagen)) .' "/></td>";
                    echo "<td>". $mascotas[$i]->getCodMascota() ."</td>";
                    echo "<td>". $mascotas[$i]->getNombre() ."</td>";
                    echo "<td>". $mascotas[$i]->getEdad() ."</td>";
                    echo "<td>". $mascotas[$i]->getVacunado() ."</td>";
                    echo "<td>". $mascotas[$i]->getMicrohip() ."</td>";
                    echo "<td>". $mascotas[$i]->getEsterilizado() ."</td>";
                    echo "<td>". $mascotas[$i]->getTipo() ."</td>";
                    echo "<td>". $mascotas[$i]->getFechaLlegada() ."</td>";
                    /*echo '<td class="text-center"><a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=modificarUsuario" title="Editar Usuario"><i class="fa fa-pencil"></i> </a>/ 
                        <a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=bajaUsuario" title="Eliminar usuario"><i class="fa fa-trash"></i> </a>/
                            <a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=bajaLogicaUsuario" title="Baja Logico"><i class="fa fa-arrow-down" style="color: red"></i></a>
                        </td>';//Creamos los enlaces a las ventanas de eliminar y editar, pasando como uno de los parámetro el código del departamento seleccionado      
                   */ echo "</tr>";     
               /* }else{
                    echo "<tr class='table-danger'>";
                    echo "<td class='text-center'>". $usuarios[$i]->getCodUsuario() ."</td>";
                    echo "<td>". $usuarios[$i]->getDescripcion() ."</td>";
                    echo "<td>". $usuarios[$i]->getPerfil() ."</td>";
                    echo "<td>". $usuarios[$i]->getFechaBajaUsuario() ."</td>";
                    echo '<td class="text-center"><a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=modificarUsuario" title="Editar Usuario"><i class="fa fa-pencil"></i> </a>/ 
                        <a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=bajaUsuario" title="Eliminar usuario"><i class="fa fa-trash"></i> </a>/
                            <a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=rehabilitarUsuario" title="Alta Logico"><i class="fa fa-arrow-up" style="color: green"></i></a>
                        </td>';//Creamos los enlaces a las ventanas de eliminar y editar, pasando como uno de los parámetro el código del departamento seleccionado      
                    echo "</tr>";   
                }*/
            }
            ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col"></div>
            <div class="col">
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
            <div class="col"></div>
        </div>
    </fieldset>
</form>
