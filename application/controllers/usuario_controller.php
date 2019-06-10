<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_controller extends CI_Controller{
            
        function __construct() 
        {
            parent::__construct();
            $this ->load->model('usuario_model');
            $this ->load->model('ventas_model');
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
		/*
	    function eliminar_usuario(){
	    	$id_usuario = $this->uri->segment(2); 

	    	$this->usuario_model->delete_usuario($id_usuario);
	    	redirect('usuarios_todos', 'refresh');
        }
        */
        /**
	    * Muestra para modificar un usuario
	    */
		function muestra_modificarUsuario()
		{
			$id = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id);

			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$usuario = $row->usuario;
					$password = $row->password;
					$id_perfil = $row->id_perfil;
					$baja = $row->baja;	
				}

				$dat = array('usuario' =>$datos_usuario,
					'id_usuario'=>$id,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
					'usuario'=>$usuario,
					'password'=>$password,
					'id_perfil'=>$id_perfil
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar usuario');
			$session_data = $this->session->userdata('logged_in');
			$data['id_perfil'] = $session_data['id_perfil'];
			$data['nombre'] = $session_data['nombre'];

            $this->load->view('admin/front/header', $data);
            $this->load->view('admin/front/aside');
			$this->load->view('modificausuario_view', $dat);
            $this->load->view('admin/front/footer');
			}else{
			redirect('login', 'refresh');}
		}

		/**
	    * Verifica datos para modificar un usuario
	    */
		function modificar_usuario()
		{
			//Validación del formulario
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('id_perfil', 'id_Perfil', 'required');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);

			$dat = array(
				'id_usuario'=>$id_usuario,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$this->input->post('usuario',true),
				'password'=>$this->input->post('password',true),
				'id_perfil'=>$this->input->post('id_perfil',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['id_perfil'] = $session_data['id_perfil'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('admin/front/header', $data);
				$this->load->view('admin/front/aside');
				$this->load->view('modificausuario_view', $dat);
				$this->load->view('admin/front/footer');
            }
            else
			{
				$this->_user_modif();		
			}
			
        }
        
        function _user_modif()
	    {
			//Cargo la libreria para subir archivos
	    	$this->load->library('upload');

			// Obtengo el id del libro
	    	$id_usuario = $this->uri->segment(2);

	        // Array de datos para obtener datos de libros sin la imagen 
	    	$dat = array(
				'id_usuario'=>$id_usuario,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$this->input->post('usuario',true),
				'password'=>$this->input->post('password',true),
				'id_perfil'=>$this->input->post('id_perfil',true)
			);
            
            $this->usuario_model->update_usuario($id_usuario, $dat);
	    	redirect('usuarios_todos', 'refresh');
	    	
        }
        
        /**
	    * Muestra formulario para agregar usuario
	    */
		function form_agrega_usuario()  	//Si se modifica, modificar (agrega_usuario) tambien
		{
			if($this->_veri_log()){
				$data['titulo']='Agregar Usuario';
		
				$session_data = $this->session->userdata('logged_in');
				$data['id_perfil'] = $session_data['id_perfil'];
				$data['nombre'] = $session_data['nombre'];
		
				$this->load->view('admin/front/header', $data);
				$this->load->view('admin/front/aside', $data);
				$this->load->view('agregausuario_view');
				$this->load->view('admin/front/footer');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
	    * Verifica datos ingresados en el formulario para agregar usuario
	    */
		function agrega_usuario()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[usuarios.email]');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required|is_unique[usuarios.usuario]');
			$this->form_validation->set_rules('password', 'Password', 'required');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$this->form_validation->set_message('numeric',
							'<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');


			if (!$this->form_validation->run())
			{
				$data = array('titulo' => 'Error de formulario');
		
				$session_data = $this->session->userdata('logged_in');
				$data['id_perfil'] = $session_data['id_perfil'];
				$data['nombre'] = $session_data['nombre'];


				$this->load->view('admin/front/header', $data);
				$this->load->view('admin/front/aside', $data);
				$this->load->view('agregausuario_view');
				$this->load->view('admin/front/footer');
			}
			else
			{
                $this->load->library('upload');

                $data = array(
                    'nombre'=>$this->input->post('nombre',true),
                    'apellido'=>$this->input->post('apellido',true),
                    'email'=>$this->input->post('email',true),
                    'usuario'=>$this->input->post('usuario',true),
                    'password'=>$this->input->post('password',true),
                );
                
                $usuario = $this->usuario_model->add_user($data);
                
                redirect('usuarios_todos', 'refresh');			
			}
		}
		
		/**
		* Obtiene los datos del usuario a eliminar
		*/
	    function eliminar_usuario(){
	    	$id_usuario = $this->uri->segment(2); 
	    	$data = array(
	    		'baja'=>'SI'
	    	);

	    	$this->usuario_model->estado_usuario($id_usuario, $data);
	    	redirect('usuarios_todos', 'refresh');
	    }

	    /**
		* Obtiene los datos del usuario a activar
		*/
	    function activar_usuario(){
	    	$id_usuario = $this->uri->segment(2);
	    	$data = array(
	    		'baja'=>'NO'
	    	);

	    	$this->usuario_model->estado_usuario($id_usuario, $data);
	    	redirect('usuarios_todos', 'refresh');
	    }

	    /**
		* Usuarios eliminados logicamente
		*/
	    function muestra_usuarios_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Usuarios eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['id_perfil'] = $session_data['id_perfil'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array(
		        'usuarios' => $this->usuario_model->not_active_usuarios()
			);

			$this->load->view('admin/front/header', $data);
			$this->load->view('admin/front/aside');
			$this->load->view('muestra_usuarios_eliminados_view', $dat);
			$this->load->view('admin/front/footer');
			}else{
			redirect('login', 'refresh');}
		}
		
		function muestra_perfil()
	    {    	
			$data = array('titulo' => 'Mi perfil');
			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);
			
			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$usuario = $row->usuario;
					$password = $row->password;
					$id_perfil = $row->id_perfil;
				}

				$dat = array('usuario' =>$datos_usuario,
					'id_usuario'=>$id_usuario,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
					'usuario'=>$usuario,
					'password'=>$password,
					'id_perfil'=>$id_perfil
				);
			} 
			else 
			{
				return FALSE;
			}

			if($this->_veri_log()){
			
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('perfil_view', $dat);
				$this->load->view('front/footer_view');
				}else{
				redirect('login', 'refresh'); 
			}
		}
		
		function muestra_modifica_perfil()
	    {    	
			$data = array('titulo' => 'Mi perfil');
			
			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);
			
			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$usuario = $row->usuario;
					$password = $row->password;
					$id_perfil = $row->id_perfil;
				}

				$dat = array('usuario' =>$datos_usuario,
					'id_usuario'=>$id_usuario,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
					'usuario'=>$usuario,
					'password'=>$password,
					'id_perfil'=>$id_perfil
				);
			} 
			else 
			{
				return FALSE;
			}

			if($this->_veri_log()){
			
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('modifico_perfil_view', $dat);
				$this->load->view('front/footer_view');
				}else{
				redirect('login', 'refresh'); 
			}
		}

		function modificar_perfil()
		{
			//Validación del formulario
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[password]');
			
			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');
			$this->form_validation->set_message('matches',
										'<div class="alert alert-danger">Los contraseña ingresada no coincide</div>');

			$id_usuario = $this->uri->segment(2);
			$session_data = $this->session->userdata('logged_in');
			$usuario = $session_data['usuario'];

			$dat = array(
				'id_usuario'=>$id_usuario,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$usuario,
				'password'=>$this->input->post('password',true),
				'id_perfil'=>'2',
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['id_perfil'] = $session_data['id_perfil'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('modifico_perfil_view', $dat);
				$this->load->view('front/footer_view');
            }
            else
			{
				$this->usuario_model->update_usuario($id_usuario, $dat);
	    		redirect("muestra_perfil/$id_usuario", 'refresh');
			}
			
		}
		
		
    }

/* End of file
*/