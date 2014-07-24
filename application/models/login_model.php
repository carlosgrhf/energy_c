<?php
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    
     function dame_password($username){ 
         
        $this->db->select('Password');
        $this->db->from('usuarios');
        $this->db->where('Usuario',$username);
        $query = $this->db->get();  
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $Password=$row->Password;
            }
            return $Password;
        } else {
            return 0;
        }  
                
    }
    
    function comprobar_email($email){ 
        
        $this->db->select('idUsuarios');
        $this->db->from('usuarios');
        $this->db->where('Email',$email);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0){
            return 1;
        } else {
            return 0;
        }  
         
    }
    
    function datos_usuario($username, $password){
        
        $this->db->select('idUsuarios');
        $this->db->from('usuarios');
        $this->db->where('Usuario',$username);
        $this->db->where('Password',$password);
        $query = $this->db->get();  
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $idUsuarios=$row->idUsuarios;
            }
            return $idUsuarios;
        } else {
            return 0;
        }  
    }
    
    function registrar_usuario($dataalta){
        
        $this->db->insert('usuarios', $dataalta); 
    }
    
}
?>
