<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {
	function __construct()
    {
    	parent :: __construct();
    	$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('users_model');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index-flexus');
	}

	public function send(){
		$this->load->view('login');
	}
	public function login(){
		if(!$this->session->userdata('username')){

		
		//set rules | nombre del campo, nombre de la variable, reglas
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");


		if (! $this->form_validation->run())
		{
			echo "error";
		}
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user= $this->users_model->__login_user($email,$password); 
		//print_r($user['data'][0]->nombre_usuario);
		if($user['success']==TRUE){

			$sessionData=array('username'=>$user['data'][0]->nombre_usuario,'email'=>$user['data'][0]->email);
			$this->session->set_userdata($sessionData);
			$this->load->view('inicio');
		}
		else {
			echo "no entro";
		}
	}else{
		$this->load->view('inicio');
	}

	}
}
