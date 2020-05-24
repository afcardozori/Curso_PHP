<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $db_host="localhost";
        $db_name="prueba";
        $db_user="root";
        $db_password="";

        $conexion=mysqli_connect($db_host,$db_user,$db_password,$db_name);
        
        $consulta="select * from datospersonales";

        $resultados=mysqli_query($conexion, $consulta);

        $fila=mysqli_fetch_row($resultados);
        
        for ($i = 0; $i <= 3; $i++) {
            echo $fila[$i] . "<br>";
        }

           
    ?>
</body>
</html>