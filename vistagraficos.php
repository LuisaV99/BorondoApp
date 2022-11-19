<?php 

session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesión');location='InicioSesion.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$document'";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="css/graficos.css">
</head>

<body>
<?php

include 'templates/Navbar.php';

?>

<div class="botones" style="    
    display: flex;
    justify-content: center;
    margin-top: 1%;"            
    ><a href="./Adminpqrs.php" class="btn btn-danger">Regresar</a></div>
    <!-- <nav class="navbar navbar-light bg-light shadow mb-20">
        <div class="container-fluid">
            <a class="" href="#">
                <img src="./assets/borondo.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav> -->

    <!-- <div class="d-flex justify-content-around flex-row pt-5">
        <div class="card text-white bg-primary mb-3 border" style="max-width: 18rem;">
            <div class="card-header">Lugares Activos</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div> -->



    <!-- <div class="w-100 d-flex justify-content-center align-center">
        <h2 class="title">Reportes</h2>
    </div> -->

    <div class="row mt-20">
        <div class="col-lg-12 bg-succes d-flex flex-col justify-content-around flex-wrap" id="reportPage" style="height: auto; margin-top:25px;">

            <div class="col-lg-4">
                <!-- <div class="card shadow mb-5">
                    <h5 class="card-header" id="header-card">FILTRAR REPORTE</h5>
                    <div class="card-body d-flex flex-column justify-content-start">
                        <div class="d-flex flex-column mb-2">
                            <button class="btn btn-outline-primary" onclick="CargarDatosGraficoBar()">Mensual</button>
                        </div>
                        <div class="d-flex flex-column mb-2">
                            <button class="btn btn-outline-primary" onclick="CargarDatosGraficoBarHorizontal()">Anual</button>
                        </div>
                        <div class="d-flex flex-column">
                            <button class="btn btn-outline-danger" onclick="descargarPDF()">Report PDF</button>
                        </div>
                    </div>
                </div> -->

                <div class="card shadow" id="informe_pqrs">
                    <div class="card-header d-flex justify-content-around align-items-center flex-row" id="header-card">
                        <h5 class="mb-0 text-center">INFORME DE PQRS MENSUAL</h5>
                        <a class="d-flex align-items-center" onclick="descargarPDFMensual()">
                            <span class="icon__download"><img src="./images/icons/Download.png" alt=""></span>
                        </a>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div class="container__graficos">
                            <div class="">
                                <canvas id="graficobar" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow" id="informe_pqrs">
                    <div class="card-header d-flex justify-content-around align-items-center flex-row" id="header-card">
                        <h5 class="mb-0 text-center">INFORME DE PQRS ANUAL</h5>
                        <a class="d-flex align-items-center" onclick="descargarPDF()">
                            <span class="icon__download"></span>
                        </a>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div class="container__graficos">
                            <div class="">
                                <!-- <canvas id="graficobar" width="400" height="400"></canvas> -->
                                <canvas id="graficobarhorizontal" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12" style="padding-top: 20px;">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center flex-row" id="header-card">
                <h5 class="mb-0 text-center">LUGARES MAS VISITADOS POR AÑO</h5>
                <!-- <div class="">
                    <button class="btn btn-danger" onclick="proceddonutPDF()">PDF Grafico 2</button>
                </div> -->
            </div>
            <div class="card-body">
                <div class="row module">
                    <div class="col-lg-8 d-flex flex-row" style="margin-bottom:25px;">
                        <div class="col-lg-3">
                            <label for="">Fecha Inicio</label>
                            <select name="" id="select_finicio" class="form-control"></select>
                        </div>
                        <div class="col-lg-3">
                            <label for="">Fecha Fin</label>
                            <select name="" id="select_ffin" class="form-control"></select>
                        </div>
                        <div class="col-lg-3">
                            <label for="">&nbsp;</label><br>
                            <button class="btn btn-success" onclick="CargarGraficosParametro()">Buscar</button>
                        </div>
                    </div>
                    <div class="row w-100 mt-10 d-flex justify-content-around">
                        <!-- <div class="col-lg-4">
                            <canvas id="graficoline_parametro" width="100" height="100"></canvas>
                        </div> -->
                        <div class="col-lg-4">
                            <canvas id="graficopolararea_parametro" width="100" height="100"></canvas>

                            <center>
                                <button class="btn btn-danger mt-4" style="display: none;" id="grafico1" onclick=" procedhistoPDF()">Descargar</button>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <canvas id="graficodoughnut_parametro" width="100" height="100"></canvas>
                            <center>
                                <button class="btn btn-danger mt-4" style="display: none;" id="grafico2" onclick="proceddonutPDF()">Descargar</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js" integrity="sha512-t2JWqzirxOmR9MZKu+BMz0TNHe55G5BZ/tfTmXMlxpUY8tsTo3QMD27QGoYKZKFAraIPDhFv56HLdN11ctmiTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script>
    CargarDatosGraficoBarHorizontal()
    CargarDatosGraficoBar()

    function CargarDatosGraficoBar() {
        $.ajax({
            url: './controlador_grafico.php',
            type: 'POST'
        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                CrearGraficos(titulo, cantidad, colores, 'line', 'GRAFICO LINEAL DE PQRS', 'graficobar');
                // document.getElementById("graficobarhorizontal").style.display = "none";
                // document.getElementById("graficobar").style.display = "block";
            }
        })
    }

    function CargarDatosGraficoBarHorizontal() {
        $.ajax({
            url: './controlador_grafico_anual.php',
            type: 'POST'
        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                CrearGraficos(titulo, cantidad, colores, 'bar', 'GRAFICO EN BARRA DE PQRS', 'graficobarhorizontal');
                // document.getElementById("graficobar").style.display = "none";
                // document.getElementById("graficobarhorizontal").style.display = "block";
            }
        })
    }

    // function CargarDatosGraficoPie() {
    //     $.ajax({
    //         url: './controlador_grafico.php',
    //         type: 'POST'
    //     }).done(function(resp) {
    //         if (resp.length > 0) {
    //             var titulo = [];
    //             var cantidad = [];
    //             var colores = [];
    //             var data = JSON.parse(resp);
    //             for (var i = 0; i < data.length; i++) {
    //                 titulo.push(data[i][1]);
    //                 cantidad.push(data[i][2]);
    //                 colores.push(colorRGB());
    //             }
    //             CrearGraficos(titulo, cantidad, colores, 'pie', 'GRAFICO PIE DE PQRS', 'graficopie');
    //         }
    //     })
    // }

    /* Función para colores aleatorios */

    function generarNumero(numero) {
        return (Math.random() * numero).toFixed(0);
    }

    function colorRGB() {
        var coolor = "(" + generarNumero(255) + "," + generarNumero(255) + "," + generarNumero(255) + ")";
        return "rgba" + coolor;
    }

    /* FUCIONES PARA REPORTES CON PARAMETROS */

    Traeranio();

    function CargarGraficosParametro() {
        // CargarDatosGraficoLine();
        CargarDatosGraficoPolar();
        CargarDatosGraficoDoughnut();

        document.getElementById("grafico1").style.display = "block";
        document.getElementById("grafico2").style.display = "block";
    }

    function Traeranio() {
        var mifecha = new Date();
        var anio = mifecha.getFullYear();
        var cadena = "";
        for (var i = 2015; i < anio + 1; i++) {
            cadena += "<option value=" + i + ">" + i + "</option>";
        }
        $("#select_finicio").html(cadena);
        $("#select_ffin").html(cadena);
    }


    function CargarDatosGraficoLine() {
        var fechainicio = $("#select_finicio").val();
        var fechafin = $("#select_ffin").val();
        $.ajax({
            url: './controlador_grafico_parametro.php',
            type: 'POST',
            data: {
                inicio: fechainicio,
                fin: fechafin
            }
        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                CrearGraficos(titulo, cantidad, colores, 'line', 'GRAFICO LINE DE RESERVAS', 'graficoline_parametro');
            }
        })
    }


    function CargarDatosGraficoPolar() {
        var fechainicio = $("#select_finicio").val();
        var fechafin = $("#select_ffin").val();

        $.ajax({
            url: './controlador_grafico_parametro.php',
            type: 'POST',
            data: {
                inicio: fechainicio,
                fin: fechafin
            }
        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                CrearGraficos(titulo, cantidad, colores, 'bar', 'GRAFICO POLAR AREA DE RESERVAS', 'graficopolararea_parametro');
            }

        })
    }


    function CargarDatosGraficoDoughnut() {
        var fechainicio = $("#select_finicio").val();
        var fechafin = $("#select_ffin").val();

        $.ajax({
            url: './controlador_grafico_parametro.php',
            type: 'POST',
            data: {
                inicio: fechainicio,
                fin: fechafin
            }
        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                CrearGraficos(titulo, cantidad, colores, 'doughnut', 'GRAFICO LINE DE RESERVAS', 'graficodoughnut_parametro');
            }

        })
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    const bgColor = {
        id: 'bgColor',
        beforeDraw: (chart, steps, options) => {
            const {
                ctx,
                width,
                height
            } = chart;
            ctx.fillStyle = options.backgroundColor;
            ctx.fillRect(0, 0, width, height)
            ctx.restore();
        }
    };


    function CrearGraficos(titulo, cantidad, colores, tipo, encabezado, id) {
        const ctx = document.getElementById(id);
        const myChart = new Chart(ctx, {
            type: tipo,
            data: {
                labels: titulo,
                datasets: [{
                    label: encabezado,
                    data: cantidad,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            precision: 0,
                            beginAtzero: true,
                        }
                    }],
                    y: {
                        beginAtZero: true,
                    }
                },
                plugins: {
                    bgColor: {
                        backgroundColor: 'white',
                    },
                },

            },
            plugins: [bgColor]
        });

    };

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    //Gráfico Anual 

    const graficobar = new Chart(
        document.getElementById('graficobarhorizontal'),
        config
    );

    function descargarPDF() {
        const canvas = document.getElementById('graficobarhorizontal');
        // create image
        const canvasImage = canvas.toDataURL('image/jpeg', 1.0);
        const logo = new Image();
        logo.src = './assets/blanco-logo.png';
        console.log(canvasImage)
        // image must go to PDF
        let pdf = new jsPDF('landscape');
        pdf.setFontSize(20);
        pdf.addImage(logo, 'JPEG', 20, 5,30, 30);
        pdf.addImage(canvasImage, 'JPEG', 95, 43, 100, 100);
        pdf.setFontSize(14);
        pdf.setTextColor(0,85,136);
        pdf.setFont("helvetica");
        pdf.setFontType("bold");
        pdf.text('INFORME ANUAL DE PQRS', 115, 20);
        pdf.save('Graficos.pdf');
    };

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    // Gráficos Mensual 

    const graficobarmen = new Chart(
        document.getElementById('graficobar'),
        config
    );

    function descargarPDFMensual() {
        const canvas = document.getElementById('graficobar');
        //create image
        const canvasImage = canvas.toDataURL('image/jpeg', 1.0);
        const logo = new Image();
        logo.src = './assets/blanco-logo.png';
        console.log(canvasImage);
        // image muest to go PDF

        let pdf = new jsPDF('landscape');
        pdf.setFontSize(20);
        pdf.addImage(logo, 'JPEG', 20, 5,30, 30);
        pdf.addImage(canvasImage, 'JPEG', 95, 43, 100, 100);
        pdf.setFontSize(14);
        pdf.setTextColor(0,85,136);
        pdf.setFont("helvetica");
        pdf.setFontType("bold");
        pdf.text('INFORME MENSUAL DE PQRS', 103, 20);
        pdf.save('grafico1.pdf');
        pdf.save('salesrecords.pdf');
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////

    // Procedimientos Almacenados

    const graficoba = new Chart(
        document.getElementById('graficobar'),
        config
    );

    function descargarPDFanual() {
        const canvas = document.getElementById('graficobar');
        //create image
        const canvasImage = canvas.toDataURL('image/jpeg', 1.0);
        const logo = new Image();
        logo.src = './assets/blanco-logo.png';
        console.log(canvasImage);
        // image muest to go PDF

        let pdf = new jsPDF('landscape');
        pdf.setFontSize(20);
        pdf.addImage(logo, 'JPEG', 20, 5,30, 30);
        pdf.addImage(canvasImage, 'JPEG', 95, 43, 100, 100);
        pdf.setFontSize(14);
        pdf.setTextColor(0,85,136);
        pdf.setFont("helvetica");
        pdf.setFontType("bold");
        pdf.text('LUGARES MAS VISITADOS POR AÑO', 103, 20);
        pdf.save('grafico1.pdf');
        pdf.save('salesrecords.pdf');
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////

    // Procedimientos Almacenados

    const procedhisto = new Chart(
        document.getElementById('graficopolararea_parametro'),
        config
    );

    function procedhistoPDF() {
        const canvas = document.getElementById('graficopolararea_parametro');
        //create image
        const canvasImage = canvas.toDataURL('image/jpeg', 1.0);
        const logo = new Image();
        logo.src = './assets/blanco-logo.png';

        console.log(canvasImage);
        // image muest to go PDF

        let pdf = new jsPDF('landscape');
        pdf.setFontSize(20);
        pdf.addImage(logo, 'JPEG', 20, 5,30, 30);
        pdf.addImage(canvasImage, 'JPEG', 95, 43, 100, 100);
        pdf.setFontSize(14);
        pdf.setTextColor(0,85,136);
        pdf.setFont("helvetica");
        pdf.setFontType("bold");
        pdf.text('LUGARES MAS VISITADOS POR AÑO', 103, 20);
        pdf.save('grafico1.pdf');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    // Procedimientos Almacenados

    const procedonut = new Chart(
        document.getElementById('graficodoughnut_parametro'),
        config
    );

    function proceddonutPDF() {
        const canvas = document.getElementById('graficodoughnut_parametro');
        //create image
        const canvasImage = canvas.toDataURL('image/jpeg', 1.0);
        const logo = new Image();
        logo.src = './assets/blanco-logo.png';
        
 
        
        
        console.log(canvasImage);
        // image muest to go PDF
        let pdf = new jsPDF('landscape');
        // pdf.text(35, 25, 'BorondoApp')
        pdf.setFontSize(20);
        pdf.addImage(logo, 'JPEG', 20, 5,30, 30);
        pdf.addImage(canvasImage, 'JPEG', 95, 43, 100, 100);
        pdf.setFontSize(14);
        pdf.setTextColor(0,85,136);
        pdf.setFont("helvetica");
        pdf.setFontType("bold");
        pdf.text('LUGARES MAS VISITADOS POR AÑO', 103, 20);
        pdf.save('grafico2.pdf');
        // document.getElementById("graficobar").style.display = "none";
    }
</script>