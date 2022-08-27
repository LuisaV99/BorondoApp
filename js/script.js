const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text"),
      tiempo = document.querySelector ('.tiempo'),
      fecha = document.querySelector ('.fecha')

    /* Reloj */
function digitalClock() {

    let f = new Date(),
    dia = f.getDate(),
    mes = f.getMonth() + 1,
    anio = f.getFullYear(),
    diaSemana = f.getDay();

    dia = ('0' + dia).slice(-2);
    mes = ('0' + mes).slice(-2)
      
    let timeString = f.toLocaleTimeString();
    tiempo.innerHTML = timeString;
      
    let semana = ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'];
    let showSemana = (semana[diaSemana]);
    fecha.innerHTML = `${anio}-${mes}-${dia} ${showSemana}`

    }
      setInterval(() => {
          digitalClock()
      }, 1000);


/* Modo oscuro + nav */
toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo claro";
    }else{
        modeText.innerText = "Modo oscuro";
        
    }
});




