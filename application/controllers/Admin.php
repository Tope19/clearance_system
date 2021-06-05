<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		//	$this->load->view('login_view');
	}

	

	public function login(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('adminlogin_view');
		} else {
			//get email
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->Admin_model->authenticate($email, $password);

			if ($user_data != null && is_object($user_data)) {

				$session_data = array(
					'id' => $user_data->id,
					'email' => $user_data->email,
					'firstname' => $user_data->firstname,
					'lastname' => $user_data->lastname,
					'userstatus' => $user_data->role,
					'logged_in' => TRUE
				);
               
                    $this->session->set_userdata($session_data);
                    $this->session->set_flashdata(SUCCESS_MESSAGE, 'Login was successful');
                    redirect(base_url() . 'AdminDashboard');

                
			} else {
				$this->session->set_flashdata(ERROR_MESSAGE, 'login is Invalid');
				redirect(base_url() . 'admin/login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata(SUCCESS_MESSAGE, 'Your logged out');
		redirect(base_url());
	}

	
}
