<?php

function execQuery($query) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "msf";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }

    $result = $conn->query($query);

    $data = array();

    try{

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    catch(Exception $e){
        echo "Error ".$e;
    }
  

    $conn->close();

    return $data;
}

?>