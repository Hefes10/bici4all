<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class reporteVentasController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("ventas_model");
    }

    private function _veri_log()
    {
        if ($this->session->userdata('logged_in')) 
        {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function index(){
        if($this->_veri_log()){
			$data = array('titulo' => 'Reporte Ventas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['id_perfil'] = $session_data['id_perfil'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('ventas' => $this->ventas_model->get_Ventas());

            $this->load->view('admin/front/header', $data);
            $this->load->view('admin/front/aside', $data);
			$this->load->view('reporteVentas_view', $dat);
            $this->load->view('admin/front/footer');
		}else{
        redirect('login', 'refresh'); }
    }
    
    public function verDetalleVenta($id){
        if($this->_veri_log()){
            $data = array('titulo' => 'Detalle de Ventas');
        
            $session_data = $this->session->userdata('logged_in');
            $data['id_perfil'] = $session_data['id_perfil'];
            $data['nombre'] = $session_data['nombre'];

            $dat = array('detalles' => $this->ventas_model->get_detalle());
            $dat['id'] = $id;

            $this->load->view('admin/front/header', $data);
            $this->load->view('admin/front/aside', $data);
            $this->load->view('detalleVenta_view', $dat);
            $this->load->view('admin/front/footer');
        }else{
        redirect('login', 'refresh'); }
    }

    public function misCompras(){
        if($this->_veri_log()){
            $data = array('titulo' => 'Mis Compras');
        
            $session_data = $this->session->userdata('logged_in');
            $data['id_perfil'] = $session_data['id_perfil'];
            $data['nombre'] = $session_data['nombre'];

            $dat = array('compras' => $this->ventas_model->get_Ventas());
            $dat['id'] = $session_data['id_perfil'];

            $this->load->view('front/head_view', $data);
            $this->load->view('front/navbar_view');
            $this->load->view('misCompras', $dat);
            $this->load->view('front/footer_view');
        }else{
        redirect('login', 'refresh'); }
    }
    
    public function misDetallesCompras($id){
        if($this->_veri_log()){
            $data = array('titulo' => 'Detalle de Ventas');
        
            $session_data = $this->session->userdata('logged_in');
            $data['id_perfil'] = $session_data['id_perfil'];
            $data['nombre'] = $session_data['nombre'];

            $dat = array('detalles' => $this->ventas_model->get_detalle());
            $dat['id'] = $id;

            $this->load->view('front/head_view', $data);
            $this->load->view('front/navbar_view');
            $this->load->view('misDetallesCompras', $dat);
            $this->load->view('front/footer_view');
        }else{
        redirect('login', 'refresh'); }
    }
    
}