<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $busqueda_sec=$_GET["seccion"];
    $busqueda_porig=$_GET["p_orig"];
    
    try{
        $base=new PDO("mysql:host=localhost; dbname=prueba", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT A, B, C, D, E FROM artículos WHERE A=:SECC AND D=:PORIG";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo " A " . $registro['A'] . " B " . $registro['B'] . " C " . $registro['C'] . " D " . $registro['D'] . " E " . $registro['E'] . "<br>";

        }
        $resultado->closeCursor();

        //echo "Conexión OK";
    }catch(exception $e){
        die("Error: " . $e->getMessage());
    }finally{
        $base=null;
    }

    ?>
</body>
</html>