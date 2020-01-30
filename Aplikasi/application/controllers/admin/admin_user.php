<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }

    public function index()
    {
        $data['user']=$this->user->v_user();
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_user/admin_k_user',$data);
        $this->load->view('layout/admin/footer');
    }

    public function d_user($id)
    {
        $this->user->h_user($id);
        redirect('admin/admin_user');
    }

    public function ft_user()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_user/admin_t_user');
        $this->load->view('layout/admin/footer');
    }

    public function pt_user()
    {
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $almt = $this->input->post('alamat');
        $uname = $this->input->post('uname');
        $pwd = $this->input->post('pwd');
        $lvl = $this->input->post('lvl');
        $data = array(
            'username' => $uname,
            'password' => $pwd,
            'nama' => $nama,
            'email' => $email,
            'alamat' => $almt,
            'level' => $lvl
        );
        $this->user->i_user($data);
        redirect('admin/admin_user');
    }

    public function uf_user($id)
    {
        $data['user']=$this->user->pu_user($id);
        $this->load->view('layout/admin/header');
        $this->load->view('admin/k_user/admin_u_user',$data);
        $this->load->view('layout/admin/footer');
    }

    public function pu_user($id)
    {
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $almt = $this->input->post('alamat');
        $uname = $this->input->post('uname');
        $pwd = $this->input->post('pwd');
        $lvl = $this->input->post('lvl');
        $data = array(
            'username' => $uname,
            'password' => $pwd,
            'nama' => $nama,
            'email' => $email,
            'alamat' => $almt,
            'level' => $lvl
        );
        $where = array('id_user'=>$id);
        $this->user->u_user($where,$data);
        redirect('admin/admin_user');
    }

}