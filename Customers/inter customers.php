<?php
   header("Location: customer.php");

    $id = $_POST['cid'];
    $name = $_POST['cname'];
    $last = $_POST['clast'];
    $number = $_POST['cnumber'];
    $email = $_POST['cemail'];
    $license = $_POST['clicense'];
    $active = "";

    if(isset($_POST['cactive'])){
        $active = "1";
    }
    else{
        $active = "0";
    }

    require 'customers.class.php';
    $customer_class = new Customers($id, $name, $last, $number, $email, $license, $active);

    if($id == ""){

        $customer_class->create();

    }
    else{
        $customer_class->update();
    }

    







?>