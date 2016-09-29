<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {
	function __construct()
    {
    	parent :: __construct();
    	$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('users_model');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('registro');
	}

	public function register(){
		//set rules | nombre del campo, nombre de la variable, reglas
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");


		if (! $this->form_validation->run())
		{
			echo "error";
		}
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$dateBirth = $this->input->post('fechanacimiento');
		$insert = $this->users_model->__register_user($username, $email, $password, $dateBirth);

		if($insert['status'] == 'success') {
			$to = $email;
			$subject = "bienvenido";
			$text = "Bienvenido a flexus blog";
			$html = "<h1>Bievenido</h1><p>a flexus blog $username</p>";
			$this->mailer->send($to, $subject, $text, $html);
		}else{
			echo "error";
		}
	}
}
