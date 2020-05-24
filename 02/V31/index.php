<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $semana1[]="Lunes";
        $semana1[]="Martes";
        $semana1[]="Miercoles";
        $semana1[]="Jueves";
        $semana1[]="Viernes";
        $semana1[]="Sabado";

        $semana2=array("Lunes","Martes","Miercoles");

        $semana3=array("Nombre"=>"Juan","Apellido"=>"Velez");
        
        //echo "$semana1" . "<br>";
        //echo $semana2 . "<br>";
        //echo $semana3 . "<br>";

        foreach($semana1 as $clave=>$valor){
            echo "$valor<br>";
        }
            
    ?>
</body>
</html>