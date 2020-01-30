<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pembayaran extends CI_Model
{
    public function g_pembayaran($where)
    {
        return $this->db->get_where('k_pemesanan',$where)->result_array();
    }

    public function g_idpem($where)
    {
        return $this->db->get_where('pembayaran',$where)->row_array();
    }

    public function u_pembayaran($id,$data)
    {
        $this->db->where($id);
        $this->db->update('pembayaran',$data);
    }

    public function i_pembayaran($data)
    {
        $this->db->insert('pembayaran',$data);
    }
}
