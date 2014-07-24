<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {
    
   
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="perfil";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
            
            //cargo el modelo de Datos personales
            $this->load->model('Datospersonales_model');
            
            //recuperamos el id de session para pasarselo al modelo y así recuperar todos los datos
            $usuario_id = $this->session->userdata('usuario_id');
            
            //pido la comprobación la contraseña al modelo
            $datospersonales = $this->Datospersonales_model->dame_datospersonales($usuario_id); 
            
            $data['title'] = 'Mi Perfil';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_perfil', $datospersonales);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function actualizar_datospersonales(){
        //si se ha hecho submit en el formulario...
        if(isset($_POST['actualizar'])){
            $Nombre = $this->input->post("Nombre");
            $Apellidos = $this->input->post("Apellidos");
            $Tlf = $this->input->post("Tlf");
            $Email = $this->input->post("Email");
            $Direccion = $this->input->post("Direccion");
            $CodigoPostal = $this->input->post("CodigoPostal");
            $Localidad = $this->input->post("Localidad");
            $Provincia = $this->input->post("Provincia");
            $Usuario = $this->input->post("Usuario");
            $Descripcion = $this->input->post("Descripcion");
            
            
            
            $datospersonales = array(
                        'Nombre'  => $Nombre,
                        'Apellidos' => $Apellidos,
                        'Tlf' => $Tlf,
                        'Email' => $Email,
                        'Direccion' => $Direccion,
                        'CodigoPostal' => $CodigoPostal,
                        'Localidad' => $Localidad,
                        'Provincia' => $Provincia,
                        'Usuario' => $Usuario,
                        'Descripcion' => $Descripcion
                     );
            
            //recuperamos el id de session para pasarselo al modelo y así recuperar todos los datos
            $usuario_id = $this->session->userdata('usuario_id');
            
            //cargo el modelo de Datospersonales
            $this->load->model('Datospersonales_model');
            
            //pasamos los datos recibidos por el formulario al modelo para actualizarlos
            $this->Datospersonales_model->actualiza_datos($datospersonales, $usuario_id); 
           
            redirect('perfil', 'refresh');
                      
            
        } else {
            redirect('perfil', 'refresh');
        }  
    }
   
}
?>