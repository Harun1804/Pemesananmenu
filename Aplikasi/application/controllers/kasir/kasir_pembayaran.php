<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kasir_pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembayaran');
    }

    public function index()
    {
        $where = array('status'=>0);
        $data['pembayaran']=$this->m_pembayaran->g_pembayaran($where);
        $this->load->view('layout/kasir/header');
        $this->load->view('kasir/pembayaran',$data);
        $this->load->view('layout/Kasir/footer');
    }

    public function u_pembayaran($id)
    {
        $where = array('idpembayaran'=>$id);
        $data = array('status'=>1);
        $this->m_pembayaran->u_pembayaran($where,$data);
        redirect('kasir/kasir_pembayaran');
    }
}
