<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('commonmodel');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		
		$this->data['users'] = $this->commonmodel->getAllUsers();
	}

	public function index()
	{
		//	$this->load->view('login_view');
	}

	

	public function login(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('login_view');
		} else {
			//get email
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->commonmodel->authenticate($email, $password);

			if ($user_data != null && is_object($user_data)) {

				$session_data = array(
					'id' => $user_data->id,
					'email' => $user_data->email,
					'surname' => $user_data->surname,
					'firstname' => $user_data->firstname,
					'othername' => $user_data->othername,
					'userstatus' => $user_data->role,
					'logged_in' => TRUE
				);
               
                    $this->session->set_userdata($session_data);
                    $this->session->set_flashdata(SUCCESS_MESSAGE, 'Login was successful');
                    redirect(base_url() . 'dashboard');

                
			} else {
				$this->session->set_flashdata(ERROR_MESSAGE, 'login is Invalid');
				redirect(base_url() . 'user/login');
			}
		}
	}

	public function register(){
		$this->form_validation->set_rules('surname', 'Surname', 'trim|required|min_length[3]|max_length[14]');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[14]');
		$this->form_validation->set_rules('othername', 'Other Names', 'trim|required|min_length[3]|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|max_length[20]|required');
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('matric', 'Matric No', 'trim|required');
		$this->form_validation->set_rules('level', 'Select your Level', 'trim|required');
		$this->form_validation->set_rules('dept', 'Select your Department', 'trim|required');
		$this->form_validation->set_rules('entryyear', 'Entry Year', 'trim|required|numeric|exact_length[4]');
		$this->form_validation->set_rules('course', 'Select your Course Duration', 'trim|required');

		if ($this->form_validation->run() === false) {
			$this->load->view('register_view',$this->data);
		} else{
			$surname = $this->input->post('surname');
			$firstname = $this->input->post('firstname');
			$othername = $this->input->post('othername');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$gender = $this->input->post('gender');
			$matric = $this->input->post('matric');
			$level = $this->input->post('level');
			$dept = $this->input->post('dept');
			$entryyear = $this->input->post('entryyear');
			$course = $this->input->post('course');

			$user['surname'] = $surname;
			$user['firstname'] = $firstname;
			$user['othername'] = $othername;
			$user['email'] = $email;
			$user['password'] = $password;
			$user['gender'] = $gender;
			$user['matric'] = $matric;
			$user['level'] = $level;
			$user['dept'] = $dept;
			$user['entryyear'] = $entryyear;
			$user['course'] = $course;

			$this->commonmodel->insert($user);

			$this->session->set_flashdata(SUCCESS_MESSAGE, 'Your registration was successful! Please login');
			redirect(base_url() . 'user/login');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata(SUCCESS_MESSAGE, 'Your logged out');
		redirect(base_url());
	}


}
