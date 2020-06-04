<?php 

    require("config.php");

    class Conection{
            protected $db_conection;

            public function __construct (){
                $this->db_conection=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                if($this->db_conection->connect_errno){
                    echo "Fallo al conectar a MySQL: " . $this->db_conection->connect_error;
                    return;
                } 
                
                $this->db_conection->set_charset(DB_CHARSET);
            }
    }



?>