<?php

namespace Imagenes\Clases;

require_once '../vendor/autoload.php';


  $figura = $_REQUEST["figura"];

if(isset($_REQUEST["base"]) && isset($_REQUEST["altura"]) || isset($_REQUEST["radio"])){
  $imagen = imagecreatetruecolor(800, 800);

  if($figura == "Triangulo"){
     $triangulo = new Triangulo($_REQUEST["base"], $_REQUEST["altura"],  "rosita");
     echo $triangulo -> __toString();
     echo " Area: ";
     echo $triangulo -> area();
  }elseif($figura == "Circulo"){
    $red   = imagecolorallocate($imagen, 255, 0, 0);
   imagefilledellipse($imagen, 100, 100, 100, 100, $red);
   imagegd($imagen);

    $circulo = new  Circulo($_REQUEST["radio"], "rosita");
    echo $circulo -> __toString();
    echo " Area: ";
    echo $circulo -> area();
  }elseif($figura == "Rectangulo"){
    $rectangulo = new Rectangulo($_REQUEST["base"], $_REQUEST["altura"],  "rosita");
    echo $rectangulo -> __toString();
    echo " Area: ";
    echo $rectangulo -> area();
  }

}else{

  if($_REQUEST["figura"] == "Triangulo"){
    echo
    "<form name='formulario' method='post' action='index.php'
     enctype='multipart/form-data'>
     
     <label>Introduzca la base del Triangulo</label>
     <input type='text' name='base'/><br>
     <label>Introduzca la altura del Triangulo</label>
     <input type='text' name='altura'/><br>
     <input  name='figura' type='hidden' value='Triangulo'>

     <input type='submit'> 
     </form>";

  }elseif($_REQUEST["figura"] == "Circulo"){
echo
    "<form name='formulario' method='post' action='index.php'
    enctype='multipart/form-data'>  
    
    <label>Introduzca el radio del cicrulo</label><br>
    <input type='text' name='radio'/>
    <input  name='figura' type='hidden' value='Circulo'>

    <input type='submit'> 
    </form>";
  }elseif($_REQUEST["figura"] == "Rectangulo"){
    echo
    "<form name='formulario' method='post' action='index.php'
    enctype='multipart/form-data'>
    
    <label>Introduzca la base del Rectangulo</label>
    <input type='text' name='base'/><br>
    <label>Introduzca la altura del Rectangulo</label>
    <input type='text' name='altura'/><br>
    <input  name='figura' type='hidden' value='Rectangulo'>

    <input type='submit'> 
    </form>";
      }
}
?>