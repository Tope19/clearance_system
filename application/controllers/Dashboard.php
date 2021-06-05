<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('id'))
            return redirect(base_url(). 'user/login');
            $this->load->model('User_model', 'users');
            $this->load->model('commonmodel', 'UserModel');
            $this->UserModel->table = "users";
            $this->load->model('Profile_model');
            $this->load->model('Payment_model');
    }

    public function index()
    {
        $userid = $this->session->userdata('id');
        $data = $this->Profile_model->getprofile($userid);
       
        $this->load->view('user/dashboard_view',$data);
    }


    public function payment(){
        $id = $this->input->post('id');
        $user = $this->UserModel->get_by('id', $this->session->userdata['id']);
        $amount = $this->UserModel->get_by('id', $this->session->userdata['id']);
        $fixed = 50000;
        $amount_paid = $amount->amount_paid - $fixed; 
        $payment = array(
            'user_id' => $user->id,
            'amount_paid' =>  - $amount_paid,

        );
        // print_r($payment); die();
       
        $response = $this->db->query("Select * from payments where user_id='".$user->id."'")->result_array();
        if (count($response) > 0) {
            $this->session->set_flashdata(ERROR_MESSAGE, "You have already Payed your debt! ". ' ' . 'Click <a href="Dashboard/clearance">here</a> to get your clearance certificate');
            redirect(base_url() . 'dashboard');
        } else {
            $this->Payment_model->insert($payment);
            $this->session->set_flashdata(SUCCESS_MESSAGE, "You have Payed your debt Successfully!". '' . 'Click <a href="Dashboard/clearance">here</a> to get your clearance certificate');
            redirect(base_url() . 'dashboard');
        }
    }

    public function clearance(){
        //load mPDF library


        require_once '\wamp64\www\bells\vendor\autoload.php';

        $mpdf = new \Mpdf\Mpdf();
        $userid = $this->session->userdata('id');
        $data = $this->Profile_model->getprofile($userid);
        $amount = $this->Payment_model->getPayment($userid);
        if ($amount->amount_paid == 50000) {
            $this->load->view('user/show',$data);
        } else {
            echo 'You have not paid';
        }
        
    }

    public function save_pdf()
    {
        require_once '\wamp64\www\bells\vendor\autoload.php';

        $mpdf = new \Mpdf\Mpdf();
        $pdfFilePath ="clearance-cert".".pdf"; 
//        //actually, you can pass mPDF parameter on this load() function
//        $pdf = $this->m_pdf->load();

        //generate the PDF!
        $stylesheet = '<style>'.file_get_contents('assets/main.css').'</style>';
        // apply external css
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHTML($html,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $mpdf->Output($pdfFilePath, "D");
        exit;
    }

    public function payments(){
        $userid = $this->session->userdata('id');
        $data = $this->Payment_model->getPayment($userid);
        $this->load->view('user/payment_view', $data);
    }

}
