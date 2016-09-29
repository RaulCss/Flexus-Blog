<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

	public function __register_user($username, $email, $password, $dateBirth=null)
	{	
		$password =  password_hash($password, PASSWORD_BCRYPT);
		$array = array('id_usuario' => '', 'nombre_usuario' => $username, 'email' => $email, 'rol' => '2', 'password' => $password, 'fechaNacimiento' => $dateBirth);

		$insert = $this->db->insert('usuario', $array);

		if($insert){
			$return = array('status'=>'success');
		}else{
			$return = array('status'=>'error');
		}
		return $return;
	}
}