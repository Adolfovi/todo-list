<?php

require("./manageData/connection.php");

if (isset($_POST['createTask'])) {
    // Obtenemos los datos del formulario
    $fecha = (new DateTime())->format('Y-m-d H:i:s');
    $mensaje = trim($_POST['tarea']);
    $identificator = substr(str_shuffle("aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ"), 0, 10);

    // Preparar la consulta SQL
    $consulta = "INSERT INTO messages (identificator, message, fecha) VALUES ('$identificator', '$mensaje', '$fecha')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conn, $consulta);

    // Verificar si la consulta fue exitosa
    if ($resultado) {
        header('Location: index.php');
    } else {
        // Si hubo un error, mostrar el error
        echo "Error al insertar en la base de datos: " . mysqli_error($conn);
    }
}






