<?php

include_once "../Modelo/Animal.php";
include_once "../Modelo/CRUD.php";
include_once "../Modelo/Conexion.php";
include_once "../Modelo/Usuario.php";

$animal = new Animal();
print_r($animal->obtieneCabeceraDeTabla());

?>