<?php

function printformulario($lista){

    echo <<<EOD
   
    <form method="post" action="index.php" >
   
       <label for="num">introduce numero:
       
       <input type="text" name="num">
       
       </label>
       
       <input type="hidden" Name="list" value="$lista" />
       
       <input type="submit" value="enviar" name="send">
   
    </form>
   
    EOD;
   
   }
   
   function contarocurrencias($lista){
   
    $arraynumeros=array();
   
    echo $lista ."<br>";
   
    $separado=explode("*",$lista);
   
       for($i=0; $i<sizeof($separado); $i++){
       
           $cont=0;
           
           for($j=$i; $j<sizeof($separado);$j++){
           
               if($j!=$i && $separado[$j]==$separado[$i] && !in_array($separado[$i],$arraynumeros) ){
               
               $cont=$cont+1;
               
               }
           
           }
           
           if($cont!=0){
           
               echo $separado[$i]." tiene ".($cont+1)." ocurrencias <br>";
               
               array_push($arraynumeros,$separado[$i]);
           
           }
       
    }
   }

?>