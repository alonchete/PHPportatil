<?php
include 'clientes.php';

class empleado extends clientes{

    public $nombre; 
    public $salario;
    public $contratacion;

    function __construct($nombre, $salario, $contratacion){
        $this->nombre=$nombre;
        $this->salario=$salario;
        $this->contratacion=$contratacion;
    }

    function calcularAños($contratacion){
        $hoy = date('d-m-Y');

        echo " $hoy";
        echo " $contratacion ";
        
        $fechaContratacion = strtotime($contratacion);
        $fechaActual = strtotime($hoy);

        $dias = (($fechaActual - $fechaContratacion) / 86400) / 365;

        return $dias;
    }

    
}

$empleado = new empleado("pai","ja", "20-1-2002");
echo $empleado->calcularAños("20-1-2002");

?>