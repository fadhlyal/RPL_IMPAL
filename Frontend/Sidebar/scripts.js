const menu  = document.getElementById('menu-button');
const sidebar  = document.getElementsByClassName('sidebar')[0];

menu.addEventListener('click', function(){
    sidebar.classList.add('hide');
}) 