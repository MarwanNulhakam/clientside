<?php
    include 'highchartheader.php';
    include 'chartgenerator.php';
    include 'actualgraphicgenerator.php';
    include 'dbmodel.php';
    
    function getDaya($x,$date){
        if($x==1){
            $var1="v1";
            $var2="i1";
        }else{
            $var1="v2";
            $var2="i2";
        }
        $tegangan = doQueryAsArray(generateQuery($var1,"merit",$date),$var1);
        $arus = doQueryAsArray(generateQuery($var2,"merit",$date),$var2);
        
        for($i=0;$i<count($tegangan);$i++){
            $series[$i] = $tegangan[$i] * $arus[$i];
        }
        
        return $series;
    }
    
    function getTotalDayaBulanan($x,$bulan){
        $tot = 0;
        $d = getDaya($x,"tanggal LIKE '2018-".($bulan < 10 ? "0":"").($bulan)."-%'");
        for($j=0;$j<count($d);$j++){
            $tot = $tot + $d[$j];
        }
        return $tot;
    }
    
    function getTotalDayaSetahun($x){
        $total = array(0,0,0,0,0,0,0,0,0,0,0,0);
        for($i=0;$i<12;$i++){
            $total[$i] = getTotalDayaBulanan($x,$i+1);
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
        $series1 = getDaya(1,$date);
        $series2 = getDaya(2,$date);
        
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
    
    function accPowerChart($container,$chartproperties){
        echo "<div id=".$container."></div>";
        
        $xseries = $chartproperties["xseries"];
        $yseries = $chartproperties["yseries"];
        $tablename = $chartproperties["tablename"];
        
        $series1 = getTotalDayaSetahun(1);
        $series2 = getTotalDayaSetahun(2);
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