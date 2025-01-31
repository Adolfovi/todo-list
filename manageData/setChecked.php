<?php
require("./manageData/connection.php");

if (isset($_POST['setChecked'])) {
    $identificator = $_POST['identificator'];
    $newCheckedValue = ($_POST['setChecked'] == '1') ? 0 : 1;
    $consulta = "UPDATE messages SET checked='$newCheckedValue' WHERE identificator='$identificator'";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        header('Location: index.php');  // Redirige para evitar resubmit
        exit();
    } else {
        echo "Error al actualizar tarea: " . mysqli_error($conn);
    }
}
