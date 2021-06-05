<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
	$this->load->view('home_view');
		
    }

    

    public function thankyou(){
        $this->load->view('thankyou_view');
    }
}
