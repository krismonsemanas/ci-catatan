<?php 
class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index()
    {
        sudahLogin();
        $data['title'] = 'login';
        return view('auth',$data);
    }
    public function login()
    {
        $post = $this->input->post(NULL,TRUE);
        $user = htmlspecialchars($post['username']);
        $pass = $post['password'];
        $cek = $this->user_model->getUser($user);
        if ($cek->num_rows() > 0) {
            $result = $cek->row();
            // var_dump(password_verify($pass,$result['password']));
            if(password_verify($pass,$result->password))
            {
                $params = [
                    'adminId' => $result->admin_id
                ];
                $this->session->set_userdata($params);
                redirect(site_url());
            }else{
                $this->session->set_flashdata('error_pass','Password salah!');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('error','Username salah!');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('adminId');
        redirect('auth');
    }
}