<?php

$valores = array();
$secciones = [
    "Nombre" => ["text", "edu"],
    "Sexo" => ["radio","Hombre", "Mujer"],
    "Idiomas" => ["checkbox","Frances", "Ingles", "Español", "Aleman"],
    "Aficiones" => ["select","Musica", "Deportes", "Videojuegos", "Arte"]
];

$tipos = ["text", "radio", "checkbox"];

function pintarFormulario($secciones){

            $form = "<form name='formulario' method='post' action='index.php'
            enctype='multipart/form-data'>";
            $seccion =" ";

            foreach($secciones as $claves => $valores){
               $tipo = $secciones[$claves][0];
               $seccion .= "<h4>$claves</h4><br>";
               $select = "<select name='$claves' multiple>";
                foreach($valores as $valor){

                    if($tipo !== "select"){
                        if($valor !== $tipo){
                        $seccion .= "
                        <label>$valor </label>
                        <input type='$tipo' name='$claves' value='$valor'/>
                        ";
                    }
                    }else{ 
                    $seccion .= $select;
                    }
            ;    }
            }

            $form .= "$seccion <input type='submit' value='Subir'/> 
            </form>";   

            
                
    return $form;
}

echo pintarFormulario($secciones)

?>

