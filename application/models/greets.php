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
        $this->password = md5(time());
        $this->db->insert('greets', $this);
    }

    function delete_greet($subdomain)
    {
        $this->db->where('subdomain', $subdomain);
        $this->db->delete('greets');
    }

    function get_greet($subdomain)
    {
        $this->db->where('subdomain', $subdomain);
        $query = $this->db->get('greets');
        $row = $query->result();
        return $row[0];
    }
    function delete_slides($id)
    {
        $this->db->where('greet_id', $id);
        $this->db->delete('slides');
    }
    function save_slide($data)
    {
        $this->db->insert('slides', $data);
    }
}