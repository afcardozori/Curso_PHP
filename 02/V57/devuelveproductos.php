<?php 

require("conection.php");

class DevuelveProductos extends Conection{
    public function __construct(){
        parent::__construct();
        
    }
    public function get_productos(){
        $resultado=$this->db_conection->query('SELECT * FROM artículos');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }


}


?>