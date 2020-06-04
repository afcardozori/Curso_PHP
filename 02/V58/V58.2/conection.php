<?php 

    require("config.php");

    class Conection{
            protected $db_conection;

            public function __construct (){

                try{
                    $this->db_conection=new PDO('mysql:host=localhost; dbname=prueba', 'root','' );
                    $this->db_conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->db_conection->exec("SET CHARACTER SET utf8");
                    return $this->db_conection;


                }catch(Exception $e){
                    echo "La linea de error es: " . $e->getLine();
                }

                /*$this->db_conection=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                if($this->db_conection->connect_errno){
                    echo "Fallo al conectar a MySQL: " . $this->db_conection->connect_error;
                    return;
                } 
                
                $this->db_conection->set_charset(DB_CHARSET);*/
            }
    }



?>