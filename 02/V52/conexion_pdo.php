<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    try{
        $base=new PDO("mysql:host=localhost; dbname=prueba", "root", "");
        echo "Conexión OK";
    }catch(exception $e){
        die("Error: " . $e->getMessage());
    }finally{
        $base=null;
    }
    
    
    ?>
</body>
</html>