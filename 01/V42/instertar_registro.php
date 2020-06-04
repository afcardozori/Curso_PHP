<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    $cod=$_GET["c_art"];
    $sec=$_GET["seccion"];
    $nom=$_GET["nombre"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];

    require ("datos_conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);

    if(mysqli_connect_errno()){
        echo "Esta mierda no conecta :'(";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la pta base de gatos");
    mysqli_set_charset($conexion,"utf8");
    
    $consulta="select * from artículos where b like '%$labusqueda%'";

    $resultados=mysqli_query($conexion, $consulta);

    
    

    mysqli_close($conexion);
    
}       
    ?>   
</body>
</html>