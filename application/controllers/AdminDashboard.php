<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Commonmodel');
        $this->load->model('Admin_model', 'admins');
        $this->load->model('User_model', 'users');
        $this->load->model('commonmodel', 'UserModel');
        $this->load->model('Payment_model');
        $this->UserModel->table = "users";
        if(!$this->session->userdata("id"))
            return redirect(base_url(). 'admin/login');

    }

    public function index()
    {
        $data = new stdClass();
        $data->list = $this->users->getallusers();
        $this->load->view('admin/dashboard_view',$data);
    }

    public function UserDetails($id){
        $data = $this->users->get_user($id);
        $this->load->view('admin/userdetails_view',$data);
    }
    
    public function update_student(){
        $user_id = $this->input->post('uid');

        $user = array(
            'amount_paid' => $this->input->post('amount_paid'),
        );
        $where = array('id' => $user_id);
        $response = $this->users->update('users', $user, $where);
        if ($response) {
            $this->session->set_flashdata(SUCCESS_MESSAGE, 'You have Updated Successfully!');
        redirect(base_url() . 'admindashboard');
        }

    
    }

    public function payments(){
        $data = new stdClass();
        // $data->list = $this->users->getallusers();
        $data->list =  $this->Payment_model->get_all_payments();
        $this->load->view('admin/payment_view',$data);
    }


}
