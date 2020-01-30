<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_awal');
		$this->load->model('m_menu');
	}

	public function index()
	{
		$this->load->view('layout/dashboard/header');
		$this->load->view('awal/home');
		$this->load->view('layout/dashboard/footer');
	}

	public function dafmen()
	{
		$data['menu']=$this->m_menu->l_menu();
		$this->load->view('layout/dashboard/header');
		$this->load->view('awal/daftar_menu',$data);
		$this->load->view('layout/dashboard/footer');
	}

	public function kontak()
	{
		$this->load->view('layout/dashboard/header');
		$this->load->view('awal/kontak');
		$this->load->view('layout/dashboard/footer');
	}

	public function regis()
	{
		$this->load->view('layout/dashboard/header');
		$this->load->view('awal/regis');
		$this->load->view('layout/dashboard/footer');
	}

	public function p_regis()
	{
		$nama = $this->input->post('name');
		$email = $this->input->post('email');
		$almt = $this->input->post('alamat');
		$uname = $this->input->post('uname');
		$pwd = $this->input->post('pwd');
		$data = array(
			'username'=>$uname,
			'password'=>$pwd,
			'nama'=>$nama,
			'email'=>$email,
			'alamat'=>$almt
		);
		$this->m_awal->i_user($data);
		redirect('welcome/login');
	}

	public function login()
	{
		$this->load->view('layout/dashboard/header');
		$this->load->view('awal/login');
		$this->load->view('layout/dashboard/footer');
	}

	public function cek_login()
	{
		$data = array(
			'username'=>$this->input->post('uname',TRUE),
			'password'=>$this->input->post('pwd',TRUE)
		);
		$result = $this->m_awal->c_user($data);
		if($result->num_rows()==1){
			foreach ($result->result() as $hasil) {
				$sess_data['id_user'] = $hasil->id_user;
				$sess_data['username'] = $hasil->username;
				$sess_data['password'] = $hasil->password;
				$sess_data['nama'] = $hasil->nama;
				$sess_data['level'] = $hasil->level;
				$this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('level') == '0'){
				redirect('admin/admin');
			}elseif($this->session->userdata('level') == '1'){
				redirect('pemilik/pemilik');
			}elseif($this->session->userdata('level') == '2'){
				redirect('kasir/kasir');
			}else{
				redirect('pemesan/pemesan');
			}
		}else{
			echo "<script>alert('Data Tidak Ditemukan');history.go(-1)</script>";
		}
	}
}
