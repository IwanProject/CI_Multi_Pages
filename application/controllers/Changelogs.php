<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Changelogs extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('changelogs');
        $this->load->view('templates/footer');
    }
}
