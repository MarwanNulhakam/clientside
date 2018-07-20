<?php
    include 'highchartheader.php';
    include 'chartgenerator.php';
    include 'actualgraphicgenerator.php';
    include 'dbmodel.php';
    
    function callingchart($container,$chartproperties){    
        
        echo "<div id=".$container."></div>";
        
        $xseries = $chartproperties["xseries"];
        $yseries1 = $chartproperties["yseries1"];
        $yseries2 = $chartproperties["yseries2"];
        $tablename = $chartproperties["tablename"];
        
        $date = "tanggal = '".(strlen($chartproperties["date"]) > 6  ? $chartproperties["date"]: date("Y-m-d"))."'";
        $series1 = doQueryAsArray(generateQuery($yseries1,$tablename,$date),$yseries1);
        $series2 = doQueryAsArray(generateQuery($yseries2,$tablename,$date),$yseries2);
        $waktu = doQueryAsArray(generateQuery($xseries,$tablename,$date),$xseries);
        
        chartgenerator($container,
                    array(
                        "chartTitle" => $chartproperties["chartTitle"],
                        "varLabel1" => $chartproperties["varLabel1"],
                        "varLabel2" => $chartproperties["varLabel2"],
                        "yLabel" => $chartproperties["yLabel"],
                        "series1" => str_replace("\"","",json_encode($series1)),
                        "series2" => str_replace("\"","",json_encode($series2)),
                        "waktu" => json_encode($waktu)
                    )
        );
    }
?>