<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_controller extends CI_Controller{
            
        function __construct() 
        {
            parent::__construct();
            $this ->load->model('usuario_model');
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
        
        function index()
        {
            if($this->_veri_log()){
            $data = array('titulo' => 'Usuarios');
        
            $session_data = $this->session->userdata('logged_in');
            $data['id_perfil'] = $session_data['id_perfil'];
            $data['nombre'] = $session_data['nombre'];
        
            $dat = array('usuarios' => $this->usuario_model->get_usuarios());
        
            $this->load->view('admin/front/header', $data);
            $this->load->view('admin/front/aside', $data);
            $this->load->view('muestrausuarios_view', $dat);
            $this->load->view('admin/front/footer');
            }else{
            redirect('login', 'refresh'); }
        }
/*
        function obtenerUsuario($id)
        {
            //obtengo el usuario mediante su id    
            $user = $this->Usuario_Model->get_by_id($id);
            //asigno a $data las variables que paso a la vista    
            $data['titulo'] = 'Perfil de ' . $user->name;
            $data['user'] = $user->name;
            //Cargo las vistas    
            $this->load->multiple_views(['head_view', 'navbar_view', 'perfil_view', 'footer_view'], $data);
        }
        
        function nuevo_usuario()
        {
            //Genero las reglas de validación            
            //name del campo, título, restricciones   
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('email', 'Usuario', 'required|trim|valid_email|is_unique[users.username]');
            $this->form_validation->set_rules('reg_password', 'Contraseña', 'required|xss_clean');
            $this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[reg_password]');
            //Mensaje de error si no pasan las reglas   
            $this->form_validation->set_message('required', '<div class="alert alert-danger">El campo %s es obligatorio</div>');
            $this->form_validation->set_message('matches', '<div class="alert alert-danger">La contraseña ingresada no coincide</div>');
            $pass = $this->input->post('re_password', true);
            //Preparo los datos para guardar en la base, en caso de que pase la validación   
            //Los datos corresponden a los nombres de mi campos de la base de datos    
            $data = array('name' => $this->input->post('nombre', true), 'last_name' => $this->input->post('apellido', true), 'username' => $this->input->post('email', true), 'password' => md5($pass));
            //Si no pasa la validación de datos    
            if ($this->form_validation->run() == FALSE) {
                //Muestra la página de registro con el título de error   
                $data = array('titulo' => 'Error de formulario');
                $this->load->multiple_views(['head_view', 'menu_view', 'registro_view', 'footer_view'], $data);
            }    //Pasa la validacion    
            else {
                //Envío array al método insert para registro de datos    
                $usuario = $this->Usuario_Model->add_user($data);
                $data_user = $array = array('user' => $usuario, 'logued_in' => TRUE, 'name' => $data['name']);
                //asigno los datos a la sesion   
                $this->session->set_userdata($data_user);
                //Redirecciono a la página de perfil   
                redirect('perfil/' . $usuario);
            }
        }
*/
         /**
		* Obtiene los datos del usuario a eliminar
		*/
	    function eliminar_usuario(){
	    	$id_usuario = $this->uri->segment(2); 

	    	$this->usuario_model->delete_usuario($id_usuario);
	    	redirect('usuarios_todos', 'refresh');
	    }

    }

/* End of file
*/