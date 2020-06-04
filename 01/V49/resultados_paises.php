<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    $pais=$_GET["buscar"];
    
    require ("datos_conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");
    
    $sql="SELECT A, B, C, D FROM artículos WHERE D=?";
    
    $resultado=mysqli_prepare($conexion, $sql);

    $ok=mysqli_stmt_bind_param($resultado, "s", $pais);

    $ok=mysqli_stmt_execute($resultado);

    if ($ok=false){
        echo "Error al ejecutar la consutla";
    }else{
        $ok=mysqli_stmt_bind_result($resultado, $a, $b, $c ,$d);

        echo "Articulos encontrados: <br><br>";
        while(mysqli_stmt_fetch($resultado)){
            echo $a . " " . $b . " " . $c . " " . $d . "<br>"; 
        }
        mysqli_stmt_close($resultado);
    }
    
    ?>   
</body>
</html>