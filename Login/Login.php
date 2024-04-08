<?php
    include __DIR__ . '/../conection.php';
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * from user where Username = '".$user."' and Password = '".$pass."'";
    $result = execQuery($query);

    $check = false;
    foreach($result as $row){
        $check = true;
    }
    if($check === true){
        header('Location: /php/Mini Sistema de Facturacion 2/Customers/customer.php');
    }
    else{
        header('Location: index.html');
    }
?>