<?php
    include 'dbmodel.php';
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 1;
    }
    
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
    
    $results = doQueryAsArray(generateQuery($variable,"merit","ID = '".$id."'"),$variable);
    $results2 = doQueryAsArray(generateQuery("waktu","merit","ID = '".$id."'"),"waktu");
    echo $results[0].",".$results2[0];
?>