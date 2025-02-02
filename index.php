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
<!-- Opción para editar tarea -->
<div id="editModal" class="modal" style = "background: white">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Editar Tarea</h2>
        <form id="editarTareaForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" id="editTareaInput" name="editTarea" placeholder="Modifica la tarea" required>
            <input type="hidden" name="identificatorforEdit" id="editTaskId">
            <input type="submit" name="editTask" value="Guardar Cambios">
        </form>
    </div>
</div>

<script>

    var modal = document.getElementById("editModal");

    // Obtener todos los botones de editar de la tarea
    document.querySelectorAll('.editarTarea').forEach(button => {
        button.addEventListener('click', function() {
            const taskId = this.getAttribute('data-id');
            const taskText = this.getAttribute('data-text');
            document.getElementById('editTareaInput').value = taskText; 
            document.getElementById('editTaskId').value = taskId; 
            modal.style.display = "block"; 
        });
    });

    // Obtener el elemento <span> que cierra el modal
    var span = document.getElementsByClassName("close")[0];

    // Cuando el usuario hace clic en <span> (x), se va a cerrar el modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Cerrar el modal e X si el usuario hace clic sobre de él
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


</body>
</html>
