<?php
    include __DIR__ . '/../conection.php';

    function OptionCustomers(){
        $query = "SELECT * from customers"; 
        $result = execQuery($query);

        foreach($result as $row)
        {
            echo '<option Value="'.$row['Id_Customer'].'" data-info="'.$row['Name'].'">'.$row['Id_Customer'].' - '.$row['Name'].' '.$row['Last_Name'].'</option>';
        }
    }

    function OptionProduct(){
        $query = "SELECT * from products"; 
        $result = execQuery($query);

        foreach($result as $row)
        {
            echo '<option Value="'.$row['Id_Product'].'" data-info="'.$row['Description'].'">'.$row['Id_Product'].' - '.$row['Description'].'</option>';
        }
    }


?>