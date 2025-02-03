document.querySelectorAll('.editarTarea').forEach((e)=>{
    e.addEventListener('click', ()=>{
        document.querySelector('.editFormContainer').classList.toggle('hidden');
    });
});

document.querySelectorAll('.borrarTarea').forEach((e)=>{
    e.addEventListener('click', ()=>{
        document.querySelector('.deleteFormContainer').classList.toggle('hidden');
    });
});




document.querySelector('.editFormContainer .close').addEventListener('click', ()=>{
    document.querySelector('.editFormContainer').classList.add('hidden');
});

document.querySelector('.deleteFormContainer .close').addEventListener('click', ()=>{
    document.querySelector('.deleteFormContainer').classList.add('hidden');
});