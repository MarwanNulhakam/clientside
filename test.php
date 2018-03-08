<?php
include 'dbmodel.php';
        $tablename = "merit";
        $date = date("Y-m-d");
        $tegangan = doQueryAsArray(generateQuery("tegangan",$tablename,$date),"tegangan");
        $arus = doQueryAsArray(generateQuery("arus",$tablename,$date),"arus");
        
        for($i=0;$i<count($tegangan);$i++){
            $daya[$i] = $tegangan[$i] * $arus[$i];
        }
        
        echo json_encode($daya);
?>