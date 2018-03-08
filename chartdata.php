<?php
    include 'dbmodel.php';
    
    if(isset($_GET["date"])){
        $date = $_GET["date"];
    }else{
        $date = "2018-03-01";
    }
    
    if(isset($_GET["variable"])){
        $variable = $_GET["variable"];
    }else{
        $variable = "tegangan";
    }
    
    $results = doQueryAsArray(generateQuery($variable,"merit","tanggal = '".$date."'"),$variable);
    //$results2 = doQueryAsArray(generateQuery("waktu","merit","tanggal = '".$date."'"),"waktu");
    echo json_encode($results);
?>