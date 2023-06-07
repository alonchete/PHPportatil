<!DOCTYPE html>
<html>
 
<head>
    <title>estadistica</title>
    <meta charset="UTF-8">
</head>
 
<body>
    <?php
    include "./E2.php";
    $lista = "";
 
    if (isset($_POST["num"]) && !empty($_POST["num"])) {
        $lista = $_POST["list"];
        if ($_POST["num"] == 7) {
            contarocurrencias($lista);
        } else if ($_POST["num"] > 100 && $_POST["num"] < 200) {
            echo $lista;
            $lista = $lista . "*" . $_POST["num"];
            printformulario($lista);
        } else {
            echo "numero no valido, debe estar entre 100 y 200";
            printformulario($lista);
        }
    } else {
        printformulario($lista);
    }

 print_r(get_loaded_extensions());
    ?>
 
</body>
 
</html>