<?php  

require("./manageData/insertTask.php");
require("./manageData/getTasks.php");




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="wrapp">
        <h1>Nuestro Gestor de Tareas</h1>

        <form method="post" id="comentarioPrincipal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="tarea" placeholder="Escribe una tarea">
            <input type="submit" name="createTask" value="Añadir Tarea" id="añadirTarea">
        </form>
    
        <div id="lista" class="lista-tareas">
        
    <?php    
    
    for($i = 0; $i<count($tasks); $i++){

        echo '
        
                <div class="tareas">
        <label>
            <input type="checkbox">
            '.$tasks[$i][1].'
            <button class="borrarTarea"> Modificar tarea</button>
        </label>
    </div>
        
        
        
        
        ';


    }
    
    
    
    
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    </div>
    </div>

    <script src=""></script>
</body>
</html>