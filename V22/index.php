<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*class Coche{
        //Propiedades
        public $ruedas;
        public $color;
        public $motor;

        public function __construct('3'){//Método constructor
            $this->$ruedas=3;
            $this->$color=3;
            $this->$motor=3;
        }
        //Métodos
        function arrancar(){
            echo "Estoy arrancando";
        }
        function girar(){
            echo "Estoy girando";
        }
        function frenar(){
            echo "Estoy frenando";
        }

    }
    //Instanciación
    $renault=new Coche();
    
    $mazda=new Coche();

    $seat=new Coche();

    $mazda->girar();*/

    
    class Coche{
        var $ruedas;
        var $color;
        var $motor;

        function __construct (){
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }

        function arrancar(){
            echo "Estoy arrancando rrun rrun <br>";         
        }
        function girar(){
            echo "Estoy girando wiii <br>";
        }
        function Frenar(){
            echo "Estoy frenando rran rran <br>";
        }
    }
    $renault = new Coche ();
    $mazda = new Coche ();
    $seat = new Coche ();

    $mazda->girar();
    echo $mazda->ruedas;


    ?>
</body>
</html>