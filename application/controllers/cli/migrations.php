<?php

class Migrations extends CI_Controller {

    public function current()
    {
        $this->load->library('migration');
        $this->migration->current();
    }

    public function latest()
    {
        $this->load->library('migration');
        $this->migration->latest();
    }

    public function version($version)
    {
        $this->load->library('migration');
        $this->migration->version($version);
    }
}