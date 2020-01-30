<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('admin/home');
        $this->load->view('layout/admin/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('welcome');
    }
}
