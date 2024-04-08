
<?php 
    session_start();
    $effective = $_POST['beffec'];
    $return = $_POST['breturn'];

    $_SESSION['effective'] = $effective;
    $_SESSION['return'] = $return;

    include __DIR__ . '/../conection.php';
    $Cod_Customer = $_POST['cid'];
    $totalpost = $_POST['btotal'];
    $total = filter_var($totalpost, FILTER_SANITIZE_NUMBER_INT);

    $query = "CALL InsertBills(".$Cod_Customer.", ".$total.")";
    execQuery($query);

    $query = "SELECT MAX(Id_Bills) AS MaxId FROM bills";
    $result = execQuery($query);

    $Cod_Bills = $result[0]['MaxId'];


    $Cod_ProductJSON = $_POST['codep'];
    $Cod_Product = json_decode($Cod_ProductJSON, true);

    $QuantityJSON = $_POST['quantip'];
    $Quantity = json_decode($QuantityJSON, true);

    $contQ = 0;

    foreach($Cod_Product as $IDPro){
        $query = "SELECT * from products where Id_Product = ".$IDPro;
        $result = execQuery($query);
        $price = $result[0]['Price'];
        $quanti = $Quantity[$contQ];
        $subtotal = ($quanti*$price);

        $query = "CALL InsertBillsDetail(".$Cod_Bills.", ".$IDPro.", ".$quanti.", ".$subtotal.")";
        execQuery($query);
        $contQ++;
    }

    header("Location: report.php");
    

?>
