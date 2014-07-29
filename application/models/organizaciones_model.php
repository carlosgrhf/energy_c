<?php
class Organizaciones_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    
    //obtenemos el total de filas para hacer la paginación
    function filas() {
        $consulta = $this->db->get('organizaciones');
        return  $consulta->num_rows() ;
    }
        
    //obtenemos todas las provincias a paginar con la función
    //total_posts_paginados pasando la cantidad por página y el segmento
    //como parámetros de la misma
    function total_paginados($por_pagina,$segmento) {
            $consulta = $this->db->get('organizaciones',$por_pagina,$segmento);
            if($consulta->num_rows()>0) {
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
            }
    }
    
    //modelo que obtiene los datos de los clientes a partir de un id
    function dame_organizacion($idOrganizacion) {
        $this->db->from('organizaciones');
        $this->db->where('idOrganizaciones',$idOrganizacion);
        $query = $this->db->get();  
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $idOrganizaciones=$row->idOrganizaciones;
                $NombreOrganizacion=$row->NombreOrganizacion;
                $CIF=$row->CIF;
                $Direccion=$row->Direccion;
                $CodigoPostal=$row->CodigoPostal;
                $Localidad=$row->Localidad;
                $Provincia=$row->Provincia;
                $Tlf=$row->Tlf;
                $Email=$row->Email;
                $PersonaContacto=$row->PersonaContacto;
                $Descripcion=$row->Descripcion;
                $Logo=$row->Logo;
            }
            
            $datoscliente = array(
                        'idOrganizaciones'  => $idOrganizaciones,
                        'NombreOrganizacion' => $NombreOrganizacion,
                        'CIF' => $CIF,
                        'Direccion' => $Direccion,
                        'CodigoPostal' => $CodigoPostal,
                        'Localidad' => $Localidad,
                        'Provincia' => $Provincia,
                        'Tlf' => $Tlf,
                        'Email' => $Email,
                        'PersonaContacto' => $PersonaContacto,
                        'Descripcion' => $Descripcion,
                        'Logo' => $Logo
                     );
            
            return $datoscliente;
        } else {
            return 0;
        }                  
    }
    
    function actualiza_datos($datosorganizacion){        
        
        $this->db->where('idOrganizaciones', $datosorganizacion['idOrganizaciones']);
        $this->db->update('organizaciones', $datosorganizacion);          
                
    }
    
    function inserta_organizacion(){    
        
        $data = array(
               'NombreOrganizacion' => 'Nueva Organización'
            );

        $this->db->insert('clientes', $data);         
        return $this->db->insert_id();        
    }
    
    //modelo que obtiene los datos de los clientes a partir de un id
    function dame_solo_nombre($idOrganizacion) {
        $this->db->select('NombreOrganizacion');
        $this->db->from('organizaciones');
        $this->db->where('idOrganizaciones',$idOrganizacion);
        $query = $this->db->get();  
        
        foreach ($query->result() as $fila){
            $NombreOrganizacion = $fila->NombreOrganizacion;
        }
        
        return $NombreOrganizacion;
    }
    
    function borra_organizacion($idOrganizaciones){  
        
        
        $this->db->delete('usuarios', array('Organizaciones_idOrganizaciones' => $idOrganizaciones)); 
        $this->db->delete('organizaciones', array('idOrganizaciones' => $idOrganizaciones));     
        
    }
    
}
?>
