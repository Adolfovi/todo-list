<?php

require("./manageData/connection.php");

if (isset($_POST['deleteTask'])) {
    // Obtenemos los datos del formulario
    $identificator = trim($_POST['identificator']);

    // Preparar la consulta SQL
    $consulta = "DELETE FROM messages WHERE identificator='$identificator'";

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






