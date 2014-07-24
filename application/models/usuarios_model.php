<?php
class Usuarios_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    
    //obtenemos el total de filas para hacer la paginación
    function filas() {
        $consulta = $this->db->get('usuarios');
        return  $consulta->num_rows() ;
    }
        
    //obtenemos todas las provincias a paginar con la función
    //total_posts_paginados pasando la cantidad por página y el segmento
    //como parámetros de la misma
    function total_paginados($por_pagina,$segmento) {
            $consulta = $this->db->get('usuarios',$por_pagina,$segmento);
            if($consulta->num_rows()>0) {
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
            }
    }
    
    //modelo que obtiene los datos de los clientes a partir de un id
    function dame_usuario($idUsuario) {
        $this->db->from('usuarios');
        $this->db->where('idUsuarios',$idUsuario);
        $query = $this->db->get();  
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $idUsuarios=$row->idUsuarios;
                $Nombre=$row->Nombre;
                $Apellidos=$row->Apellidos;
                $Tlf=$row->Tlf;
                $Email=$row->Email;
                $Direccion=$row->Direccion;
                $CodigoPostal=$row->CodigoPostal;
                $Localidad=$row->Localidad;
                $Provincia=$row->Provincia;
                $Usuario=$row->Usuario;
                $Password=$row->Password;
                $Descripcion=$row->Descripcion;
                $FechaAlta=$row->FechaAlta;
                $TipoUsuario=$row->TipoUsuario;
                $Estado=$row->Estado;
                $Clientes_idClientes=$row->Clientes_idClientes;
            }
            
            $datosusuario = array(
                        'idUsuarios' => $idUsuarios,
                        'Nombre' => $Nombre,
                        'Apellidos' => $Apellidos,
                        'Tlf' => $Tlf,
                        'Email' => $Email,
                        'Direccion' => $Direccion,
                        'CodigoPostal' => $CodigoPostal,
                        'Localidad' => $Localidad,
                        'Provincia' => $Provincia,
                        'Usuario' => $Usuario,
                        'Password' => $Password,
                        'Descripcion' => $Descripcion,
                        'FechaAlta' => $FechaAlta,
                        'TipoUsuario' => $TipoUsuario,
                        'Estado' => $Estado,
                        'Clientes_idClientes' => $Clientes_idClientes
                     );
            
            return $datosusuario;
        } else {
            return 0;
        }                  
    }
    
    //modelo que obtiene los datos de los clientes a partir de un id
    function dame_usuarios_de_cliente($idCliente) {
        $this->db->from('usuarios');
        $this->db->where('Clientes_idClientes',$idCliente);
        $query = $this->db->get(); 
        
        if($query->num_rows() > 0){
            foreach ($query->result() as $fila){
                $data[] = $fila;
            }
            return $data;
        } else {
            return ;
        }
                           
    }
    
    function actualiza_datos($datosusuario){        
        
        $this->db->where('idUsuarios', $datosusuario['idUsuarios']);
        $this->db->update('usuarios', $datosusuario);          
                
    }
    
    function actualiza_datos_tipo($datosusuario){        
        
        $this->db->where('idUsuarios', $datosusuario['idUsuarios']);
        $this->db->update('usuarios', $datosusuario);          
                
    }
    
    function inserta_usuario($idClientes){    
        
        $data = array(
               'Nombre' => 'Nuevo Usuario',
               'Clientes_idClientes' => $idClientes
            );

        $this->db->insert('usuarios', $data);         
        return $this->db->insert_id();        
    }
    
    function borra_usuario($idUsuarios){  
        
        $this->db->delete('usuarios', array('idUsuarios' => $idUsuarios));     
        
    }
    
    
    
}
?>
