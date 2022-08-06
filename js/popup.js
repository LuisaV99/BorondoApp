
const menu = document.querySelector(".cont-menu");
const ul = document.querySelector("ul");
 
menu.addEventListener("click", ()=>{
    ul.classList.toggle("active");
});
const bang = document.querySelector(".bandera-idioma");
const idioma = document.querySelector(".cont-idioma");
 
bang.addEventListener("click", ()=>{
    idioma.classList.toggle("activo");
});


