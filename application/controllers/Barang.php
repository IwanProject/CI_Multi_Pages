<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('barang');
        $this->load->view('templates/footer');
    }
}
