<?php

    session_start();
    session_destroy();
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://shiranaisaito.000webhostapp.com/Adaptativo/conexionpublicaciones/css/estilo.css">
    <title>Inventario de compras</title>
</head>
<body>
    
    <center>
        <tr>Indice de Historietas</tr>
        <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Que compro?</th>
                        <th>Precio</th>
                        <th>Donde</th>
                        <th>Cuando</th>
                      
                        <th>Imagen</th>
                    </tr>
                </thead>
        
    
    <!--------------TITULOS------------------------------------------->
        <tbody>
            <?php
                include ("open.php");
                $consulta = "SELECT * FROM compras";
                $resultado = $conexion->query($consulta);
                while($row = $resultado->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['nombre']; ?> </td>
                    <td><?php echo $row['que compro']; ?> </td>
                    <td><?php echo $row['cuanto']; ?> </td>
                    <td><?php echo $row['donde']; ?> </td>
                    <td><?php echo $row['cuando']; ?> </td>
                    <td> <img width="50px" src="data:image/jpg;base64, <?php echo base64_encode ($row['Imagen']);?>">  </td>
                </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
    </center>
</body>
</html>