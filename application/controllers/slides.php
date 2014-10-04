<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function index()
	{
        $this->load->library('session');

        if ($subdomain = $this->session->userdata('subdomain')) {
            $this->load->helper('url');
            $this->load->view('slides');

            if (isset($_POST['delete']) && !empty($_POST['delete'])) {
                $this->load->model('greets');
                $this->greets->delete_greet($subdomain);
                $this->session->unset_userdata('subdomain');
                redirect('/welcome/index');
            }
        }
	}
}