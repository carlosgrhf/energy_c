<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cerrarsesion extends CI_Controller {
    
   
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        $this->session->sess_destroy();
        redirect('login', 'refresh');   
    }
}
?>