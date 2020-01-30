<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pemesanan extends CI_Model
{
    public function k_pemesanan()
    {
        return $this->db->get('k_pemesanan')->result_array();
    }

    public function lap_pemesanan()
    {
        return $this->db->get('lap_pemesanan')->result_array();
    }

    public function list_pesanan($where)
    {
        return $this->db->get_where('detail_menu',$where)->result_array();
    }

    public function detail_pemesanan($data)
    {
        $this->db->insert('detail_pemesanan', $data);
    }

    public function lihat_detail_pemesanan($id)
    {
        return $this->db->get_where('detail_menu',array('idpembayaran'=>$id))->result_array();
    }
}
