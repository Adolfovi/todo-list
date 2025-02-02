document.querySelectorAll('.editarTarea').forEach((e)=>{
    e.addEventListener('click', ()=>{
        document.querySelector('.editFormContainer').classList.toggle('hidden');
    });
});

document.querySelector('.editFormContainer .close').addEventListener('click', ()=>{
    document.querySelector('.editFormContainer').classList.add('hidden');
});