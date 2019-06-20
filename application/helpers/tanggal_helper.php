<?php
date_default_timezone_set('Asia/Jakarta');
function dataBulan()
{
    return $date = date('Y-m');
}
function beforeBulan()
{
    $date = date('Y-m',strtotime('-1 month'));
    return $date;
}
function showHistories($id,$month)
{
    if($month < 10){
        $date = date('Y')."-0".$month;
    }else{
        $date = date('Y')."-".$month;
    }
    $CI = get_instance();
    if ($id == 1)
    {
        $CI->db->select_sum('pemasukan');    
    }elseif($id == 2){
        $CI->db->select_sum('pengeluaran'); 
    }elseif($id == 3)
    {
        $CI->db->select_sum('selisih'); 
    }
    $CI->db->like('created_at',$date);
    $data = $CI->db->get('history')->row();
    if($id == 1)
    {
        if($data->pemasukan){
            return $data->pemasukan;
        }else {
            return 0;
        }
    }elseif($id == 2)
    {
        if($data->pengeluaran){
            return $data->pengeluaran;
        }else {
            return 0;
        }
    }elseif($id == 3)
    {
        if($data->selisih){
            return $data->selisih;
        }else {
            return 0;
        }
    }
}
function updateHistory($id)
{
    $CI = get_instance();
    $CI->db->select_sum('nominal');
    $CI->db->like('created_at',dataBulan());
    $masuk = $CI->db->get_where('catatan',['keterangan_id' => 1])->row();
    $CI->db->select_sum('nominal');
    $CI->db->like('created_at',dataBulan());
    $keluar = $CI->db->get_where('catatan',['keterangan_id' => 2])->row();
    $selisih = $masuk->nominal - $keluar->nominal;
    $data = [
        'pemasukan' => $masuk->nominal,
        'pengeluaran' => $keluar->nominal,
        'selisih' => $selisih
    ];
    $CI->db->update('history',$data ,['id_history' => $id]);
}
?>