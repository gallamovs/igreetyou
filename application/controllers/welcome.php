<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->library('session');
        $this->load->helper('url');

        $data['error'] = '';

        $flag = true;

        if ($subdomain = $this->input->post('subdomain')) {
            $this->load->model('greets');
            $greets = $this->greets->get_greets();

            $flag = false;

            foreach ($greets as $greet) {
                if ($greet->subdomain == $subdomain) {
                    $flag = true;
                }
            }

            if (!$flag) {
                $this->greets->insert_greet($subdomain);
                $this->session->set_userdata(array('subdomain' => $subdomain));
            } else {
                $data['error'] = 'Sorry. this name is already taken!';
            }

            if (!ctype_alnum($subdomain)) {
                $data['error'] = 'Please use only letters and numbers';
            }
        }

        if ($flag && !$this->session->userdata('subdomain') || !ctype_alnum($subdomain)) {
            $this->load->view('page/header');
            $this->load->view('welcome', $data);
            $this->load->view('page/footer');
        } else {
            redirect('/slides/index');
        }
	}
}