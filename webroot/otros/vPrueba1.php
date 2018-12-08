<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Img</title>
    </head>
    <body>
        <form action="cPrueba1.php" method="post" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        <label for="imagen">Nombre</label>
                    </td>
                    <td>
                        <input type="text" name="nombre">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="imagen">Imagen</label>
                    </td>
                    <td>
                        <input type="file" name="imagen">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="submit" name="enviar" value="agregar imagen">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        require_once 'config.php';
        try{
            $conexion = new PDO(DATOSCONEXION, USER,PASSWORD); //establecemos la conexion
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta ="select * from Imagenes";
            $resultado = $conexion->query($consulta);
            while ($imagen = $resultado->fetch(PDO::FETCH_OBJ)){
                echo $imagen->nombre."<br>";
                echo '<img src="'.$imagen->foto.'" width="100" height="100" >';
               
            }
            

        } catch (PDOException $exception) { //capturamos la excepcion en caso de que haya habido algun error
            echo $exception->getMessage(); //Mostramos el mensaje de error por pantalla

        } finally {
            unset($conexion);
        }
        
        ?>
    </body>

