<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_menu extends CI_Model
{
    public function l_menu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function i_menu($data)
    {
        $this->db->insert('menu',$data);
    }

    public function h_menu($id)
    {
        $this->db->delete('menu',array('idmenu'=>$id));
    }

    public function pu_menu($id)
    {
        return $this->db->get_where('menu',array('idmenu'=>$id))->result_array();
    }

    public function u_menu($id,$data)
    {
        $this->db->where($id);
        $this->db->update('menu',$data);
    }
}
