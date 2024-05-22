//Ejecutar función en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//Declaramos variables
let side_menu = document.getElementById("menu_side");
let btn_open = document.getElementById("btn_open");
let body = document.getElementById("body");
/* const links_menu = document.querySelectorAll(".links_menu"); */


//Evento para mostrar y ocultar menú
    function open_close_menu(){
        body.classList.toggle("body_move");
        side_menu.classList.toggle("menu__side_move");
    }
/* document.addEventListener('DOMContentLoaded', () =>{
    processMenu();
    console.log(links_menu);
    console.log("algo");
})

function processMenu(){
    links_menu.forEach(links => {
        links.addEventListener("click", () =>{
            links_menu.forEach(linksof =>{
                linksof.classList.remove("selected");
            });
    
            links.classList.add("selected");
        } );
    })
} */


//Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página

if (window.innerWidth > 760){

    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//Haciendo el menú responsive(adaptable)

window.addEventListener("resize", function(){

    if (window.innerWidth > 760){

        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if (window.innerWidth < 760){

        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

});


