<?php 

require("conection.php");

class DevuelveProductos extends Conection{
    public function __construct(){
        parent::__construct();
        
    }
    public function get_productos($dato){

        $sql="SELECT * FROM artículos WHERE D='" . $dato . "'";
        $sentencia=$this->db_conection->prepare($sql);
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->db_conection=null;

        /*$resultado=$this->db_conection->query('SELECT * FROM artículos WHERE D="' . $dato . '"');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;*/
    }


}


?>