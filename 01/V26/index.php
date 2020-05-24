<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    include ("vehiculos.php");
    $mazda= new Coche();
    $pegaso=  new Camion();
    //$mazda->ruedas=7;
    echo "Mazda tiene " . $mazda->ruedas . " Ruedas<br>";
    echo "Pegaso tiene " . $pegaso->ruedas . " Ruedas<br>";

    



    ?>
</body>
</html>