# todo-list

**DOCUMENTACIÓN GESTOR DE TAREAS**

Nuestro programa consiste en un Gestor de Tareas. En este caso, nuestro Gestor de Tareas consiste en una página web con una base de datos asociada en ella. Por tanto, nos hemos distribuido el trabajo en dos polos, el front (aspecto visual y estructura de la web) y el back (las funcionalidades de nuestro programa).

**PASOS PARA PODER DESCARGAR NUESTRO PROGRAMA**


1- Iniciar Github y buscar el usuario Adolfovi.

Lo primero que debe de hacer es crear una cuenta de GitHub, que  es una plataforma online para almacenar y gestionar código usando Git. Permite colaborar, hacer seguimiento de cambios y trabajar en proyectos con otros desarrolladores.

En este primer paso, después de haber creado o iniciado sesión a tu cuenta de GitHub busque la cuenta Adolfovi y  buscar entre sus repositorios el repositorio llamado todo-list y pulse el botón verde que pone “ <> Code” y copie su HTTPS.

2- Clonar repositorio en Git Bash.

Tras copiar el HTTPS del repositorio todo-list, debe de ir a su escritorio y con click derecho entrar en el apartado de Git Bash. Si en caso de no tener Git Bash, puede descargarlo a través de la página oficial de Git .

Después de entrar en Git Bash use el comando “git clone url” para clonar el repositorio, quedará de esta forma: 

3- 
Borrar todo el contenido de htdocs y mover el repositorio clonado dentro.

Cuando ya tengamos clonado nuestro repositorio todo-list debemos ir a nuestro explorador de archivos, buscamos la carpeta xampp y entramos en ella. Lo primero que veremos son muchas carpetas pero nosotros entraremos en la carpeta llamada htdocs y movemos en ella nuestro repositorio clonado todo-list. 

4- Entrar en XAMPP e iniciar Apache y MySQL.

Como nuestro programa está enlazada con una base de datos, en este paso se debe de descargar XAMPP, para eso se debe de acceder a su página oficial de descargas, elegir la versión que corresponda a tu sistema operativo y versión de PHP que prefieras, se recomienda instalar la versión más reciente de XAMPP que es la 8.2.12, lanzada el 19 de noviembre de 2023.

Después de instalar XAMPP verá un panel de control con distintos módulos (Apache, MySQL, FileZilla, Mercury, Tomcat). En este caso, váyase al apartado de Actions y active Apache y MySQL.

5- 
Entrar en phpMyAdmin.

Desde el panel de XAMPP ir al Módulo de MySQL y pulsar el botón de Admin. Tras pulsarlo os ⁷encontraréis en phpMyAdmin, que permite administrar bases de datos desde un navegador web.

Ya dentro en phpMyAdmin lo primero que debemos de hacer es ir al apartado de Nuevo  a la izquierda de la imagen y  crear una base de datos llamada todolist. Después de crear la base de datos ir a la pestaña de importar (parte superior a la derecha de la imagen), para importar nuestro archivo sql en la que contiene nuestra base de datos.

Nos llevará a una pestaña donde debemos de importar nuestra base de datos en archivo sql. En este caso, debemos de ir a la dirección que se encuentra nuestro repositorio clonado e  importar nuestra base de datos en forma de archivo sql.

Tras completar la importación, la base de datos de nuestro programa estará activa. Por tanto, nuestro programa funcionará.

Finalmente introduzca en el buscador de su navegador “localhost/todo-list” y le aparecerá nuestro Gestor de Tareas.

**CÓMO USAR EL GESTOR DE TAREAS.**

A continuación se explicará paso a paso cada una de las fases y funcionalidades del Gestor de Tareas.

1. CREAR TAREA

Para crear una tarea debemos de introducir la tarea que queremos dentro de la caja y pulsar el botón de Añadir Tarea. Tras estos pasos se creará y mostrará correctamente la tarea.

2. EDITAR TAREA

Cada tarea creada tendrá varias funcionalidades, una de ellas es la opción de editar la tarea. Lo único que debe de hacer es pulsar el emoticono de modificar tarea y arriba le aparecerá una pestaña para realizar la modificación. Inmediatamente al confirmar se modificará la tarea.

3. MARCAR LA TAREA COMPLETADA O NO.

Otra de las funcionalidades es la de marcar o no la tarea como completada. En este caso, se encuentra como una casilla en cada tarea creada al igual que las funcionalidades nombradas anteriormente. Al principio estará de color en rojo porque no estará marcada como completada, mientras que si se marca como completada la caja se pondra en verde y eso significa que la tarea se ha realizado.

4. BORRAR TAREA

Finalmente una de las otras funcionalidades es la de Borrar Tarea, al igual que la opción de editar tarea y marcar como completada se puede encontrar dentro de la tarea creada. Solo se debe de pulsar el emoticono de borrar tarea y confirmar si quiere o no borrar la tarea.








