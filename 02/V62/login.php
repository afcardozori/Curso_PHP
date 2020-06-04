
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    h1{text-align: center;
    }
    table{
        width: 25%;
        background-color: #FFC;
        border: 2px dotted #F00;
        margin: auto;
    }
    .izq{text-align: right;        
    }
    .der{text-align: left;
    }
    td{
        text-align: center;
        padding: 10px;
    }
</style>
</head>
<body>
<?php 

if (isset($_POST["enviar"])){
    try{
        $base= new PDO("mysql:host=localhost; dbname=prueba", "root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
            if($numero_registro!=0){
                //echo "<h2> Adelante!!</h2>";
                session_start();

                $_SESSION["usuario"]=$_POST["login"];
                //header("location: usuarios_registrados1.php");
                

            }else{
                //header ("location:login.php");
                echo "Error. Usuario que ni puta idea";
            }
    }catch(Exception $e){
            
        die("Error: " . $e->getMessage());

    }
    
}
    
?>

<?php 
if (!isset($_SESSION["usuario"])){



include("formulario.html");
}else{
    echo "usuario: " . $_SESSION["usuario"];
}
?>
<h2>CONTENIDO DE LA WEB</H2>
<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque officiis unde esse, voluptas sit, dolorem ducimus blanditiis cumque similique fugit tempora delectus! Odio, itaque! Maiores harum est delectus obcaecati!</P>
<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque officiis unde esse, voluptas sit, dolorem ducimus blanditiis cumque similique fugit tempora delectus! Odio, itaque! Maiores harum est delectus obcaecati!</P>
<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque officiis unde esse, voluptas sit, dolorem ducimus blanditiis cumque similique fugit tempora delectus! Odio, itaque! Maiores harum est delectus obcaecati!</P>
<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque officiis unde esse, voluptas sit, dolorem ducimus blanditiis cumque similique fugit tempora delectus! Odio, itaque! Maiores harum est delectus obcaecati!</P>
<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque officiis unde esse, voluptas sit, dolorem ducimus blanditiis cumque similique fugit tempora delectus! Odio, itaque! Maiores harum est delectus obcaecati!</P>
</body>
</html> 