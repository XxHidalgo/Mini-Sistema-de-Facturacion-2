<?php
    header("Location: categories.php");


    $id = $_POST['cid'];
    $description = $_POST['cdescription'];
    $active = "";

    if(isset($_POST['cactive'])){
        $active = "1";
    }
    else{
        $active = "0";
    }

    require 'Categories.class.php';
    $cat = new Categories($id, $description, $active);

    if($id == ""){

    $cat->create();

    }
    else{
      $cat->update();
    }






?>