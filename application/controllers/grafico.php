<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grafico extends CI_Controller {
    
    
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="grafico";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
            
            //cargo el modelo de Grafico
            //$this->load->model('Grafico_model');
            
            
            
        
            $data['title'] = 'Panel de Control';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_grafico');
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   

   
   
   
}
?>