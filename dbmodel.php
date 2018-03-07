<?php
    function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "toolmeter";

        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    
    function generateQuery($column,$tablename,$condition){
        return "SELECT ".$column." FROM ".$tablename." WHERE ".$condition;
    }
    
    function doQueryAsArray($query,$index){
        $conn = connect();
        $result = $conn -> query($query);
        $i=0;
        while($data = $result -> fetch_array()){
            $array[$i] = $data[$index];
            $i++;
        }
        disconnect($conn);
        return $array;
    }
    
    function disconnect($conn){
        $conn -> close();
    }
?>