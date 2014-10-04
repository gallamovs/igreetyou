<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_slides'))
{
    function get_slides()
    {
        $CI = get_instance();

        $subdomain = $CI->uri->segment(3);
        $CI->load->model('show_slides');
        return $CI->show_slides->get_slides($subdomain);
    }
}
