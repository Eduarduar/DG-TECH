const nav  = document.querySelector('.header');
const activador = document.getElementById('activador');
const subMenu = document.getElementById('lista');

var indicador = 0;

activador.addEventListener('click', () => {
   if (indicador == 0){
    subMenu.classList.remove('lista');
    subMenu.classList.add('lista_active');
    activador.classList.remove('fa-chevron-right');
    activador.classList.add('fa-chevron-left');
    indicador = 1;
   }else if (indicador == 1){
    subMenu.classList.remove('lista_active');
    subMenu.classList.add('lista');
    activador.classList.remove('fa-chevron-left');
    activador.classList.add('fa-chevron-right');
    indicador = 0;
   }
    
});

window.addEventListener('scroll', function(){

    nav.classList.toggle('active', window.scrollY > 35);

});