<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

	public function index()
	{
        if ($subdomain = $this->session->userdata('subdomain')) {
            $data['subdomain'] = $subdomain;
            $data['error'] = '';

            $this->load->helper('url');
            $this->load->view('page/header');
            $this->load->view('slides', $data);
            $this->load->view('page/footer');

            if ($this->input->post('delete')) {
                $this->load->model('greets');

                $greet = $this->greets->get_greet($subdomain);
                $this->greets->delete_slides($greet->id);
                $this->greets->delete_greet($subdomain);
                $this->session->unset_userdata('subdomain');
                redirect('/welcome/index');
            }
        }
	}

    function do_upload()
    {
        $subdomain = $this->session->userdata('subdomain');

        $this->load->model('greets');
        $greet = $this->greets->get_greet($subdomain);

        $data['subdomain'] = $subdomain;
        $data['error'] = '';

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']	= '2048';
        $config['max_width']  = '5024';
        $config['max_height']  = '5680';
        $config['file_name']  = $subdomain;

        $this->load->library('upload', $config);

        $files = $_FILES;
        $cpt = count($files['userfile']['name']);

        //Here be dragons
        for ($i=0; $i<$cpt; $i++) {
            if ($files['userfile']['name'][$i]) {
                $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                if (!$this->upload->do_upload()) {
                    $data['error'] = $this->upload->display_errors();
                    $this->load->view('slides', $data);
                } else {
                    //upload picture
                    $this->upload->data();
                    //save caption and image path
                    $image_data = $this->upload->data();
                    $slideData = array('image' => $image_data['file_name'], 'content1' => $_POST['caption'][$i], 'content2' => $_POST['subcaption'][$i], 'greet_id' => $greet->id);
                    $this->greets->save_slide($slideData);
                }
            }
        }
        if (!$data['error']) {
            redirect('/success/index');
        } else {
            //roolback
            $this->greets->delete_slides($greet->id);
        }
    }


}