<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_pemesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemesanan');
    }

    public function index()
    {
        $data['pemesanan']=$this->m_pemesanan->k_pemesanan();
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_pemesanan/l_pemesanan',$data);
        $this->load->view('layout/admin/footer');
    }

    public function detail_pemesanan($id)
    {
        $data['list_pesanan']=$this->m_pemesanan->lihat_detail_pemesanan($id);
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_pemesanan/det_pemesanan', $data);
        $this->load->view('layout/admin/footer');
    }

}
