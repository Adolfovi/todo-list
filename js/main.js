const input = document.querySelector('input[type="text"]');
const lista = document.getElementById('lista');
const comentarioPrincipal = document.getElementById('comentarioPrincipal');

lista.addEventListener('click', (e) => {
    if (e.target && e.target.classList.contains('borrarTarea')) {
        e.target.closest('.tareas').remove();
        alert("Tarea borrada");
    }
});

comentarioPrincipal.addEventListener('submit', (e) => {
    e.preventDefault();  
    alert("HAS AÑADIDO UNA NUEVA TAREA!");
    AñadirTarea();
});

let AñadirTarea = () => {
    let TextoPrincipal = input.value;
    lista.innerHTML += `
    <div class="tareas">
        <label>
            <input type="checkbox">
            ${TextoPrincipal}
            <button class="borrarTarea"> Borrar tarea</button>
        </label>
    </div>
    `;
    input.value = ''; 
};