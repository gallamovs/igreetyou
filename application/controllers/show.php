<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
        $this->load->helper('show_helper');
        $this->load->view('show');
	}
}