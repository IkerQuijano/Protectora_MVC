<?

require_once "../Modelo/Animal.php";
require_once "../Vista/index.php";

class Animal_c{

    private $animal;

    function __construct()
    {
        $this->animal = new Animal();
    }

    function borrar($idParam){
        $this->animal->borra($idParam);
    }

    function mostrar(){
        $objectTabla = $this->animal->obtieneTodos();
        
    }
    
}

?>