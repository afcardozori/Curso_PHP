<?php
  if(isset ($_POST["button"])){
      $numero1=$_POST["num1"];
      $numero2=$_POST["num2"];
      $operacion=$_POST["operacion"];

       if(!strcmp("Suma", $operacion)){
   $operacion=($numero1+$numero2);
  }
  
  if(!strcmp("Resta", $operacion)){
   $operacion=($numero1-$numero2);
  }
  
  if(!strcmp("Multiplicación", $operacion)){
   $operacion=($numero1*$numero2);
  }
  
  if(!strcmp("División", $operacion)){
   $operacion=($numero1/$numero2);
  }
  
  if(!strcmp("Módulo", $operacion)){
   $operacion=($numero1%$numero2);
  }
  
  echo "El resultado es: " . $operacion;
      	
    }
?>