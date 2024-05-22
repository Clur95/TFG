<?php

    function insertaReserva($i){
        
        include("connexio.php");

        $fechaIda = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["fechaIda" . $i])));
        $fechaVuelta = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["fechaVuelta" . $i])));
        $origen = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["origen" . $i])));
        $destino = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["destino" . $i])));
        $dni = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["dni" . $i])));
        $nombre = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["nombre" . $i])));
        $apellidos = trim(preg_replace("/\s+/", " ", mysqli_escape_string($bd, $_REQUEST["apellidos" . $i])));

        $fechaIda = !empty($fechaIda) ? "'$fechaIda'" : "NULL";
        $fechaVuelta = !empty($fechaVuelta) ? "'$fechaVuelta'" : "NULL";
        $origen = !empty($origen) ? "'$origen'" : "NULL";
        $destino = !empty($destino) ? "'$destino'" : "NULL";
        $dni = !empty($dni) ? "'$dni'" : "NULL";
        $nombre = !empty($nombre) ? "'$nombre'" : "NULL";
        $apellidos = !empty($apellidos) ? "'$apellidos'" : "NULL";

        switch ($i) {

            case 1: $tabla = "iberia"; break;
            case 2: $tabla = "ryanair"; break;
            case 3: $tabla = "vueling"; break;
            case 4: $tabla = "air_europa"; break;
        }
        $insertar = "INSERT INTO $tabla (Ida, Vuelta, Origen, Destino, Nombre, Apellidos, DNI) VALUES ($fechaIda,$fechaVuelta,$origen,$destino, $nombre, $apellidos, $dni)";

        $resultado = mysqli_query($bd, $insertar);

        if (mysqli_errno($bd) != 0)
            header("Location:index.php"); // Error en la insercion
    }

    $i = $_REQUEST["i"];
    insertaReserva($i);

    require_once("tanca_connexio.php");

    