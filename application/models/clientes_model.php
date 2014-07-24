<?php
class Clientes_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    
    //obtenemos el total de filas para hacer la paginación
    function filas() {
        $consulta = $this->db->get('clientes');
        return  $consulta->num_rows() ;
    }
        
    //obtenemos todas las provincias a paginar con la función
    //total_posts_paginados pasando la cantidad por página y el segmento
    //como parámetros de la misma
    function total_paginados($por_pagina,$segmento) {
            $consulta = $this->db->get('clientes',$por_pagina,$segmento);
            if($consulta->num_rows()>0) {
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
            }
    }
    
    //modelo que obtiene los datos de los clientes a partir de un id
    function dame_cliente($idCliente) {
        $this->db->from('clientes');
        $this->db->where('idClientes',$idCliente);
        $query = $this->db->get();  
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $idClientes=$row->idClientes;
                $NombreEmpresa=$row->NombreEmpresa;
                $CIF=$row->CIF;
                $Direccion=$row->Direccion;
                $CodigoPostal=$row->CodigoPostal;
                $Localidad=$row->Localidad;
                $Provincia=$row->Provincia;
                $Tlf=$row->Tlf;
                $Email=$row->Email;
                $Descripcion=$row->Descripcion;
                $Logo=$row->Logo;
            }
            
            $datoscliente = array(
                        'idClientes'  => $idClientes,
                        'NombreEmpresa' => $NombreEmpresa,
                        'CIF' => $CIF,
                        'Direccion' => $Direccion,
                        'CodigoPostal' => $CodigoPostal,
                        'Localidad' => $Localidad,
                        'Provincia' => $Provincia,
                        'Tlf' => $Tlf,
                        'Email' => $Email,
                        'Descripcion' => $Descripcion,
                        'Logo' => $Logo
                     );
            
            return $datoscliente;
        } else {
            return 0;
        }                  
    }
    
    function actualiza_datos($datoscliente){        
        
        $this->db->where('idClientes', $datoscliente['idClientes']);
        $this->db->update('clientes', $datoscliente);          
                
    }
    
    function inserta_cliente(){    
        
        $data = array(
               'NombreEmpresa' => 'Nuevo Cliente'
            );

        $this->db->insert('clientes', $data);         
        return $this->db->insert_id();        
    }
    
    //modelo que obtiene los datos de los clientes a partir de un id
    function dame_solo_nombre($idCliente) {
        $this->db->select('NombreEmpresa');
        $this->db->from('clientes');
        $this->db->where('idClientes',$idCliente);
        $query = $this->db->get();  
        
        foreach ($query->result() as $fila){
            $NombreEmpresa = $fila->NombreEmpresa;
        }
        
        return $NombreEmpresa;
    }
    
    function borra_cliente($idClientes){  
        
        
        $this->db->delete('usuarios', array('Clientes_idClientes' => $idClientes)); 
        $this->db->delete('clientes', array('idClientes' => $idClientes));     
        
    }
    
}
?>
