<?

require_once "../Modelo/Animal.php";

class Animal_c{

    private $animal;

    function __construct()
    {
        $this->animal = new Animal();
    }

    function borrar(){
        
    }

    function mostrar(){
        $objectTabla = $this->animal->obtieneTodos();
    }

}

?>