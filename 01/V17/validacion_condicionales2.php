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
		$nombre=$_POST["nombre_usuario"];
		$password=$_POST["password"];
		switch (true){
			case $nombre=="Cardozo" && $password==1234:
				echo "Usuario autorizado. Bueno casi";
				break;
			case $nombre=="Velez" && $password==1234:
					echo "Usuario autorizado. Bueno casi";
				break;
			case $nombre=="Monsalve" && $password==1234:
				echo "Usuario autorizado. Obvio si";
				break;
			default:
				echo "Usuario no autorizado";
			endswitch();
			
			}
		/*if ($edad<=18){
			echo "Eres menor de edad";			
		}else if($edad<=40){
			echo "Eres jóven";

		}else if($edad<=65){
			echo "Eres maduro";

		}else if($edad>65){
			echo "Hay hp el corona Cuídate putamente :(";

		}*/
	



	}
	
?>