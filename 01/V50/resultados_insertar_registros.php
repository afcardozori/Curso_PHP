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
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");
    
    $sql="INSERT INTO artículos (A, B, C, D, E) VALUES (?, ?, ?, ?, ?)";
    
    $resultado=mysqli_prepare($conexion, $sql);

    $ok=mysqli_stmt_bind_param($resultado, "sssss", $sec, $nom, $fec, $pai, $pre);//se colocan la cantidad de s que dice cuantos tipos de variables se van a usar

    $ok=mysqli_stmt_execute($resultado);
    
    if ($ok=false){
        echo "Error al ejecutar la consutla";
    }else{
        
        echo "Se ha agregado un nuevo registro <br><br>";
        
        mysqli_stmt_close($resultado);
    }
    
    ?>   
</body>
</html>