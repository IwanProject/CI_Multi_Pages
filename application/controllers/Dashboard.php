<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}