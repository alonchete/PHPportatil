<?php

class clientes{
    
    public $dni;
    public $nombre; 
    public $edad;
    public $sexo;
    public $peso;
    public $altura;

 function __construct(){
    $params = func_get_args();
    $num_params = func_num_args();
    $funcion_constructor ='__construct'.$num_params;
    if (method_exists($this,$funcion_constructor)) {
        call_user_func_array(array($this,$funcion_constructor),$params);

        }
}
 function __construct0(){

    $this->__construct3("Pablo", 19, $this->comprobarSexo());

    }

     function __construct3($nombre, $edad, $sexo){

    $this->__construct6($nombre, $edad, $sexo, $this->generarDNI(), 75, 1.80);

    }

    public function __construct6($nombre, $edad, $sexo ,$dni, $peso, $altura){

        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->sexo=$sexo;
        $this->dni=$dni;
        $this->peso=$peso;
        $this->altura=$altura;
    
    }
    

    private function generarDNI(){
        $dni = rand(10000000, 99999999);

        $resto=$dni%23;

        $temperaturas = array('T','R','W','A','G','M','Y',
        'F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        if($resto<24){
        $letra=$temperaturas[$resto];   
        }else return "<p>El DNI introduccido no es valido</p>"; 
    
        $dni = $dni . $letra;

        return $dni;

    }

    public function calcularIMC($peso, $altura){
    if($altura < 0.5 && $altura > 3){
        $IMC = $peso / ($altura * $altura);

        if($IMC < 20){
            return -1;
        }else if($IMC > 25){
            return 1;
        }else return 0;
    }else return "Altura no valida";
}

    public function esMayorEdad($edad){
        $edad < 18 ? $mayor == false : $mayor == true;
        return $mayor;
    }


    public function __toString(){
    return self::class . ": Nombre:" . $this->nombre 
    . " DNI " . $this->dni . " Edad " .  $this->edad 
    . " Sexo " . $this->sexo . " Peso " .
     $this->peso . " Altura " . $this->altura;
    }

    private function comprobarSexo(){
        if(empty($this->sexo)){
            $this->sexo="hombre";
        }
    }
}




?>