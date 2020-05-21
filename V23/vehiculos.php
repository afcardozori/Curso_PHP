<?php 
        
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
        function establece_color($color_coche,$nombre_coche){
            $this->color=$color_coche;
            echo "El color de " . $nombre_coche . " es: ".$this->color;
        }
    }
    $renault = new Coche ();
    $mazda = new Coche ();
    $seat = new Coche ();
    $renault->establece_color("rojito","renault");
    $seat->establece_color("Muy chimbita","seat");
    //$mazda->girar();
    //echo $mazda->ruedas;-------------------
    class Camion{
        var $ruedas;
        var $color;
        var $motor;

        function __construct (){
            $this->ruedas=8;
            $this->color="";
            $this->motor=2600;
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
        function establece_color($color_coche,$nombre_coche){
            $this->color=$color_coche;
            echo "El color de " . $nombre_coche . " es: ".$this->color;
        }
    }
    $renault2 = new Camion ();
    $mazda2 = new Camion ();
    $seat2 = new Camion ();
    $renault->establece_color("rojito","renault");
    $seat->establece_color("Muy chimbita","seat")

    ?>