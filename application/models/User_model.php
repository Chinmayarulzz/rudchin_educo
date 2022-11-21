<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function register_data() {

        $data = array(
            "full_name" => $this->input->post("full_name"),
            "email" => $this->input->post("email"),
            "mobile" => $this->input->post("mobile"),
            "password" => $this->input->post("password"),
        );
        $this->db->set($data);
        $data = $this->db->insert("register");
        if ($this->db->insert_id()) {
            return true;
        } else {
            return false;
        }
    }

    public function user_login() {
        $where = array("email" => $this->input->post("email"),
            "password" => $this->input->post("password"));
        $this->db->where($where);
        $query = $this->db->get("employee_details");
        return $query->result();
    }
    
    
    public function get_user_data($where = null) {
        $this->db->where($where);
        $query = $this->db->get("register");
        return $query->result();
    }

}
