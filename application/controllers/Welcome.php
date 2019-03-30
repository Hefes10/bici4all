<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
 		// $this->load->view('index.html');
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
}
