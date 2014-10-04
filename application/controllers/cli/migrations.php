<?php

class Migrations extends CI_Controller {

    public function index()
    {
        $this->load->library('migration');
        $this->migration->current();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */