<?php   
require __DIR__ . '/../conection.php';
require __DIR__ . '/../Abstract.class.php';

class Categories extends CreateAndUpdate{
    public $Id;
    public $Descripcion;
    public $Status;

    public function __construct($Id, $Descripcion, $Status){
        $this->Id = $Id;
        $this->Descripcion = $Descripcion;
        $this->Status = $Status;
    }

    public function create(){
        $query = "INSERT INTO `categories` (`Id_Categories`, `Description`, `Status`) VALUES (NULL, '".$this->Descripcion."', b'".$this->Status."')";
        execQuery($query);
    }

    public function update(){
        $query = "UPDATE `categories` SET `Description` = '".$this->Descripcion."', `Status` = b'".$this->Status."' WHERE `categories`.`Id_Categories` = ".$this->Id."";
        execQuery($query);
    }
}
    
?>