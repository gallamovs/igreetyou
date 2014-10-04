<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Success extends CI_Controller {

	public function index()
    {
        $this->load->library('session');
        $this->session->set_userdata(array('subdomain' => false));
        $this->load->helper('url');

        $this->load->view('success');
    }
}