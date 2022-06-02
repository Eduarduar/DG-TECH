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

const boton_menu = document.getElementById("boton_menu");
const menu_responsivo = document.getElementById("menu_responsivo");

var indicador2 = 0;

boton_menu.addEventListener('click', () => {
    if (indicador2 == 0){
        indicador2 = 1;
        menu_responsivo.classList.add("container-menu_responsive-active");
        menu_responsivo.classList.remove("container-menu_responsive");
    }else if (indicador2 == 1){
        indicador2 = 0;
        menu_responsivo.classList.add("container-menu_responsive");
        menu_responsivo.classList.remove("container-menu_responsive-active");
    }
});

