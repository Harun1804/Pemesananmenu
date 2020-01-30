<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Model
{
    public function v_user()
    {
        return $this->db->get('user')->result_array();
    }

    public function i_user($data)
    {
        $this->db->insert('user',$data);
    }

    public function h_user($id)
    {
        $this->db->delete('user',array('id_user'=>$id));
    }

    public function pu_user($id)
    {
        return $this->db->get_where('user',array('id_user'=>$id))->result_array();
    }

    public function u_user($id,$data)
    {
        $this->db->where($id);
        $this->db->update('user',$data);
    }
}
?>