<?php
namespace clientes;

function mi_autocargador($clase) {
    include 'src/' . $clase . '.clase.php';
}

  spl_autoload_register('mi_autocargador');

  $cliente = new clientes();

$personas = [

    [1, "Alonso", "Sanz", "SSS"],
    [2, "Alonsa", "znas", "OOO"],
    [3, "osofla", "Perez", "AAA"]


];

foreach($personas as $key => $valores){

   $cliente[$key] = new clientes($valores[0], $valores[1], $valores[2], $valores[3]);


}

foreach($personas as $key => $valores){


   echo $cliente[$key] -> __get("nombre");

}

?>