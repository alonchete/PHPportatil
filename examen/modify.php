<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fichero.css" type="text/css">

    <title>Document</title>
</head>
<body>
<?php

$id = $_GET['id'];
$zona = $_GET['zona'];
echo $id;
echo $zona;


?>

<form action="mod_datos.php"  method='post'>
<label for="mod">Introduzca nuevo nombre de la zona (<?php echo $zona?>)</label>
<input type="text" name='zona'/>
<input type='hidden' name='id' value=<?php echo $id?>/>
<input type="submit"/>
</form>

</body>
</html>

