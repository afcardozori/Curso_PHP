<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    function ejecuta_consulta($labusqueda){
    
    include ("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_user,$db_password);

    if(mysqli_connect_errno()){
        echo "Esta mierda no conecta :'(";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la pta base de gatos");
    mysqli_set_charset($conexion,"utf8");
    
    $consulta="select * from artículos where b like '%$busqueda%'";

    $resultados=mysqli_query($conexion, $consulta);

    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
                    
        echo "<table widht='50%' alingn='center'><tr><td>";
        echo $fila['A'] . "</td><td>" . " ";
        echo $fila['B'] . "</td><td>" . " ";
        echo $fila['C'] . "</td><td>" . " ";
        echo $fila['E'] . "</td><td>" . " ";
        echo $fila['E'] . "</td><td></tr></table>";
        //echo "<br>";
        //echo "<br>";
    }

    mysqli_close($conexion);
    
}       
    ?>
</head>

<body>
    
</body>
</html>