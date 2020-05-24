<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    function ejecuta_consulta($labusqueda){
    
    include ("datos_conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);

    if(mysqli_connect_errno()){
        echo "Esta mierda no conecta :'(";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la pta base de gatos");
    mysqli_set_charset($conexion,"utf8");
    
    $consulta="select * from artículos where b like '%$labusqueda%'";

    $resultados=mysqli_query($conexion, $consulta);

    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
                    
        echo "<table widht='50%' alingn='center'><tr><td>";
        echo $fila['A'] . "</td><td>" . " ";
        echo $fila['B'] . "</td><td>" . " ";
        echo $fila['C'] . "</td><td>" . " ";
        echo $fila['E'] . "</td><td>" . " ";
        echo $fila['E'] . "</td><td></tr></table>";
        //echo "<br>";
        //echo "<br>";
    }

    mysqli_close($conexion);
    
}       
    ?>
</head>

<body>
<?php
if(isset($_POST["buscar"])==false)  /*Recordar que isset determina si una variable está definida y no es NULL. Entonces devolverá false si no está definida (como en este caso). Por lo tanto, si el input buscar no a enviado datos, entonces  muestra el formulario/
{                                   /* Al dejar action="", le indica al submit que lo envíe a la misma página*/
 echo " <fieldset>
                <legend><h3>Formulario para buscar en una base de datos</h3></legend>    
                      <form action='' method='post'/> 
                             <label> BUSCAR: <input type='text' name = 'buscar'> </label>
                                             <input type='submit' name='enviando' value='Enviar'>
                      </form>
      </fieldset>";
}
else                   /* Si el input buscar está definido (si envió datos) ejecuta la consulta*/
{  
   ejecuta_consulta($_POST["buscar"]);
} 
?>
</body>
</html>