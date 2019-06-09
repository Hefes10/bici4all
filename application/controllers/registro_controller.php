<?php 

	class Registro_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('usuario_model');
			$this ->load->model('loginModel');
		}
		
		/**
	    * 
	    */
		function index()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');
			/*$this->form_validation->set_rules('username', 'Usuario', 
											'trim|required|xss_clean|is_unique[usuarios.username]');*/
			$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|is_unique[usuarios.usuario]');
			//$this->form_validation->set_rules('password', 'Contraseña','required|xss_clean');
			$this->form_validation->set_rules('password', 'Contraseña','required');

			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[password]');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('matches',
										'<div class="alert alert-danger">Los contraseña ingresada no coincide</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$pass = $this->input->post('re_password',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'id_perfil'=>'2',
				'usuario'=>$this->input->post('usuario',true),
				'password'=>($pass)
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('registro');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$this->usuario_model->add_user($data);
				$usuario = $this->input->post('usuario',true);
				$result = $this->loginModel->validarUsuario($usuario, $pass);
	
				if($result)
				{	//Si el resultado es correcto lo asigna a la variable session
					$sess_array = array();
					foreach($result as $row)
					{
						$sess_array = array('id_usuario' => $row->id_usuario,
											'nombre' => $row->nombre,
											'apellido' => $row->apellido,
											'email' => $row->email,
											'id_perfil' => $row->id_perfil,
											'usuario' => $row->usuario,
											'password' => $row->password);
											
						$this->session->set_userdata('logged_in', $sess_array);
					}
					redirect('principal');
				}
			}	
		}

		public function registrarse(){
			$data['titulo']='Registro';
			
			$session_data = $this->session->userdata('logged_in');
			$data['id_perfil'] = $session_data['id_perfil'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('registro');
			$this->load->view('front/footer_view');
			$this->load->view('front/modal');

		}
		
	}
/* End of file 
*/