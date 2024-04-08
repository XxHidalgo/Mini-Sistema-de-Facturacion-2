<?php   
    require __DIR__ . '/../conection.php';
    require __DIR__ . '/../Abstract.class.php';


    class Product extends CreateAndUpdate{
        public $Id;
        Public $IdCategories;
        public $Descripcion;
        public $Price;
        public $Stock;
    
        public function __construct($Id, $IdCategories, $Descripcion, $Price, $Stock){
            $this->Id = $Id;
            $this->IdCategories = $IdCategories;
            $this->Descripcion = $Descripcion;
            $this->Price = $Price;
            $this->Stock = $Stock;
        }
    
        public function create(){
            $query = "INSERT INTO `products` (`Id_Product`, `Cod_Category`, `Description`, `Price`, `Stock`) VALUES (NULL, '".$this->IdCategories."', '".$this->Descripcion."', '".$this->Price."', '".$this->Stock."')";
            execQuery($query);
        }
    
        public function update(){
            $query = "UPDATE `products` SET `Cod_Category` = '".$this->IdCategories."', `Description` = '".$this->Descripcion."', `Price` = '".$this->Price."', `Stock` = '".$this->Stock."' WHERE `products`.`Id_Product` = ".$this->Id;
            execQuery($query);
        }
    }
    
    

?>