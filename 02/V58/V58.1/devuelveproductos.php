<?php 

require("conection.php");

class DevuelveProductos extends Conection{
    public function __construct(){
        parent::__construct();
        
    }
    public function get_productos($dato){
        $resultado=$this->db_conection->query('SELECT * FROM artículos WHERE D="' . $dato . '"');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }


}


?>