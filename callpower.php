<?php
    include 'highchartheader.php';
    include 'chartgenerator.php';
    include 'actualgraphicgenerator.php';
    include 'dbmodel.php';
    
    function getDaya($date){
        $tegangan = doQueryAsArray(generateQuery("v1","merit",$date),"v1");
        $arus = doQueryAsArray(generateQuery("i1","merit",$date),"i1");
        
        for($i=0;$i<count($tegangan);$i++){
            $series[$i] = $tegangan[$i] * $arus[$i];
        }
        
        return $series;
    }
    
    function getTotalDayaBulanan($bulan){
        $tot = 0;
        $d = getDaya("tanggal LIKE '2018-".($bulan < 10 ? "0":"").($bulan)."-%'");
        for($j=0;$j<count($d);$j++){
            $tot = $tot + $d[$j];
        }
        return $tot;
    }
    
    function getTotalDayaSetahun(){
        $total = array(0,0,0,0,0,0,0,0,0,0,0,0);
        for($i=0;$i<12;$i++){
            $total[$i] = getTotalDayaBulanan($i+1);
        }
        return $total;
    }
    
    function powerchart($container,$chartproperties){    
        
        echo "<div id=".$container."></div>";
        
        $xseries = $chartproperties["xseries"];
        $yseries = $chartproperties["yseries"];
        $tablename = $chartproperties["tablename"];
        
        $date = "tanggal = '".(strlen($chartproperties["date"]) > 6  ? $chartproperties["date"]: date("Y-m-d"))."'";
        $waktu = doQueryAsArray(generateQuery("waktu",$tablename,$date),"waktu");
        $series = getDaya($date);
        
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
    
    function accPowerChart($container,$chartproperties){
        echo "<div id=".$container."></div>";
        
        $xseries = $chartproperties["xseries"];
        $yseries = $chartproperties["yseries"];
        $tablename = $chartproperties["tablename"];
        
        $series = getTotalDayaSetahun();
        $waktu = array(
            'januari',
            'februari',
            'maret',
            'april',
            'mei',
            'juni',
            'juli',
            'agustus',
            'september',
            'oktober',
            'november',
            'desember'
        );
        
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