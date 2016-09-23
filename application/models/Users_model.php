<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

	public function __register_user($name, $username, $email. $password)
	{
		$this->db->insert();
	}
}