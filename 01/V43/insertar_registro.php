<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $fec=$_GET["fecha"];
    $pai=$_GET["p_orig"];
    $pre=$_GET["precio"];

    require ("datos_conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);

    if(mysqli_connect_errno()){
        echo "Esta mierda no conecta :'(";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la pta base de gatos");
    mysqli_set_charset($conexion,"utf8");
    
    $consulta="INSERT INTO artículos (A, B, C, D, E) VALUES ('$sec', '$nom', '$fec', '$pai', '$pre')";

    $resultados=mysqli_query($conexion, $consulta);

    if ($resultados==false){
        echo "Error en la consulta";
    }else{
        echo "Registro guardado<br><br>";
        echo "<table><tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$pai</td></tr>";
        echo "<tr><td>$pre</td></tr></table>";
    }



    mysqli_close($conexion);
    
      
    ?>   
</body>
</html>