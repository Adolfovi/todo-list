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
    if (event.key === "O") { 
        window.location.href="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExYWNjaDcyZHVnaGF6Z29vNnA3d2gyNnFmNHdiMm9va3AzejFkamNvNyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/arXyCBxVhhHG0/giphy.gif";
    }
});