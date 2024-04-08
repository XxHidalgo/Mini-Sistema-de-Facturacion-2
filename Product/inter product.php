<?php
    header("Location: product.php");
    

    $id = $_POST['pid'];
    $idcategorie = $_POST['SelectCategories'];
    $description = $_POST['pdescription'];
    $price = $_POST['pprice'];
    $stock = $_POST['pstock'];

    
    require 'product.class.php';
    $producto_clase = new Product($id, $idcategorie, $description, $price, $stock);

    if($id == ""){

        $producto_clase->create();

    }
    else{
        $producto_clase->update();
    }

?>