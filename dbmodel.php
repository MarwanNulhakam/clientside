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
    
    function insert($param,$value){
        $conn = connect();
        
        if(count(explode($param , ",")) != count(explode($value, ","))){
            disconnect($conn);
            return "0";
        }
        $statement = "INSERT INTO `merit` (".$param.") VALUES (".$value.")";
//        echo $statement;

        if($conn->query($statement) === TRUE){
            disconnect($conn);
            return "1";
        }else{
            disconnect($conn);
            return "0";
        }
    }

    function doQueryAsArray($query,$index){
        $conn = connect();
        $result = $conn -> query($query);
        $i=0;
        $array[0] = 0;
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