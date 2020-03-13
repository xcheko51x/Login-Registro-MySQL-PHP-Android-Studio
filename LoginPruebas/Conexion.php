<?php

    // VARIABLES QUE ALMACENAN LA CONEXION A LA BASE DE DATOS
    $mysqli = new mysqli(
        "localhost",
        "root",
        "",
        "loginpruebas"
    );

    // COMPROBAMOS LA CONEXION
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        // echo "Conexion exitosa";
    }

?>