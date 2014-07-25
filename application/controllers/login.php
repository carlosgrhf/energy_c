<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
   
    
    //Función que por defecto muestra el formulario de entrada a la aplicación para hacer login
    public function index(){
        
       
        
        $data['title'] = 'Inicio';
        $data_body['error'] = 0;
        $datos_plantilla["head"] = $this->load->view('plantilla/head_login', $data);
        $datos_plantilla["body"] = $this->load->view('plantilla/body_login', $data_body);
      
        $this->load->view('main_login', $datos_plantilla);        
    }
   
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function procesar_form_login(){
        
        
        //si se ha hecho submit en el formulario...
        if(isset($_POST['login'])){
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            
            //cargo el modelo de Login
            $this->load->model('Login_model');
            
            //pido la comprobación la contraseña al modelo
            $passwordenBD = $this->Login_model->dame_password($username);  
            
            $this->load->helper('encriptar');
            $password_crypt=encriptando($password);
            
            if( $password_crypt == $passwordenBD) {                
                
                //si el usuario es válido llamamos al modelo que recoge los datos del usuario
                $IDUsuario = $this->Login_model->datos_usuario($username, $passwordenBD);
                
                if($IDUsuario!=0){
                
                    $datasession = array(
                        'usuario_id'  => $IDUsuario,
                        'login_ok' => TRUE
                     );
                     // creamos la sesión con dichas variables
                     $this->session->set_userdata($datasession);
                     // y redirigimos al controlador del panel principal
                     redirect('panel', 'refresh');
                } else {
                    redirect('energy/error', 'refresh');
                }
            } else {
                 redirect('energy/error', 'refresh');
            }  
            
                       
        } else {
            redirect('energy/error', 'refresh');
        }  
    }
    
    //con esta función procesamos el formulario de login y creamos la lógica de entrada
    public function procesar_form_registro(){
        //si se ha hecho submit en el formulario...
        if(isset($_POST['registro'])){
            $nombre = $this->input->post("nombre");
            $direccion = $this->input->post("direccion");
            $codigopostal = $this->input->post("codigopostal");
            $ciudad = $this->input->post("ciudad");
            $genero = $this->input->post("genero");
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            $password_again = $this->input->post("password_again");
            $agree = $this->input->post("agree");
            
            //cargo el modelo de Login
            $this->load->model('Login_model');
            
            //pido la comprobación del email para saber si existe el usuario
            $comprobar_email = $this->Login_model->comprobar_email($email);
            
            //si ya hay un usuario con ese email en la base de datos rechazamos al usuario   
            if($comprobar_email==1){
                redirect('energy/error_registro_email', 'refresh');
                
            } else {
                //si no hay un usuario registrado con ese email procedemos a insertar el nuevo usuario
                
                //pero primero ciframos la contraseña cargando el helper encriptar
                $this->load->helper('encriptar');
                $password_crypt=crypt_blowfish($password);
                
                //creamos el array para pasar los datos al modelo
                $dataalta = array(
                    'IDCliente'  => '439',
                    'Nombre'  => $nombre,
                    'Direccion' => $direccion,
                    'CodigoPostal' => $codigopostal,
                    'Ciudad' => $ciudad,
                    'Genero' => $genero,
                    'CorreoPartner' => $email,
                    'Usuario' => $email,
                    'Password' => $password_crypt,
                    'PoliticaPrivacidad' => 'si'
                 );
                
                //llamamos al modelo que inserta el nuevo usuario
                $this->Login_model->registrar_usuario($dataalta);
                
                
                //si el usuario es válido llamamos al modelo que recoge los datos del usuario
                $consulta = $this->Login_model->datos_usuario($email, $password_crypt);
                
                foreach ($consulta->result_array() as $fila) {
                    $id = $fila['IDUsuario'];
                    $usuario = $fila['Usuario'];
                    $email = $fila['CorreoPartner'];
                }
                
                $datasession = array(
                    'usuario_id'  => $id,
                    'login_ok' => TRUE
                 );
                 // creamos la sesión con dichas variables
                 $this->session->set_userdata($datasession);
                 // y redirigimos al controlador principal  
                 redirect('panel', 'refresh');
            }               
        }
    }
        
    //si el login es erroneo llamará a esta función
    public function error(){
        $data['title'] = 'Inicio';
        $data_body['error'] = 1;
        $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
        $datos_plantilla["body"] = $this->load->view('plantilla/body', $data_body);
        $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 
      
        $this->load->view('main_template', $datos_plantilla);
    }
    
    //si el login es erroneo llamará a esta función
    public function error_registro_email(){
        $data['title'] = 'Inicio';
        $data_body['error'] = 2;
        $datos_plantilla["head"] = $this->load->view('plantilla/head', $data);
        $datos_plantilla["body"] = $this->load->view('plantilla/body', $data_body);
        $datos_plantilla["footer"] = $this->load->view('plantilla/footer'); 
      
        $this->load->view('main_template', $datos_plantilla);
    }
   
}
?>