<?php 
        
    class Coche{ 
        protected $ruedas;
        var $color;
        protected $motor;

        function __construct (){
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }
        function get_motor(){
            return $this->motor;
        }
        function get_ruedas(){
            return $this->ruedas;
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
    
   
    class Camion extends Coche{


        function __construct (){
            $this->ruedas=8;
            $this->color="";
            $this->motor=2600;
        }
        function establece_color($color_camion,$nombre_camion){
            $this->color=$color_camion;
            echo "El color de " . $nombre_camion . " es: ".$this->color;
        }
        function arrancar(){
            parent::arrancar();
            echo "Camion arrancado";
        }
        
    }
