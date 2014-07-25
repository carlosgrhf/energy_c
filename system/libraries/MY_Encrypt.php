<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Encrypt extends CI_Encrypt
{
    public function __construct()
    {
        if ( ! function_exists('mcrypt_encrypt')) {
            throw new Exception("Encryption requires mcrypt PHP extension!");
        }

        parent::__construct();
    }
}
