<?php
require __DIR__ . '/../conection.php';


            $idInput;
            if(isset($_POST['id'])){
                $idInput = $_POST['id'];
                if(!empty($idInput)){
                    $query = 'select products.*, categories.Description as Category from products join categories on Id_Categories = Cod_Category where Id_Product = '.$idInput;
                    
    
                }
                else{
                    $query = 'select products.*, categories.Description as Category from products join categories on Id_Categories = Cod_Category';
                }
                
            }
            else{
                
                $query = 'select products.*, categories.Description as Category from products join categories on Id_Categories = Cod_Category';
            }

        $result = execQuery($query);

        foreach($result as $row){

            echo '
            
            <tr>
            <td class = "td-id">'.$row['Id_Product'].'</td>
            <td class = "td-description">'.$row['Description'].'</td>
            <td class = "td-categorie">'.$row['Category'].'</td>
            <td class = "td-price">RD$ '.$row['Price'].'</td>
            <td class = "td-stock">'.$row['Stock'].'</td>
            <td><button id= "buttonEdit" type="button" class="btn btn-primary m-0 edit-products" data-bs-toggle="modal" data-bs-target="#modal-product" data-bs-id="'.$row['Id_Product'].'">Edit</button></td>
            </tr>';
            
            }


        function listCategories(){
        
            $query = "SELECT * from categories"; 
            $result = execQuery($query);

            foreach($result as $row)
            {
                echo '<option Value="'.$row['Id_Categories'].'" data-info="'.$row['Description'].'">'.$row['Description'].'</option>';
            }
        }
    
        



    
?>