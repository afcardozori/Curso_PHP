<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();

    if (!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
    
    ?>
    <h1>Bienvenidos Usuarios</h1>
    <?php 
    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
    ?>
    <h3>Esto es información sólo para usuarios registrados</h3>
</body>
</html>