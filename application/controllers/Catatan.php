<?php
class Catatan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('catatan_model');
    }
    public function masuk()
    {
        $data['title'] = "Pemasukan";
        $ketId = 1;
        $data['catatan'] = $this->catatan_model->showData($ketId);
        return view('catatan/index',$data);
    }
    public function histori()
    {
        $data['title'] = "Histori";
        $data['history'] = $this->catatan_model->getHistory()->result();
        return view('catatan/histori',$data);
    }
    public function keluar()
    {
        $data['title'] = "Pengeluaran";
        $ketId = 2;
        $data['catatan'] = $this->catatan_model->showData($ketId);
        return view('catatan/index',$data);
    }
    public function proses()
    {
        $post = $this->input->post(null,true);
       if(isset($post['Pemasukan']))
       {
            $action = "masuk";
            $ketId = 1;
       }elseif(isset($post['Pengeluaran']))
       {
            $action = "keluar";
            $ketId = 2;
       }
       $this->catatan_model->insertCatatan($post,$ketId);
       if($this->db->affected_rows() > 0)
       {
            $this->session->set_flashdata('success','Data telah ditambahkan!');
            if($this->catatan_model->cekHistori() > 0)
            {
                $data = $this->catatan_model->cekHistori()->row();
                updateHistory($data->id_history);
            }
       }else{
            $this->session->set_flashdata('erorr','Data gagal ditambahkan');
       }
       redirect('catatan/'.$action);
    }
    
    public function edit($id)
    {
        $post = $this->input->post(NULL,TRUE);
        $this->form_validation->set_rules('desc','Deskripsi','required|trim');
        $this->form_validation->set_rules('nominal','Nominal','required|trim|numeric');
        if (isset($post['masuk'])) {
            $this->form_validation->set_rules('hp','trim');
            $url = 'masuk';
        } else {
            $this->form_validation->set_rules('hp','No Hp/Token','required|trim');
            $url = 'keluar';
        }
        $this->form_validation->set_rules('status','Status','required|trim');
        $this->form_validation->set_rules('ket','Keterangan','required|trim');
        if ($this->form_validation->run() == FALSE)
        {
            $data['ket'] = $this->catatan_model->keterangan();
            $data['catatan'] = $this->catatan_model->showData(null,$id);
            if($data['catatan']->keterangan_id == 1)
            {
                $title = "Edit Pemasukan";
            }else
            {
                $title = "Edit Pengeluaran";
            }
            $data['title'] = $title;
            return view('catatan/edit',$data);
        }else{
            $this->catatan_model->updateData($post,$id);
            if($this->db->affected_rows() > 0)
            {
                $this->session->set_flashdata('success','Data telah di perbaharui');
                if($this->catatan_model->cekHistori() > 0)
                {
                    $data = $this->catatan_model->cekHistori()->row();
                    updateHistory($data->id_history);
                }
                redirect('catatan/'.$url);
            }else{
                $this->session->set_flashdata('error','Data gagal diperbaharui');
                redirect('catatan/edit/'.$id);
            }
        }
    }
    // hapus data
    public function hapus($id,$ketId)
    {
        $this->catatan_model->deleteData($id);
        if($ketId == 1){
            $url = "masuk";
        }else
        {
            $url = "keluar";
        }
        if($this->catatan_model->cekHistori() > 0)
        {
            $data = $this->catatan_model->cekHistori()->row();
            updateHistory($data->id_history);
        }
        $this->session->set_flashdata('success','Data telah dihapus');
        redirect('catatan/'.$url);
    }
}