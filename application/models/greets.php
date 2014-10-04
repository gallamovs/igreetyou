<?php

class Greets extends CI_Model {
    function __construct()
    {
        $this->load->database();
    }

    function get_greets()
    {
        $query = $this->db->get('greets');
        return $query->result();
    }

    function insert_greet($subdomain)
    {
        $this->subdomain = $subdomain;
        $this->db->insert('greets', $this);
    }

    function delete_greet($subdomain)
    {
        $this->db->where('subdomain', $subdomain);
        $this->db->delete('greets');
    }
}