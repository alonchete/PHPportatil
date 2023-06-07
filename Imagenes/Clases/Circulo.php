<?php

namespace Imagenes\Clases;

require_once '../vendor/autoload.php';

class Circulo extends Figura{

    public $pi = 3.14;
    public $radio;

    public function __construct($radio, $color){

        $this->color=$color;
        $this->radio=$radio;
   
    }
        
    public function __toString(){
        return self::class . ": Radio:" . $this->radio . ": Color" . $this->color;
        }

    public function area(){
        
        $area = ($this->pi * $this->radio)^2;
        return $area;

    }
    
}



?>