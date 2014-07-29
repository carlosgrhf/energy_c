<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizaciones extends CI_Controller {
    
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="organizaciones";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);            
            
            
             //cargo el modelo de Clientes
            $this->load->model('Organizaciones_model');
            
            //HACEMOS EL PAGINADOR
            $pages=2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url().'organizaciones/pagina/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->Organizaciones_model->filas();//calcula el número de filas  
            $config['per_page'] = $pages; //Número de registros mostrados por páginas
            $config['num_links'] = 20; //Número de links mostrados en la paginación
            $config['first_link'] = 'Primera';//primer link
            $config['last_link'] = 'Última';//último link
            $config["uri_segment"] = 3;//el segmento de la paginación
            $config['next_link'] = 'Siguiente';//siguiente link
            $config['prev_link'] = 'Anterior';//anterior link
            $config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
            $config['full_tag_close'] = '</div>';//el cierre del div de la paginación
            $this->pagination->initialize($config); //inicializamos la paginación        
            $dataorganizaciones["organizaciones"] = $this->Organizaciones_model->total_paginados($config['per_page'],$this->uri->segment(3)); 
            
                
             
            $data['title'] = 'Organizaciones';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_organizaciones', $dataorganizaciones);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
    //Función que muestra la edición de un cliente
    public function editar($idOrganizacion){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="organizaciones";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Organizaciones_model');
            
                
            $dataorganizaciones = $this->Organizaciones_model->dame_organizacion($idOrganizacion);           
                
                
            $data['title'] = 'Editar Organizacion';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_organizaciones_editar', $dataorganizaciones);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function actualizar_datos(){
            //si se ha hecho submit en el formulario...
            if(isset($_POST['actualizar'])){
                $idOrganizaciones = $this->input->post("idOrganizaciones");
                $NombreOrganizacion = $this->input->post("NombreOrganizacion");
                $CIF = $this->input->post("CIF");                
                $Direccion = $this->input->post("Direccion");
                $CodigoPostal = $this->input->post("CodigoPostal");
                $Localidad = $this->input->post("Localidad");
                $Provincia = $this->input->post("Provincia");
                $Tlf = $this->input->post("Tlf");
                $Email = $this->input->post("Email");
                $PersonaContacto = $this->input->post("PersonaContacto");
                $Descripcion = $this->input->post("Descripcion");

                $datosorganizacion = array(
                            'idOrganizaciones'  => $idOrganizaciones,
                            'NombreOrganizacion'  => $NombreOrganizacion,
                            'CIF' => $CIF,                            
                            'Direccion' => $Direccion,
                            'CodigoPostal' => $CodigoPostal,
                            'Localidad' => $Localidad,
                            'Provincia' => $Provincia,
                            'Tlf' => $Tlf,
                            'Email' => $Email,
                            'PersonaContacto' => $PersonaContacto,
                            'Descripcion' => $Descripcion
                         );


                //cargo el modelo de Datospersonales
                $this->load->model('Organizaciones_model');

                //pasamos los datos recibidos por el formulario al modelo para actualizarlos
                $this->Organizaciones_model->actualiza_datos($datosorganizacion);        

                redirect('organizaciones/editar/'.$idOrganizaciones.'', 'refresh');


            } else {
                redirect('organizaciones', 'refresh');
            }  
    }
    
    //Función que muestra la edición de un cliente
    public function nuevo(){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="organizaciones";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Organizaciones_model');            
                
            $idOrganizacion=$this->Organizaciones_model->inserta_organizacion();           
            $dataorganizaciones = $this->Clientes_model->dame_organizacion($idOrganizacion);     
                
            $data['title'] = 'Editar Organización';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_organizaciones_editar', $dataorganizaciones);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //Función que muestra la edición de un cliente
    public function ver($idOrganizacion){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="organizaciones";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Organizaciones_model');
            $dataorganizaciones = $this->Organizaciones_model->dame_organizacion($idOrganizacion);           
                
            //cargo el modelo de Usuarios
            $this->load->model('Usuarios_model');
            $dataorganizaciones['usuarios'] = $this->Usuarios_model->dame_usuarios_de_organizacion($idOrganizacion);
                
            $data['title'] = 'Editar Organización';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_organizaciones_ver', $dataorganizaciones);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //Función que muestra usuarios
    public function ver_usuarios($idOrganizacion){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="organizaciones";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
            //cargo el modelo de Usuarios
            $this->load->model('Usuarios_model');
            $datausuarios['usuarios'] = $this->Usuarios_model->dame_usuarios_de_organizacion($idOrganizacion);
            
            //cargo el modelo de Clientes
            $this->load->model('Organizaciones_model');
            $dataorganizaciones = $this->Organizaciones_model->dame_organizacion($idOrganizacion);   
            
            
            $datausuarios['idOrganizaciones'] = $dataorganizaciones['idOrganizaciones'];
            $datausuarios['NombreOrganizacion'] = $dataorganizaciones['NombreOrganizacion'];
            
            $data['title'] = 'Usuarios de la organización';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_organizaciones_ver_usuarios', $datausuarios);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //Función que borra un cliente
    public function borrar($idOrganizacion){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="organizaciones";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
            //cargo el modelo de clientes
            $this->load->model('Organizaciones_model');            
            //borro el cliente
            $this->Organizaciones_model->borra_cliente($idOrganizacion);
            
            
            //redirijo a la pestaña de clientes            
            redirect('organizaciones', 'refresh');
            
        
        }
    }
   
}
?>