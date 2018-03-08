<?php
    include 'highchartheader.php';
    include 'chartgenerator.php';
    include 'actualgraphicgenerator.php';
    include 'dbmodel.php';
    
    function powerchart($container,$chartproperties){    
        
        echo "<div id=".$container."></div>";
        
        $xseries = $chartproperties["xseries"];
        $yseries = $chartproperties["yseries"];
        $tablename = $chartproperties["tablename"];
        
        $date = "tanggal = '".(strlen($chartproperties["date"]) > 6  ? $chartproperties["date"]: date("Y-m-d"))."'";
        $tegangan = doQueryAsArray(generateQuery("tegangan",$tablename,$date),"tegangan");
        $arus = doQueryAsArray(generateQuery("arus",$tablename,$date),"arus");
        
        for($i=0;$i<count($tegangan);$i++){
            $series[$i] = $tegangan[$i] * $arus[$i];
        }
        
        $waktu = doQueryAsArray(generateQuery("waktu",$tablename,$date),"waktu");
        
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