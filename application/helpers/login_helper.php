<?php
function sudahLogin()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('adminId');
    if ($user_session)
    {
        redirect('home');
    }
}
function belumLogin()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('adminId');
    if (!$user_session)
    {
        redirect('auth');
    }
}