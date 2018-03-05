<?php
    include 'dbmodel.php';
    
    $data = doQueryAsArray(generateQuery("tegangan","merit","ID = 4"));
    echo $data[0];
?>