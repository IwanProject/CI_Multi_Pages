<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helperclasses extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('helper');
        $this->load->view('templates/footer');
    }
}
