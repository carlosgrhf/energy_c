<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {
    
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="clientes";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);            
            
            
             //cargo el modelo de Clientes
            $this->load->model('Clientes_model');
            
            //HACEMOS EL PAGINADOR
            $pages=2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url().'clientes/pagina/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->Clientes_model->filas();//calcula el número de filas  
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
            $dataclientes["clientes"] = $this->Clientes_model->total_paginados($config['per_page'],$this->uri->segment(3)); 
            
                
             
            $data['title'] = 'Clientes';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_clientes', $dataclientes);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
    //Función que muestra la edición de un cliente
    public function editar($idCliente){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="clientes";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Clientes_model');
            
                
            $dataclientes = $this->Clientes_model->dame_cliente($idCliente);           
                
                
            $data['title'] = 'Editar Cliente';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_clientes_editar', $dataclientes);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function actualizar_datos(){
            //si se ha hecho submit en el formulario...
            if(isset($_POST['actualizar'])){
                $idClientes = $this->input->post("idClientes");
                $NombreEmpresa = $this->input->post("NombreEmpresa");
                $CIF = $this->input->post("CIF");
                $Tlf = $this->input->post("Tlf");
                $Email = $this->input->post("Email");
                $Direccion = $this->input->post("Direccion");
                $CodigoPostal = $this->input->post("CodigoPostal");
                $Localidad = $this->input->post("Localidad");
                $Provincia = $this->input->post("Provincia");
                $Descripcion = $this->input->post("Descripcion");



                $datoscliente = array(
                            'idClientes'  => $idClientes,
                            'NombreEmpresa'  => $NombreEmpresa,
                            'CIF' => $CIF,
                            'Tlf' => $Tlf,
                            'Email' => $Email,
                            'Direccion' => $Direccion,
                            'CodigoPostal' => $CodigoPostal,
                            'Localidad' => $Localidad,
                            'Provincia' => $Provincia,
                            'Descripcion' => $Descripcion
                         );



                //cargo el modelo de Datospersonales
                $this->load->model('Clientes_model');

                //pasamos los datos recibidos por el formulario al modelo para actualizarlos
                $this->Clientes_model->actualiza_datos($datoscliente);        

                redirect('clientes/editar/'.$idClientes.'', 'refresh');


            } else {
                redirect('clientes', 'refresh');
            }  
    }
    
    //Función que muestra la edición de un cliente
    public function nuevo(){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="clientes";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Clientes_model');
            
                
            $idCliente=$this->Clientes_model->inserta_cliente();           
            $dataclientes = $this->Clientes_model->dame_cliente($idCliente);     
                
            $data['title'] = 'Editar Cliente';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_clientes_editar', $dataclientes);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //Función que muestra la edición de un cliente
    public function ver($idCliente){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="clientes";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Clientes_model');
            $dataclientes = $this->Clientes_model->dame_cliente($idCliente);           
                
            //cargo el modelo de Usuarios
            $this->load->model('Usuarios_model');
            $dataclientes['usuarios'] = $this->Usuarios_model->dame_usuarios_de_cliente($idCliente);
                
            $data['title'] = 'Editar Cliente';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_clientes_ver', $dataclientes);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }    
    
    
    //Función que borra un cliente
    public function borrar($idCliente){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="clientes";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
            //cargo el modelo de clientes
            $this->load->model('Clientes_model');            
            //borro el cliente
            $this->Clientes_model->borra_cliente($idCliente);
            
            
            //redirijo a la pestaña de clientes            
            redirect('clientes', 'refresh');
            
        
        }
    }
   
}
?>