<?php
namespace Imagenes\Clases;

require_once '../vendor/autoload.php';


class Rectangulo extends Figura
{

    public $base;
    public $altura;

    public function __construct($base, $altura, $color){

        $this->base=$base;
        $this->altura=$altura;
        $this->color=$color;
    
    }
    
    public function __toString(){
        return self::class . ": Base:" . $this->base 
        . " Altura " . $this->altura . ": Color" . $this->color;
        }

    public function area(){
        
        $area = ($this->base * $this->altura);
        return $area;
    }
}



?>