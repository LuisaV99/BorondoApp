<?php
    require './graficos.php';


    $MG = new Modelo_Grafico();
    $consulta = $MG -> TraerDatosGraficoAnual() ;
    echo json_encode($consulta);

?>