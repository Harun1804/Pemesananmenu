<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemesan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->model('m_pembayaran');
        $this->load->model('m_pemesanan');
    }

    public function index()
    {
        $id['nama'] = $this->session->userdata('nama');
        $this->load->view('layout/pemesan/header',$id);
        $this->load->view('pemesan/home');
        $this->load->view('layout/pemesan/footer');
    }

    public function daftar_menu()
    {
        $id['nama'] = $this->session->userdata('nama');
        $data['menu']=$this->m_menu->l_menu();
        $this->load->view('layout/pemesan/header',$id);
        $this->load->view('pemesan/daftar_menu',$data);
        $this->load->view('layout/pemesan/footer');
    }

    public function masuk_keranjang($idm)
    {
        $idu = $this->session->userdata('id_user');
        date_default_timezone_set("Asia/Jakarta");
        $wpemesanan = date("Y-m-d");
        $jumlah = (int)$this->input->post('jml');
        $harga = (int)$this->input->post('harga');
        $total = $jumlah * $harga;
        $where = array('status'=>0,'id_user'=>$idu);
        $cek = $this->m_pembayaran->g_idpem($where);

        if ($cek['status'] == null) {
            $data = array(
                    'tanggal' => $wpemesanan,
                    'due_date' => $wpemesanan,
                    'status' => 0,
                    'id_user' => $idu
                );
                
            $this->m_pembayaran->i_pembayaran($data);
            $cek = $this->m_pembayaran->g_idpem($where);
            $data2 = array(
                'idpembayaran' => $cek['idpembayaran'],
                'idmenu' => $idm,
                'jumlah_menu' => $jumlah,
                'total' => $total
            );
            $this->m_pemesanan->detail_pemesanan($data2);
            echo "<script>alert('Pemesanan dilakukan');history.go(-1);</script>";
        } else {
            $data2 = array(
                'idpembayaran' => $cek['idpembayaran'],
                'idmenu' => $idm,
                'jumlah_menu' => $jumlah,
                'total' => $total
            );
            $this->m_pemesanan->detail_pemesanan($data2);
            echo "<script>alert('Berhasil Ditambahkan ke keranjang');history.go(-1);</script>";
       }
        //redirect('pemesan/pemesan/daftar_menu');
    }

    public function list_pesanan()
    {
        $idu = $this->session->userdata('id_user');
        $id['nama'] = $this->session->userdata('nama');
        $where = array('status' => 0, 'id_user' => $idu);
        $data['pesanan'] = $this->m_pemesanan->list_pesanan($where);
        $this->load->view('layout/pemesan/header',$id);
        $this->load->view('pemesan/list_pemesanan',$data);
        $this->load->view('layout/pemesan/footer');
    }

    public function checkout($id)
    {
        $where = array('idpembayaran'=>$id);
        $data2 = array(
            'status'=>1
        );
        $this->m_pembayaran->u_pembayaran($where,$data2);
        echo "<script>alert('CekOut Berhasil');history.go(-1);</script>";
        //redirect('pemesan/pemesan');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('welcome');
    }
}
