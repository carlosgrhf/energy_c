<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class subir_controller extends CI_Controller {

   public function __construct(){

        parent::__construct();

        $this->load->helper('url');

    }

     
   public function index(){

        $this->load->view('subir_view');
   }

    
   public function subir(){
       
       //recogemos el id del cliente
       $idClientes = $this->input->post("idClientes");
       
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'cliente_'.$idClientes.'';
        $config['overwrite'] = TRUE; 
       
       //Cargamos la librería de subida y le pasamos la configuración

        $this->load->library('upload', $config);

 

        if(!$this->upload->do_upload()){

            /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/

                //$error=array('error' => $this->upload->display_errors());

                //$this->load->view('subir_view', $error);
            
            //de momento redirigmos para hacer que funcione ya volveremos a mejorar la función
            redirect('clientes/editar/'.$idClientes.'', 'refresh');

        }else{

            //Datos del fichero subido

            //$datos["img"]=$this->upload->data();

 

            // Podemos acceder a todas las propiedades del fichero subido

            // $datos["img"]["file_name"]);

 

            //Cargamos la vista y le pasamos los datos

            //$this->load->view('subir_view', $datos
            //
            
            //de momento redirigmos para hacer que funcione ya volveremos a mejorar la función            
            redirect('clientes/editar/'.$idClientes.'', 'refresh');

        }
    }  

}

?>