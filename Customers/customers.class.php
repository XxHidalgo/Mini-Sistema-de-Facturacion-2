<?php   
require __DIR__ . '/../conection.php';
require __DIR__ . '/../Abstract.class.php';



    class Customers extends CreateAndUpdate{
        public $Id;
        public $Name;
        public $LastName;
        public $Number;
        public $Email;
        public $License;
        Public $Status;
    
        public function __construct($Id, $Name, $LastName, $Number, $Email, $License, $Status){
            $this->Id = $Id;
            $this->Name = $Name;
            $this->LasName = $LastName;
            $this->Number = $Number;
            $this->Email = $Email;
            $this->License = $License;
            $this->Status = $Status;
        }
    
        public function create(){
            $query = "INSERT INTO `customers` (`Id_Customer`, `Name`, `Last_Name`, `Number`, `Email`, `License`, `Status`) VALUES (null, '".$this->Name."','".$this->LastName."','".$this->Number."','".$this->Email."','".$this->License."', b'".$this->Status."')";
            execQuery($query);
        }
    
        public function update(){
            $query = "UPDATE `customers` SET `Name` = '".$this->Name."', `Last_Name` = '".$this->LasName."', `Number` = '".$this->Number."', `Email` = '".$this->Email."', `License` = '".$this->License."', `Status` = b'".$this->Status."' WHERE `customers`.`Id_Customer` = ".$this->Id."";
            execQuery($query);
        }
    }
    
    

?>