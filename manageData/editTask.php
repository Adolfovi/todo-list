<?php
require("./manageData/connection.php");

if (isset($_POST['editTask'])) {
    $identificator = trim($_POST['identificator']);
    $mensaje = trim($_POST['tarea']);
    $consulta = "UPDATE messages SET message='$mensaje' WHERE identificator='$identificator'";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        header('Location: index.php');  // Redirige para evitar resubmit
        exit();
    } else {
        echo "Error al actualizar tarea: " . mysqli_error($conn);
    }
}
