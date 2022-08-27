var btn = document.querySelector('#open'),
    ventana = document.querySelector('.container-main-edit'),
    contador = 0;

    function cambio() {
        if (contador==0){
            ventana.classList.add('azul');
            contador=1;
        }else{
            (ventana.classList.remove('azul'));
            contador=0;
        }
    }

    btn.addEventListener('click',cambio,true);

    // modal contestar pqrs


    var abrir = document.querySelector('#contestar-pqrs'),
    contestar = document.querySelector('.container-main-contestadas'),
    cont = 0;

    function set() {
        if (contador==0){
            contestar.classList.add('rojo');
            cont=1;
        }else{
            (contestar.classList.remove('rojo'));
            cont=0;
        }
    }


    abrir.addEventListener('click',set,true);