<?php

    require("Conexion.php");

    // RECIBE LOS DATOS DE LA APP
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $nombre = $_POST['nombre'];

    // DATOS DE PRUEBA
    // $usuario = "laura";
    // $contrasena = "1234";
    // $nombre = "Laura P";

    // VERIFICAMOS QUE NO ESTEN VACIAS LAS VARIABLES
    if(empty($usuario) || empty($contrasena) || empty($nombre)) {

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1";

    } else {

        // CREAMOS LA CONSULTA
        $sql = "INSERT INTO usuarios VALUES('', '$nombre', '$usuario', '$contrasena')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "MENSAJE";

        }
        
    }

?>