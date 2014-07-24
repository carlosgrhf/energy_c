<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Navbar  {
    
    
	function navbar_posicion($posicion){
            
            if($posicion=="dashboard")$dashboard=1; else $dashboard=0;
            if($posicion=="grafico")$grafico=1; else $grafico=0;
            if($posicion=="clientes")$clientes=1; else $clientes=0;
            if($posicion=="usuarios")$usuarios=1; else $usuarios=0;
            if($posicion=="menus")$menus=1; else $menus=0;
            if($posicion=="contadores")$contadores=1; else $contadores=0;
            
            $posicion = array(
                            'dashboard'  => $dashboard,
                            'grafico'  => $grafico,
                            'clientes' => $clientes,
                            'usuarios' => $usuarios,
                            'menus' => $menus,
                            'contadores' => $contadores
                         );
            
            return $posicion;
            
		
	}


}
