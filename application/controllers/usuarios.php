<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="usuarios";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Usuarios_model');
            
            //HACEMOS EL PAGINADOR
            $pages=2; //Número de registros mostrados por páginas
            $this->load->library('pagination'); //Cargamos la librería de paginación
            $config['base_url'] = base_url().'usuarios/pagina/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
            $config['total_rows'] = $this->Usuarios_model->filas();//calcula el número de filas  
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
            $dataclientes["usuarios"] = $this->Usuarios_model->total_paginados($config['per_page'],$this->uri->segment(3)); 
            
                       
            $data['title'] = 'Usuarios';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_usuarios', $dataclientes);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
    //Función que muestra la edición de un cliente
    public function editar($idUsuario){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="usuarios";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Clientes
            $this->load->model('Usuarios_model');
            
                
            $datausuarios = $this->Usuarios_model->dame_usuario($idUsuario);           
                
                
            $data['title'] = 'Editar Usuario';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_usuarios_editar', $datausuarios);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function actualizar_datos(){
            //si se ha hecho submit en el formulario...
            if(isset($_POST['actualizar'])){
                $idUsuarios = $this->input->post("idUsuarios");
                $Nombre = $this->input->post("Nombre");
                $Apellidos = $this->input->post("Apellidos");
                $Tlf = $this->input->post("Tlf");
                $Email = $this->input->post("Email");
                $Direccion = $this->input->post("Direccion");
                $CodigoPostal = $this->input->post("CodigoPostal");
                $Localidad = $this->input->post("Localidad");
                $Provincia = $this->input->post("Provincia");
                $Descripcion = $this->input->post("Descripcion");



                $datosusuario = array(
                            'idUsuarios'  => $idUsuarios,
                            'Nombre'  => $Nombre,
                            'Apellidos' => $Apellidos,
                            'Tlf' => $Tlf,
                            'Email' => $Email,
                            'Direccion' => $Direccion,
                            'CodigoPostal' => $CodigoPostal,
                            'Localidad' => $Localidad,
                            'Provincia' => $Provincia,
                            'Descripcion' => $Descripcion
                         );



                //cargo el modelo de Datospersonales
                $this->load->model('Usuarios_model');

                //pasamos los datos recibidos por el formulario al modelo para actualizarlos
                $this->Usuarios_model->actualiza_datos($datosusuario);        

                redirect('usuarios/editar/'.$idUsuarios.'', 'refresh');


            } else {
                redirect('usuarios', 'refresh');
            }  
    }
    
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function actualizar_datos_tipo(){
            //si se ha hecho submit en el formulario...
            if(isset($_POST['actualizar'])){
                $idUsuarios = $this->input->post("idUsuarios");
                $TipoUsuario = $this->input->post("TipoUsuario");
                $Estado = $this->input->post("Estado");


                $datosusuario = array(
                            'idUsuarios'  => $idUsuarios,
                            'TipoUsuario'  => $TipoUsuario,
                            'Estado' => $Estado
                         );

                
                //cargo el modelo de Datospersonales
                $this->load->model('Usuarios_model');

                //pasamos los datos recibidos por el formulario al modelo para actualizarlos
                $this->Usuarios_model->actualiza_datos_tipo($datosusuario);        

                redirect('usuarios/editar/'.$idUsuarios.'', 'refresh');


            } else {
                redirect('usuarios', 'refresh');
            }  
    }
    
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function actualizar_datos_acceso(){
            //si se ha hecho submit en el formulario...
            if(isset($_POST['actualizar'])){
                $idUsuarios = $this->input->post("idUsuarios");
                $Usuario = $this->input->post("Usuario");
                $Password = $this->input->post("Password");
                
                //hay que cifrar el password antes de guardarlo
                //pero primero ciframos la contraseña cargando el helper encriptar
                $this->load->helper('encriptar');
                $password_crypt=encriptando($Password);
                
                

                $datosusuario = array(
                            'idUsuarios'  => $idUsuarios,
                            'Usuario'  => $Usuario,
                            'Password' => $password_crypt
                         );

                
                //cargo el modelo de Datospersonales
                $this->load->model('Usuarios_model');

                //pasamos los datos recibidos por el formulario al modelo para actualizarlos
                $this->Usuarios_model->actualiza_datos_tipo($datosusuario);        

                redirect('usuarios/editar/'.$idUsuarios.'', 'refresh');


            } else {
                redirect('usuarios', 'refresh');
            }  
    }
    
    //Función que muestra la edición de un cliente
    public function nuevo($idOrganizaciones){
                  
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="usuarios";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Usuarios
            $this->load->model('Usuarios_model');
            
                
            $idUsuario=$this->Usuarios_model->inserta_usuario($idOrganizaciones);           
            $datausuarios = $this->Usuarios_model->dame_usuario($idUsuario);     
                
            $data['title'] = 'Editar Cliente';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_usuarios_editar', $datausuarios);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //Función que muestra la edición de un cliente
    public function ver($idUsuario){
        
          
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="usuarios";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
             //cargo el modelo de Usuarios
            $this->load->model('Usuarios_model');
            
            //Saco todos los datos del usuario
            $datausuarios = $this->Usuarios_model->dame_usuario($idUsuario);  
            
            $idOrganizaciones = $datausuarios['Organizaciones_idOrganizaciones'];            
             
            //Necesito saber el nombre de la empresa a la que pertenece así que cargo el modelo clientes y le paso el $idCliente
            //que he sacado en el paso anterior
            $this->load->model('Clientes_model');
            $dataclientes = $this->Clientes_model->dame_cliente($idOrganizaciones);
            
            //Añado el dato del cliente al array de datos del usuario para que la vista lo pinte
            $datausuarios['NombreEmpresa'] = $dataclientes['NombreEmpresa'];            
                
            $data['title'] = 'Ver Usuario';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_usuarios_ver', $datausuarios);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
    
    //Función que borra un usuario dentro de clientes
    public function borrar($idUsuarios){
        
        $login_ok = $this->session->userdata('login_ok');             
        
        if($login_ok!=1){
            redirect('energy', 'refresh');
        } else {
            
            //con la libreria Navbar seleccionamos en que posición estamos para pintar el navbar
            $posicion="usuarios";
            $this->load->library('navbar');
            $eleccion = $this->navbar->navbar_posicion($posicion);
            
            
            //me traigo el Clientes_idClientes del usuario por que lo voy a necesitar
            //para ello cargo el modelo de usuarios
            $this->load->model('Usuarios_model');
            //ahora recojo los datos del usuario
            $datausuarios = $this->Usuarios_model->dame_usuario($idUsuarios);
            //inicializo y visualizo el idClientes
            $idCliente=$datausuarios['Clientes_idClientes'];
            
            //ahora ya puedo borrar el usuario
            $this->Usuarios_model->borra_usuario($idUsuarios);
            
            //me traigo los usuarios del cliente
            $datausuarios['usuarios'] = $this->Usuarios_model->dame_usuarios_de_cliente($idCliente);
            //cargo el modelo de Clintes
            $this->load->model('Clientes_model');
            //me traigo el cliente
            $dataclientes = $this->Clientes_model->dame_cliente($idCliente);  
            //inicializo las variables que necesito
            $datausuarios['idClientes'] = $dataclientes['idClientes'];
            $datausuarios['NombreEmpresa'] = $dataclientes['NombreEmpresa'];
            
            $data['title'] = 'Usuarios del cliente';
            $dato['usuario_id'] = $this->session->userdata('usuario_id');  
            $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
            $datos_plantilla["header"] = $this->load->view('plantilla/header', $dato);
            $datos_plantilla["navbar"] = $this->load->view('plantilla/navbar', $eleccion);
            $datos_plantilla["body"] = $this->load->view('plantilla/body_clientes_ver_usuarios', $datausuarios);
            $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 

            $this->load->view('main_panel', $datos_plantilla); 
        
        }
    }
   
}
?>