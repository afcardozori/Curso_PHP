<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $conexion=new mysqli ("localhost", "root", "", "prueba");

    if($conexion->connect_errno){
        echo "Fallo la conexión, el código de error es: " . $conexion->connect_errno;

    }
    
    $conexion->set_charset("utf8");
    
    $sql="SELECT * FROM artículos";

    $resultados=$conexion->query($sql);

    if ($conexion->errno){

        dei ($conexion->errno);
    }
    
    while($fila=$resultados->fetch_assoc()){

        echo "<table widht='50%' alingn='center'><tr><td>";
        echo $fila['A'] . "</td><td>" . " ";
        echo $fila['B'] . "</td><td>" . " ";
        echo $fila['C'] . "</td><td>" . " ";
        echo $fila['E'] . "</td><td>" . " ";
        echo $fila['E'] . "</td><td></tr></table>";

    }

    $conexion->close();
    ?>
</body>
</html>