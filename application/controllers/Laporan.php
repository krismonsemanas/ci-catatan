<?php
date_default_timezone_set('Asia/Jakarta');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('catatan_model','catatan');
        belumLogin();
    }
    public function index()
    {
        $data = [
            'title' => 'Laporan'
        ];
        return view('catatan/laporan',$data);
    }
    public function pdf()
    {
        // laporanPdf();
        $data = [
            'laporan' => $this->catatan->showData(),
        ];
        $fileName = "Laporan-".time().".pdf";
        // $this->load->view('laporan/pdf',$data);
        laporanPdf($this->load->view('laporan/pdf',$data,true),$fileName);
    }
    public function tahunan()
    {
        // laporanPdf();
        $data = [
            'history' => $this->catatan->getHistory()->result(),
        ];
        $fileName = "Laporan-".time().".pdf";
        // $this->load->view('laporan/pdf',$data);
        laporanPdf($this->load->view('laporan/tahunan',$data,true),$fileName);
    }
}