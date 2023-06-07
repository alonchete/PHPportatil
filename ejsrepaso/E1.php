<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
</head>

<body>
    <?php
;   


    if(isset($_REQUEST["nombre"]) and isset($_REQUEST["idioma"]) ){ 
        
    $dato = $_POST["nombre"];
    $idioma = $_POST["idioma"];
    $msg = "No encontrado";

    
    function traductor($idioma, $dato){
        $traduccion;
        $listaEsp = array("casa", "perro", "gato", "rana");
        $listaIng = array("house", "dog", "cat", "frog");

        
    for($i = 0; $i<count($listaEsp); $i++){
        if($dato === $listaEsp[$i] or $dato === $listaIng[$i]){
            $idioma === "ingles" ?  $traduccion = $listaEsp[$i] : $traduccion = $listaIng[$i];
            }
        } 

        if(empty($traduccion)) $traduccion = $msg;
        
        return $traduccion;
    }

    echo traductor($idioma, $dato);


    } else  { echo
           "<form name='formulario' method='post' action='$_SERVER[PHP_SELF]'>
            <label>Introduzca la palabra</label><br>
            <input type='text' name='nombre'><br>
            <label>Seleccione el idioma</label><br>
            <label>A Español</label>
            <input type='radio' name='idioma' value='ingles'><br>
            <label>A Inglés</label>
            <input type='radio' name='idioma' value='español'><br>
            <input type='submit' value='Subir'/> 
            </form>";
            }

    ?>
</body>

</html>