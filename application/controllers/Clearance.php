<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Clearance extends CI_Controller
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


        require_once '\wamp64\www\bells\vendor\autoload.php';

        $mpdf = new \Mpdf\Mpdf();
        $userid = $this->session->userdata('id');
        $data = $this->Profile_model->getprofile($userid);
        $amount = $this->UserModel->get_by('id', $this->session->userdata['id']);
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

        $userid = $this->session->userdata('id');
        $data = $this->Profile_model->getprofile($userid); 
        $html=$this->load->view('user/show',$data, true);
        $pdfFilePath ="clearance-cert-".time().".pdf"; 
        //actually, you can pass mPDF parameter on this load() function

        //generate the PDF!
        $stylesheet = '<style>'.file_get_contents('assets/main.css').'</style>';
        // apply external css
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHTML($html,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $mpdf->Output($pdfFilePath, "D");
        exit;
    }

}
