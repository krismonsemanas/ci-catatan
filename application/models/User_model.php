<?php
class User_model extends CI_Model
{
    public function getUser($user = null)
    {
       if($user != null)
       {
            return $this->db->get_where('admin',[
                'username' => $user
            ]);
       }
       return $this->db->get('login');
    }
}
