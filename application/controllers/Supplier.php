<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('supplier');
        $this->load->view('templates/footer');
    }
}
