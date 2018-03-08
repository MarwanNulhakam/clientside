<?php
    include 'highchartheader.php';
    include 'chartgenerator.php';
    include 'actualgraphicgenerator.php';
    include 'dbmodel.php';
    
    function callingchart($container,$chartproperties){    
        
        echo "<div id=".$container."></div>";
        
        $xseries = $chartproperties["xseries"];
        $yseries = $chartproperties["yseries"];
        $tablename = $chartproperties["tablename"];
        
        $date = "tanggal = '".(strlen($chartproperties["date"]) > 6  ? $chartproperties["date"]: date("Y-m-d"))."'";
        $series = doQueryAsArray(generateQuery($yseries,$tablename,$date),$yseries);
        $waktu = doQueryAsArray(generateQuery($xseries,$tablename,$date),$xseries);
        
        chartgenerator($container,
                    array(
                        "chartTitle" => $chartproperties["chartTitle"],
                        "varLabel" => $chartproperties["varLabel"],
                        "yLabel" => $chartproperties["yLabel"],
                        "series" => str_replace("\"","",json_encode($series)),
                        "waktu" => json_encode($waktu)
                    )
        );
    }
?>