<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>System Monitoring</title>

        <style>
            #dynamicContainer{
                min-width: 400px;
                max-width: 600px;
                height: 300px;
            }
            
            #chartcontainer {
                min-width: 400px;
                max-width: 800px;
                height: 400px;
                margin: 0 auto;
           }
           
           #chartcontainer2 {
                min-width: 400px;
                max-width: 200px;
                height: 220px;
                margin: 0 auto
           }
           
        </style>        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            include 'highchartheader.php';
            include 'chartgenerator.php';
            include 'actualgraphicgenerator.php';
            include 'dbmodel.php';
            ?>
        <!--<div id="chartcontainer"></div>-->
        <!---->
        <!--<?php-->
        <!--    $xseries = "waktu";-->
        <!--    $yseries = "tegangan";-->
        <!--    $tablename = "merit";-->
        <!--    $tegangan = doQueryAsArray(generateQuery($yseries,$tablename,1),$yseries);-->
        <!--    $waktu = doQueryAsArray(generateQuery($xseries,$tablename,1),$xseries);-->
        <!--    -->
        <!--    chartgenerator("chartcontainer",-->
        <!--                array(-->
        <!--                    "chartTitle" =>"Monitor Tegangan",-->
        <!--                    "varLabel" => "tegangan (V)",-->
        <!--                    "yLabel" => "Tegangan per Menit",-->
        <!--                    "tegangan" => str_replace("\"","",json_encode($tegangan)),-->
        <!--                    "waktu" => json_encode($waktu)-->
        <!--                )-->
        <!--    );-->
        <!--?>-->
        
        <?php
        echo "<div id=\"dynamicContainer\"></div>";
            $properties1 = array(
                "chartTitle" =>"Monitor Tegangan",
                "varLabel" => "tegangan (V)",
                "date" => "2018-03-01",
                "variable" => "tegangan"
            );
            dynamicGraph("dynamicContainer",$properties1);
        ?>
        
    </body>
</html>