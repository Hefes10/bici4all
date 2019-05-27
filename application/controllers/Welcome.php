<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}

	public function index()
 	{
 		$data = array('titulo' => 'BC4ALL');

 		$this->load->view('front/head_view',$data);
 		$this->load->view('front/navbar_view');
 		$this->load->view('principal');
 		$this->load->view('front/footer_view');
 		$this->load->view('front/modal');

 	}

	public function terminosycondiciones()
 	{
 		// $this->load->view('index.html');
 		$data = array('titulo' => 'Terminos y Condiciones');

 		$this->load->view('front/head_view',$data);
 		$this->load->view('front/navbar_view');
 		$this->load->view('terminosycondiciones');
 		$this->load->view('front/footer_view');
 		$this->load->view('front/modal');

 	}

	public function quienessomos()
  	{
		// $this->load->view('index.html');
		$data = array('titulo' => '¿Quiénes somos?');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('quienessomos');
		$this->load->view('front/footer_view');
		$this->load->view('front/modal');
	}
	 
	public function contacto()
	{
		// $this->load->view('index.html');
		$data = array('titulo' => 'Contacto');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('contacto');
		$this->load->view('front/footer_view');
		$this->load->view('front/modal');
	}

	public function comercializacion()
	{
		$data = array('titulo' => 'Comercializacion');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('comercializacion');
		$this->load->view('front/footer_view');
		$this->load->view('front/modal');
	}

	public function login(){
		$data['titulo']='login';
		
		$session_data = $this->session->userdata('logged_in');
		$data['id_perfil'] = $session_data['id_perfil'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view',$data);
		$this->load->view('login');
		$this->load->view('front/footer_view');
		$this->load->view('front/modal');
		
	}

	public function admin(){
		$data['titulo']='login';
		
		$session_data = $this->session->userdata('logged_in');
		$data['id_perfil'] = $session_data['id_perfil'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('admin/front/header', $data);
		$this->load->view('admin/front/aside', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/front/footer');
	}
	
}
