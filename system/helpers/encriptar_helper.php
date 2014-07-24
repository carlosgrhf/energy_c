<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    
//si no existe la función crypt_blowfish la creamos
if(!function_exists('crypt_blowfish')){    
    
    function encriptando($password) {
        
        $password_crypt1 =  md5($password);
        $password_crypt2 =  sha1($password_crypt1);
        
        
        return $password_crypt2;
    }
}  