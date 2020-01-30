<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->model('m_ktgr');
    }

    public function index()
    {
        $data['menu'] = $this->m_menu->l_menu();
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_menu/l_menu',$data);
        $this->load->view('layout/admin/footer');
    }

    public function d_menu($id)
    {
        $this->m_menu->h_menu($id);
        redirect('admin/admin_menu');
    }

    public function ht_menu()
    {
        $data['ktgr']=$this->m_ktgr->lt_ktgr();
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_menu/t_menu', $data);
        $this->load->view('layout/admin/footer');
    }

    public function pt_menu()
    {
        $config['upload_path']         = './assets/img';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png'; // jenis file
        $config['max_size']             = 3000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            echo "Gagal Terupload";
        } else {
            $ktgr = $this->input->post('ktgr');
            $nmenu = $this->input->post('nmenu');
            $harga = $this->input->post('harga');
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $data = array(
                'nm_menu' => $nmenu,
                'gambar' => $gambar,
                'harga' => $harga,
                'idkategori' => $ktgr
            );
            $this->m_menu->i_menu($data);
            redirect('admin/admin_menu');
        }
    }

    public function hu_menu($id)
    {
        $ktgr = $this->m_ktgr->lt_ktgr();
        $datm = $this->m_menu->pu_menu($id);
        $data = array(
            'ktgr'=>$ktgr,
            'menu'=>$datm
        );
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_menu/u_menu', $data);
        $this->load->view('layout/admin/footer');
    }

    public function pu_menu($id)
    {
        $config['upload_path']         = './assets/img';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
        $config['max_size']             = 3000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            echo "Gagal Diperbaharui";
            //echo $this->upload->display_errors();

        } else {
            $ktgr = $this->input->post('ktgr');
            $nmenu = $this->input->post('nmenu');
            $harga = $this->input->post('harga');
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $data = array(
                'nm_menu' => $nmenu,
                'gambar' => $gambar,
                'harga' => $harga,
                'idkategori' => $ktgr
            );
            $where = array('idmenu'=>$id);
            $this->m_menu->U_menu($where,$data);
            redirect('admin/admin_menu');
        }
    }
}
?>