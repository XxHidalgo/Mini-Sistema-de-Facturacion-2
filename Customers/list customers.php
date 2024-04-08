<?php
require __DIR__ . '/../conection.php';
        $idInput;
        if(isset($_POST['id'])){
            $idInput = $_POST['id'];
            if(!empty($idInput)){
                $query = 'Select * from customers where Id_Customer = '.$idInput;

            }
            else{
                $query = 'Select * from customers';
            }
            
        }
        else{
            
            $query = 'Select * from customers';
        }
        $result = execQuery($query);

        foreach($result as $row){

            $status_customer ="";
            $color_status = "";

            if($row['Status'] === "1"){
                $status_customer = "Active";
                $color_status = "success";
            }
            else{
                $status_customer = "Inactive";
                $color_status = "danger";
            }

            echo '
            <tr>
            <td class = "td-id">'.$row['Id_Customer'].'</td>
            <td class = "td-name">'.$row['Name'].'</td>
            <td class = "td-last">'.$row['Last_Name'].'</td>
            <td class = "td-number">'.$row['Number'].'</td>
            <td class = "td-email">'.$row['Email'].'</td>
            <td class = "td-license">'.$row['License'].'</td>
            <td class = "td-status"><span class="badge bg-'.$color_status.' fs-6">'.$status_customer.'</span></td>
            <td><button id= "buttonEdit" type="button" class="btn btn-primary m-0 edit-customer" data-bs-toggle="modal" data-bs-target="#modal-customers" data-bs-id="'.$row['Id_Customer'].'">Edit</button></td>
            </tr>';
            
        }



    
?>