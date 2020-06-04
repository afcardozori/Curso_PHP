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

        $conexion=mysqli_connect($db_host,$db_user,$db_password);

        if(mysqli_connect_errno()){
            echo "Esta mierda no conecta :'(";
            exit();
        }
        mysqli_select_db($conexion, $db_name) or die ("No se encuentra la pta base de gatos");
        mysqli_set_charset($conexion,"utf8");
        
        $consulta="select * from datospersonales";

        $resultados=mysqli_query($conexion, $consulta);

        while(($fila=mysqli_fetch_row($resultados))){
            echo $fila[0] . "<br>";
            echo $fila[1] . "<br>";
            echo $fila[2] . "<br>";
        }

        mysqli_close($conexion);
        /*$fila=mysqli_fetch_row($resultados);
        
        /* for ($i = 0; $i <= 3; $i++) {
            
                echo $fila[$i] . "<br>";
       }

       $fila=mysqli_fetch_row($resultados);
        
        for ($i = 0; $i <= 3; $i++) {
            
                echo $fila[$i] . "<br>";
       }*/
           
    ?>
</body>
</html>