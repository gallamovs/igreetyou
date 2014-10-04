<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->library('session');
        $this->load->helper('url');

        $flag = true;

        if (isset($_POST['subdomain']) && !empty($_POST['subdomain'])) {
            $this->load->model('greets');
            $greets = $this->greets->get_greets();

            $flag = false;

            foreach ($greets as $greet) {
                if ($greet->subdomain == $_POST['subdomain']) {
                    $flag = true;
                }
            }

            if (!$flag) {
                $this->greets->insert_greet($_POST['subdomain']);
                $this->session->set_userdata(array('subdomain' => $_POST['subdomain']));
            }
        }

        if ($flag && !$this->session->userdata('subdomain')) {
            $this->load->view('welcome');
        } else {
            redirect('/slides/index');
        }
	}
}