<?php
    require './graficos.php';


    $MG = new Modelo_Grafico();
    $consulta = $MG -> TraerDatosGraficosBar() ;
    echo json_encode($consulta);
?>