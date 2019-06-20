<?php 
class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        belumLogin();
        $this->load->model('user_model');
        $this->load->model('catatan_model','catatan');
        $this->selisih();
    }
    public function index()
    {
        $data['title'] = "Beranda";
        $data['catatan'] = $this->catatan->cekHistori()->row();
        return view('home/index',$data);
    }
    private function selisih()
    {
        $masuk= $this->catatan->beforeThisMonth(1);
        $keluar= $this->catatan->beforeThisMonth(2);
        $selisih = $masuk->nominal - $keluar->nominal;
        $cek = $this->db->get_where('history',['created_at' => beforeBulan()])->num_rows();
        if(date('Y-m-01'))
        {
            if($cek < 1)
            {
                if($masuk->nominal == null && $keluar->nominal == null){
                    $this->catatan->insertHistory(0,0,0,beforeBulan());
                    $this->catatan->insertHistory(0,0,0,dataBulan());
                    $data = [
                        'keterangan_id' => htmlspecialchars(1),
                        'deskripsi' => htmlspecialchars('Sisa saldo bulan lalu'),
                        'nominal' => htmlspecialchars($selisih),
                        'no_hp' => htmlspecialchars(null),
                        'status' => htmlspecialchars('Ok'),
                        'updated_at' => date("Y-m-d H:i:s")
                    ];
                    $this->db->insert('catatan',$data);
                }
                $this->catatan->insertHistory($masuk->nominal,$keluar->nominal,$selisih,beforeBulan());
                if($selisih >= 0)
                {
                    $data = [
                        'keterangan_id' => htmlspecialchars(1),
                        'deskripsi' => htmlspecialchars('Sisa saldo bulan lalu'),
                        'nominal' => htmlspecialchars($selisih),
                        'no_hp' => htmlspecialchars(null),
                        'status' => htmlspecialchars('Ok'),
                        'updated_at' => date("Y-m-d H:i:s")
                    ];
                    $this->db->insert('catatan',$data);
                    $this->catatan->insertHistory($selisih,0,$selisih,dataBulan());
                }
            }else{
                return false;
            }
        }
    }
}
?>