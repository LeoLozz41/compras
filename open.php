<?php

    $conexion = new mysqli("localhost","id18340338_theackerman","Kiralozano4177$","id18340338_publicaciones");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo en la conexion";
    }


?>

