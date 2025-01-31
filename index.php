<?php
require("./manageData/insertTask.php");
require("./manageData/getTasks.php");
require("./manageData/setChecked.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="wrapp">
    <h1>Gestor de Tareas</h1>

    <!-- Formulario para añadir tarea -->
    <form method="post" id="insertarTarea" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="tarea" placeholder="Escribe una tarea">
        <input type="submit" name="createTask" value="Añadir Tarea" id="añadirTarea">
    </form>

    <!-- Formulario para editar tarea -->
    <form method="post" id="editarTarea" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="editTarea" placeholder="Escribe una tarea">
        <input type="submit" name="editTask" value="Editar Tarea" id="editarTareaSubmit">
        <input type="hidden" name="identificatorforEdit" value="">

    </form>

    <div id="lista" class="lista-tareas">
        <?php
        // Mostrar tareas
        for ($i = 0; $i < count($tasks); $i++) {
            // Establecer el valor de checked (1 o 0) y las clases correspondientes
            $buttonClass = $tasks[$i][2] == 0 ? 'red' : 'green';

            // Mostrar la tarea y el formulario para cambiar el estado
            echo '
                <div class="tarea">
                    <label>
                        <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                            <!-- El valor de setChecked cambia entre 0 y 1 -->
                            <input type="submit" name="setChecked" value="' . $tasks[$i][2] . '" class="' . $buttonClass . '">
                            <input type="hidden" name="identificator" value="' . $tasks[$i][0] . '">
                        </form>
                        ' . $tasks[$i][1] . '
                        <div class="actionButtons">
                        <button class="editarTarea"><img src="edit.png"/></button>
                        <button class="borrarTarea"><img src="delete.png"/></button>                        
                        </div>
                    </label>
                </div>
            ';
        }
        ?>
    </div>
</div>

</body>
</html>
