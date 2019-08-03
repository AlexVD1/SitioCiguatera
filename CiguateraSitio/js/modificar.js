let modalm = document.getElementById('ModalMod');
let flexm = document.getElementById('flexm');
let abrirm = document.getElementById('mod-nom');
let cerrarm = document.getElementById('closem');

abrirm.addEventListener('click', function(){
    modalm.style.display = 'block';
});

cerrarm.addEventListener('click', function(){
    modalm.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flexm){
        modalm.style.display = 'none';
    }
});
