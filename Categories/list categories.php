<?php
require __DIR__ . '/../conection.php';
        $idInput;
        if(isset($_POST['id'])){
            $idInput = $_POST['id'];
            if(!empty($idInput)){
                $query = 'Select * from categories where Id_Categories = '.$idInput;

            }
            else{
                $query = 'Select * from categories';
            }
            
        }
        else{
            
            $query = 'Select * from categories';
        }

        $result = execQuery($query);
        

        foreach($result as $row){

            $status_categories ="";
            $color_status = "";

            if($row['Status'] === "1"){
                $status_categories = "Active";
                $color_status = "success";
            }
            else{
                $status_categories = "Inactive";
                $color_status = "danger";
            }

            echo '
            <tr>
            <td class = "td-id">'.$row['Id_Categories'].'</td>
            <td class = "td-description">'.$row['Description'].'</td>
            <td class = "td-status"><span class="badge bg-'.$color_status.' fs-6">'.$status_categories.'</span></td>
            <td><button id= "buttonEdit" type="button" class="btn btn-primary m-0 edit-categories" data-bs-toggle="modal" data-bs-target="#modal-categories" data-bs-id="'.$row['Id_Categories'].'">Edit</button></td>
            </tr>';

            
            
        }




    
?>