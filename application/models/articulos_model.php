<?php
class Articulos_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    
     function obtener_articulos(){         
        $ssql = "select * from articulos order by id desc limit 5";
        return mysql_query($ssql);
    }
    
}
?>
