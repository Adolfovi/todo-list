document.querySelectorAll('.editarTarea').forEach((e)=>{
    e.addEventListener('click', ()=>{
        document.querySelector('.editFormContainer').classList.toggle('hidden');
    });
});

document.querySelectorAll('.borrarTarea').forEach((e)=>{
    e.addEventListener('click', ()=>{
        document.querySelector('.deleteFormContainer').classList.toggle('hidden');
        document.querySelector('.deleteFormContainer .Form form input[name="identificator"]').value = e.parentNode.parentNode.querySelector('form').querySelector('input[name="identificator"]').value

    });
});




document.querySelector('.editFormContainer .close').addEventListener('click', ()=>{
    document.querySelector('.editFormContainer').classList.add('hidden');
});

document.querySelector('.deleteFormContainer .close').addEventListener('click', ()=>{
    document.querySelector('.deleteFormContainer').classList.add('hidden');
    document.querySelector('.deleteFormContainer .Form form input[name="identificator"]').value = ''
    



});

document.addEventListener("keydown", function(event) {
    if (event.key === "W") { 
        window.location.href="https://i.giphy.com/ieBWQkIVEELhbizGAp.webp";
    }
});

document.querySelectorAll('.editarTarea').forEach((boton) =>{
    boton.addEventListener('click', (event) =>{
        const editContainer = document.querySelector('.editFormContainer');
        const inputEditar = document.querySelector('.editFormContainer input[name="tarea"]');
        const identificatorInput = document.querySelector('.editFormContainer form input[name="identificator"]');

        const tareaDiv = event.target.closest('.tarea');

        const tareaTexto = tareaDiv.querySelector('span').textContent;

        const TareaID = tareaDiv.querySelector('form input[name="identificator"]').value;

        inputEditar.value = tareaTexto;

        identificatorInput.value = tareaID;

        editContainer.classList.remove('hidden');

    });
});

document.querySelector('.editFormContainer .closeContainer').addEventListener('click', () => {
    document.querySelector('.editFormContainer').classList.add('hidden');
});



document.querySelectorAll('.editarTarea').forEach((e)=>{
    e.addEventListener('click', ()=>{
        document.querySelector('#editarTarea input[name="identificator"]').value = e.parentNode.parentNode.querySelector("input[name='identificator']").value;
    });
});