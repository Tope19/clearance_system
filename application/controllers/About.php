<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('about_view');

    }

}
