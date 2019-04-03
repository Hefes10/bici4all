<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}

	public function index()
 	{
 		$data = array('titulo' => 'Bici4All');

 		$this->load->view('front/head_view',$data);
 		$this->load->view('front/navbar_view');
 		$this->load->view('principal');
 		$this->load->view('front/footer_view');

 	}

	public function terminosycondiciones()
 	{
 		// $this->load->view('index.html');
 		$data = array('titulo' => 'Terminos y Condiciones');

 		$this->load->view('front/head_view',$data);
 		$this->load->view('front/navbar_view');
 		$this->load->view('terminosycondiciones');
 		$this->load->view('front/footer_view');

 	}

	public function quienessomos()
  {
	 // $this->load->view('index.html');
	 $data = array('titulo' => '¿Quiénes somos?');

	 $this->load->view('front/head_view',$data);
	 $this->load->view('front/navbar_view');
	 $this->load->view('quienessomos');
	 $this->load->view('front/footer_view');

 }
}
