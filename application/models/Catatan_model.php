<?php
date_default_timezone_set('Asia/Jakarta');
class Catatan_model extends CI_Model
{
    // input data
    public function insertCatatan($post,$ketId)
    {
        $data = [
            'keterangan_id' => $ketId,
            'deskripsi' => htmlspecialchars($post['desc']),
            'nominal' => htmlspecialchars($post['nominal']),
            'no_hp' => htmlspecialchars($post['hp']),
            'status' => htmlspecialchars($post['status']),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $this->db->insert('catatan',$data);
        return $this->db->affected_rows();
    }
    // tampil data
    public function showData($ketId = null,$id = null)
    {
        $this->db->like('created_at',date('Y-m'));
        if ($id != null) 
        {
            return $this->db->get_where('catatan',[
                'catatan_id' => $id,
            ])->row();
        }else if($ketId != null){
            return $this->db->get_where('catatan',[
                'keterangan_id' => $ketId
            ])->result();
        }
        $this->db->join('keterangan','keterangan.id = catatan.keterangan_id');
        // $this->db->select('catatan_id','keterangan_id','deskripsi','nominal','created_at');
        return $this->db->get('catatan')->result();
    }
    // update date
    public function updateData($post,$id)
    {
        $data = [
            'keterangan_id' => htmlspecialchars($post['ket']),
            'deskripsi' => htmlspecialchars($post['desc']),
            'nominal' => htmlspecialchars($post['nominal']),
            'no_hp' => htmlspecialchars($post['hp']),
            'status' => htmlspecialchars($post['status']),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $this->db->update('catatan',$data,[
            'catatan_id' => $id
        ]);
    }
    // hapus data
    public function deleteData($id)
    {
        $this->db->delete('catatan',[
            'catatan_id' => $id
        ]);
    }
    // show data before this month
    public function beforeThisMonth($ketId)
    {
        $this->db->select_sum('nominal');
        $this->db->like('created_at',beforeBulan());
        return $this->db->get_where('catatan',[
            'keterangan_id' => $ketId,
        ])->row();
    }
    // tampil keterangan
    public function keterangan()
    {
        return $this->db->get('keterangan')->result();
    }
    // insert to hostory
    public function insertHistory($masuk,$keluar,$selisih,$bulan)
    {
        $this->db->insert('history', [
            'pemasukan' => $masuk,
            'pengeluaran' => $keluar,
            'selisih' => $selisih,
            'created_at' => $bulan,
        ]);
    }
    // cek history in this month
    public function cekHistori()
    {
       return $this->db->get_where('history',['created_at' => date('Y-m')]);
    }
    public function getHistory(){
        $this->db->like('created_at',date('Y'));
        return $this->db->get('history');
    }
}
?>