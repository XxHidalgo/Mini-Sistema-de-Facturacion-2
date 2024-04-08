<?php
    include __DIR__ . '/../conection.php';

    session_start();
    $effective = $_SESSION['effective'];
    $return = $_SESSION['return'];

    $query = "SELECT MAX(Id_Bills) AS MaxId FROM bills";
    $result = execQuery($query);

    $Cod_Bills = $result[0]['MaxId'];

    $query = "SELECT * FROM `bills` join bills_detail on Id_Bills = Cod_Bills join products on Id_Product = Cod_Product join customers on Id_Customer = Cod_Customer WHERE Id_Bills = ".$Cod_Bills;
    $result = execQuery($query);

    $date = $result[0]['Date'];
    $total = $result[0]['Total'];
    $Id_Customer = $result[0]['Id_Customer'];
    $NameCustomer = $result[0]['Name'];
    $LastCustomer = $result[0]['Last_Name'];

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Report</title>
</head>
<body>
    <div class="container-fluid p-5 ">
        <div class="h4 pb-2 mb-4 border-bottom border-primary">
            <div class="row align-items-center">
                <div class="col-9">
                    <h1 class="text-primary">Mini Sistema de Facturación</h1>
                </div>
                <div class="col-3">
                    <img src="icon/logo.png" alt="" class="rounded float-end" width='100' height='100'>
                </div>
            </div>
    </div>

        <div class="row">
            <div class="col-3">
                <h3>Factura No:</h3>
            </div>
            <div class="col-9">
                <p><?php echo $Cod_Bills?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <h3>Codigo:</h3>
            </div>
            <div class="col-9">
                <p><?php echo $Id_Customer?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <h3>Cliente:</h3>
            </div>
            <div class="col-9">
                <p><?php echo $NameCustomer.' '.$LastCustomer?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <h3>Fecha:</h3>
            </div>
            <div class="col-9">
                <p><?php echo $date?></p>
            </div>
    </div>
        <table class="table mt-5">
            <thead class="border-bottom border-primary">
                <tr>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $row){
                ?>
                <tr>
                    <td><?php echo $row['Description']?></td>
                    <td>RD$ <?php echo $row['Price']?></td>
                    <td><?php echo $row['Quantity']?></td>
                    <td>$RD <?php echo $row['Subtotal']?></td>
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
        <div class="row">
            <div class="col-3">
                <h5>Efectivo:</h5>
            </div>
            <div class="col-9">
                <p><?php echo $effective?></p>
            </div>
            <div class="row">
            <div class="col-3">
                <h5>Devuelta:</h5>
            </div>
            <div class="col-9">
                <p><?php echo $return?></p>
            </div>
            <div class="row">
            <div class="col-3">
                <h3>Total:</h3>
            </div>
            <div class="col-9">
                <h3>$RD <?php echo $total?></h3>
            </div>
        </div>
    </div>

    <script>
        window.print();
        window.onafterprint = function() {
            window.location.href= 'bills.php';
        }
    </script>
</body>
</html>

