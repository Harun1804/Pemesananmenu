<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kasir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('layout/kasir/header');
        $this->load->view('kasir/home');
        $this->load->view('layout/Kasir/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('welcome');
    }
}
