<?php
        
    if(isset($_GET["container"])){
        $container = $_GET["container"];
    }else{
        $container = "chartcontainer2";
    }
    
    echo "<div id=".$container."></div>";
    
    $xseries = "waktu";
    $yseries = "arus";
    $tablename = "merit";
    $tegangan = doQueryAsArray(generateQuery($yseries,$tablename,1),$yseries);
    $waktu = doQueryAsArray(generateQuery($xseries,$tablename,1),$xseries);
    
    chartgenerator($container,
                array(
                    "chartTitle" =>"Monitor Arus",
                    "varLabel" => "Arus (mA)",
                    "yLabel" => "Arus per Menit",
                    "tegangan" => str_replace("\"","",json_encode($tegangan)),
                    "waktu" => json_encode($waktu)
                )
    );
?>