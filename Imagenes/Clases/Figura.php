<?php

namespace Imagenes\Clases;

    class Figura {
        
        public $color;
        public $tamaño;

        public function __construct($color, $tamaño){

            $this->tamaño=$tamaño;
            $this->color=$color;
        
        }

        function __toString(){
            
        }
        
    }

?>