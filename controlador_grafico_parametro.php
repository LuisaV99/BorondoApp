<?php
    require './graficos.php';

    $fechainicio = $_POST['inicio'];
    $fechafin = $_POST['fin'];

    $MG = new Modelo_Grafico();
    $consulta = $MG -> TraerDatosGraficoParametro($fechainicio,$fechafin);
    echo json_encode($consulta);
?>