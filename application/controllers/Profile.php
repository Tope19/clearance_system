<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Profile extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(! $this->session->userdata('id'))
            return redirect(base_url(). 'user/login');
        $this->load->model('Profile_model');
    }

    public function index(){
        $userid = $this->session->userdata('id');
        $data = $this->Profile_model->getprofile($userid);
//        $profile = $this->Profile_model->getprofile($userid);
//        echo '<pre>';
//        print_r($data); die();
        $this->load->view('admin/profile_view', $data);
    }

    public function update(){
        $this->form_validation->set_rules('firstname','First Name');
        $this->form_validation->set_rules('lastname','Last  Name');

        if($this->form_validation->run()){
            $firstname=$this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $userid = $this->session->userdata('id');
            $this->Profile_model->update_profile($firstname,$lastname,$userid);
            $this->session->set_flashdata(SUCCESS_MESSAGE,'Profile updated successfully.');
            return redirect('Profile');

        } else {
            $this->session->set_flashdata(ERROR_MESSAGE, 'Something went wrong. Please try again with valid format.');
            redirect('Profile');
        }

    }

}
