document.querySelector('.insert-icon').addEventListener('click', ()=>{
    document.querySelector('.insert-form-container').classList.toggle('hidden');
});

document.querySelector('.delete-icon').addEventListener('click', ()=>{
    document.querySelector('.delete-form-container').classList.toggle('hidden');
});

document.querySelector('.edit-icon').addEventListener('click', ()=>{
    document.querySelector('.edit-form-container').classList.toggle('hidden');
});





/* Esto ocurrirá cuando le demos click a cualquier identificador de los registros generados */
document.querySelectorAll(".identificator").forEach((id) => {
    id.addEventListener("click", ()=>{
        document.querySelector('#input-identificator').value= id.innerHTML;
        document.querySelector('#input-edit-identificator').value= id.innerHTML;
        document.querySelector('#input-edit-mail').value= id.parentNode.parentNode.querySelector('.account-main').firstElementChild.innerHTML.substring(16,100);
        document.querySelector('#input-edit-password').value= id.parentNode.parentNode.querySelector('.account-main').firstElementChild.nextElementSibling.innerHTML.substring(10,100);
        
    });
  });