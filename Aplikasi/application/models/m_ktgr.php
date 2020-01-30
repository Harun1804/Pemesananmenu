<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_ktgr extends CI_Model
{
    public function lt_ktgr()
    {
        return $this->db->get('kategori')->result_array();
    }
}
