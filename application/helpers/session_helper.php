<?php
if (!function_exists('get_flashdata'))
{
    function get_flashdata($key)
    {
        $CI = get_instance();
        $CI->load->library('session');
        return $CI->session->flashdata($key);
    }
}
if(!function_exists('active_link')) {
    function activate_menu($controller) {
      // Getting CI class instance.
      $CI = get_instance();
      // Getting router class to active.
      $class = $CI->router->fetch_class();
      return ($class == $controller) ? 'active' : '';
    }
  }
?>