<?php
  if(isset($_REQUEST["sexo"]) and isset($_REQUEST["idioma"])
   and isset($_REQUEST["nombre"]) and isset($_REQUEST["estudios"]) and 
   isset($_REQUEST["aficiones"])){ 
        
    $idioma = array();
    $sexo =  $_POST["sexo"];
    $nombre = $_POST["nombre"];
    $estudios = $_POST["estudios"];
    $aficiones = array();

    if (is_uploaded_file ($_FILES["imagen"]["tmp_name"] )){
        $nombreDirectorio = "img/";
        $nombreFichero = $_FILES["imagen"]["name"];
        $nombreCompleto = $nombreDirectorio.$nombreFichero;
        if (is_dir($nombreDirectorio)){ // es un directorio existente
        $idUnico = time();
        $nombreFichero = $idUnico."-".$nombreFichero;
        $nombreCompleto = $nombreDirectorio.$nombreFichero;
        move_uploaded_file ($_FILES["imagen"]["tmp_name"],$nombreCompleto);
        echo "Fichero subido con el nombre: $nombreFichero<br>";
        }
        else echo 'Directorio definitivo inválido';
        } else print ("No se ha podido subir el fichero\n");

        
    foreach ( $_POST["idioma"] as $value){
        array_push($idioma, $value);
    }

    foreach ( $_POST["aficiones"] as $value){
        array_push($aficiones, $value);
    }

    echo " $sexo";
    echo " $nombre";
    echo " $estudios";

    foreach ( $idioma as $value){
        echo " $value";
    }

    foreach ( $aficiones as $value){
        echo " $value";
        
    }


    }else header('Location: cv.php')


?>