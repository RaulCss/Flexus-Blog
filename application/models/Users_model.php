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
	public function __login_user($email, $password)
	{
		$users= $this->db->query("select * from usuario where email='$email'")->result();
		
		foreach($users as $user){
			$pass=$user->password;
		}

		if (password_verify($password, $pass)){
			$array = array('success'=>TRUE, 'data' => $users);
		}else{
			$array = array('success'=>FALSE, 'data' => '');
		}
		//var_dump(password_verify($password, $pass));
		return $array;
	}
}