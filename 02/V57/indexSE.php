<?php 
require "devuelveproductos.php";
$productos= new DevuelveProductos();
$array_productos=$productos->get_productos();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     
    foreach($array_productos as $elemento){
        
        echo "<table><tr><td>";
        echo $elemento['A'] . "</td><td>";
        echo $elemento['B'] . "</td><td>";
        echo $elemento['C'] . "</td><td>";
        echo $elemento['D'] . "</td><td>";
        echo $elemento['E'] . "</td><td></tr></table>";

        echo "<br>";
        echo "<br>";

    }
    
    ?> 
</body>
</html>