<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Typography extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('Typography');
        $this->load->view('templates/footer');
    }
}
