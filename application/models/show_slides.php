<?php

class Show_Slides extends CI_Model {
    function __construct()
    {
        $this->load->database();
    }

    function get_greet($subdomain)
    {
        $query = $this->db->select('id')
                ->from('greets')
                ->where('subdomain', $subdomain)
                ->get();

        return $query->result();
    }

    function get_slides($subdomain)
    {
        $greet_id = $this->get_greet($subdomain);
        $greet_id = $greet_id[0];
        $greet_id = $greet_id->id;

        $query = $query = $this->db->select('*')
            ->from('slides')
            ->where('greet_id', $greet_id)
            ->get();
        return $query->result();
    }
}