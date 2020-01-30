<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemilik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemesanan');
        $this->load->library('pdf');
    }

    public function index()
    {
        $this->load->view('layout/pemilik/header');
        $this->load->view('pemilik/home');
        $this->load->view('layout/pemilik/footer');
    }

    public function lap_pemesan()
    {
        $data['pemesanan']=$this->m_pemesanan->lap_pemesanan();
        $this->load->view('layout/pemilik/header');
        $this->load->view('pemilik/lap_pemesanan',$data);
        $this->load->view('layout/pemilik/footer');
    }

    public function cetak_laporan()
    {
        $pdf = new FPDF('p','mm','a4');
        $pdf->AddPage();
        $pdf->SetFont('arial','B',16);
        $pdf->Cell(190,7,'Laporan Pemesan NorthWood Cafe',0,1,'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('arial', 'B', 12);
        $pdf->Cell(64, 6, 'Tanggal Pemesanan', 1, 0,'C');
        $pdf->Cell(64, 6, 'Jumlah Pemesan', 1, 0, 'C');
        $pdf->Cell(64, 6, 'Pendapatan', 1, 1, 'C');
        $lap = $this->m_pemesanan->lap_pemesanan();
        foreach ($lap as $l){
            $pdf->cell(64,6,$l['tanggal'],1, 0, 'C');
            $pdf->cell(64, 6,$l['Jumlah Pemesan'], 1, 0, 'C');
            $pdf->cell(64, 6, 'Rp. '. number_format($l['pendapatan'], 2, ",", "."), 1, 1, 'C');
        }
        $pdf->Output();
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('welcome');
    }
}
