<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Navbar  {
    
    
	function navbar_posicion($posicion){
            
            if($posicion=="dashboard")$dashboard=1; else $dashboard=0;
            if($posicion=="grafico")$grafico=1; else $grafico=0;
            if($posicion=="organizaciones")$organizaciones=1; else $organizaciones=0;
            if($posicion=="clientes")$clientes=1; else $clientes=0;
            if($posicion=="agrupaciones")$agrupaciones=1; else $agrupaciones=0;
            if($posicion=="usuarios")$usuarios=1; else $usuarios=0;
            if($posicion=="menus")$menus=1; else $menus=0;
            if($posicion=="contadores")$contadores=1; else $contadores=0;
            
            $posicion = array(
                            'dashboard'  => $dashboard,
                            'grafico'  => $grafico,
                            'organizaciones'  => $organizaciones,
                            'clientes' => $clientes,
                            'agrupaciones' => $agrupaciones,
                            'usuarios' => $usuarios,
                            'menus' => $menus,
                            'contadores' => $contadores
                         );
            
            return $posicion;
            
		
	}


}
