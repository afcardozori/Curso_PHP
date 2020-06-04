<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>


    
</head>

<body>
    <?php 
        include ("datos_conexion.php");

        $conexion=mysqli_connect($db_host,$db_user,$db_password);

        if(mysqli_connect_errno()){
            echo "Esta mierda no conecta :'(";
            exit();
        }
        mysqli_select_db($conexion, $db_name) or die ("No se encuentra la pta base de gatos");
        mysqli_set_charset($conexion,"utf8");
        
        $consulta="select * from artículos where D='China'";

        $resultados=mysqli_query($conexion, $consulta);

        while($fila=mysqli_fetch_row($resultados)){
            
            
            echo "<div class='w3-container'>";
            echo "<table widht='50%' alingn='center' class='w3-container'><tr><td>";
            
            echo $fila[0] . "</td><td>";
            echo $fila[1] . "</td><td>";
            echo $fila[2] . "</td><td></tr></table></div>";
            //echo "<br>";
            //echo "<br>";
        }

        mysqli_close($conexion);
        
           
    ?>
</body>
</html>