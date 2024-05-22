<?php
    $host = "db";
    $usuario = "root";
    $pass = "test";
    $base = "reservas";

    // CONEXIÓN BD
    $bd = mysqli_connect($host, $usuario, $pass, $base);
    // mysqli_select_db($bd, $base) si no se pone al conectar arriba;

    // COMPROBACIÓN ERROR
    if (mysqli_connect_errno() != 0)
        echo "Error: " . mysqli_connect_error(); // error da el mensaje del error

    mysqli_close($bd);
?>