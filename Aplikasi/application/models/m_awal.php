<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_awal extends CI_Model
{
    public function i_user($data)
    {
        $this->db->insert('user',$data);
    }

    public function c_user($data)
    {
        return $this->db->get_where('user',$data);
    }
}
?>