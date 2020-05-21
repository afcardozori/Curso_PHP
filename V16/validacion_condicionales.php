<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if (isset($_POST["enviando"])){
		$edad=$_POST["edad_usuario"];

		/*if ($edad<18){
			echo "Eres menor de edad. No tienes acceso";			
		}else if($edad<=40){
			echo "Eres jóven";

		}else if($edad<=65){
			echo "Eres maduro";

		}else if($edad>65){
			echo "Hay hp el corona Cuídate putamente :(";

		}*/
	echo $edad<18 ? "Eres menor de edad, No puedes acceder":"Puedes acceder";


	}
	
?>