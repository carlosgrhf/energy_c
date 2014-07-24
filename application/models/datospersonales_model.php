<?php
class Datospersonales_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    
     function dame_datospersonales($usuario_id){ 
         
        $this->db->from('usuarios');
        $this->db->where('idUsuarios',$usuario_id);
        $query = $this->db->get();  
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $Nombre=$row->Nombre;
                $Apellidos=$row->Apellidos;
                $Tlf=$row->Tlf;
                $Email=$row->Email;
                $Direccion=$row->Direccion;
                $CodigoPostal=$row->CodigoPostal;
                $Localidad=$row->Localidad;
                $Provincia=$row->Provincia;
                $Usuario=$row->Usuario;
                $Descripcion=$row->Descripcion;
                $FechaAlta=$row->FechaAlta;
                $TipoUsuario=$row->TipoUsuario;
                $Estado=$row->Estado;
            }
            
            $datosusuario = array(
                        'Nombre'  => $Nombre,
                        'Apellidos' => $Apellidos,
                        'Tlf' => $Tlf,
                        'Email' => $Email,
                        'Direccion' => $Direccion,
                        'CodigoPostal' => $CodigoPostal,
                        'Localidad' => $Localidad,
                        'Provincia' => $Provincia,
                        'Usuario' => $Usuario,
                        'Descripcion' => $Descripcion,
                        'FechaAlta' => $FechaAlta,
                        'TipoUsuario' => $TipoUsuario,
                        'Estado' => $Estado
                     );
            
            return $datosusuario;
        } else {
            return 0;
        }          
    }
    
    function actualiza_datos($datospersonales, $usuario_id){
        
        
        $this->db->where('idUsuarios', $usuario_id);
        $this->db->update('usuarios', $datospersonales); 
         
                
    }
    
}
?>
