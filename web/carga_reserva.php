<?php

    require_once("connexio.php");

    $i = $_REQUEST["compania"];

    switch ($i) {

        case 1: $tabla = "iberia"; break;
        case 2: $tabla = "ryanair"; break;
        case 3: $tabla = "vueling"; break;
        case 4: $tabla = "air_europa"; break;
    }
 
    // CONSULTA
    $consulta = "SELECT * FROM $tabla"; // Mundos del juego correspondiente
    $resultado = mysqli_query($bd, $consulta);

    // NO ES IGUAL CONNECT_ERRNO QUE SIMPLEMENTE ERRNO, QUE ES PARA OPERACIONES
    if (mysqli_errno($bd) != 0)
        echo "Errada: " . mysqli_error($bd);

    // NÚMERO DE FILAS DEVUELTAS
    $totalFilas = mysqli_num_rows($resultado);
    switch($totalFilas){
        case 0:
            ?><h3 class="resultats">No se han encontrado reservas.</h3><?php break;
        case 1:
            ?><h3 class="resultats"><?=$totalFilas?> reserva encontrada.</h3><?php break;
        default:
            ?><h3 class="resultats"><?=$totalFilas?> reservas encontradas.</h3><?php break;
    }

    if($totalFilas > 0){
?>
        <table>
        <tr><th>ID Reserva</th><th>Ida</th><th>Vuelta</th><th>Origen</th><th>Destino</th><th>Nombre</th><th>Apellidos</th><th>DNI</th></tr>
<?php
    
        // MOSTRAR CADA MUNDO
        while ($fila = mysqli_fetch_assoc($resultado)) {

            $id = $fila["ID"];
            $ida = $fila["Ida"];
            $vuelta = $fila["Vuelta"];
            $origen = $fila["Origen"];
            $destino = $fila["Destino"];
            $nombre = $fila["Nombre"];
            $apellidos = $fila["Apellidos"];
            $dni = $fila["DNI"];
?>
        <tr><td><?= $id ?></td><td><?= $ida ?></td><td><?= $vuelta ?></td><td><?= $origen ?></td><td><?= $destino ?></td><td><?= $nombre ?></td><td><?= $apellidos ?></td><td><?= $dni ?></td></tr>
<?php
        }
?>
    </table>
<?php
    }
    // VACIAR EL ARRAY DE RESULTADOS Y PODER HACER OTRA
    mysqli_free_result($resultado);

    