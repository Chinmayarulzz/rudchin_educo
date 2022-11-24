<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function register_data() {
        $data = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "cnfpassword" => $this->input->post("cnfpassword")
        );

        $where = array('email' => $data['email'], 'password' => $data['password'], "name" => $data["name"], "approval" => -1);
        $this->db->where($where);
        $db_data = $this->db->get('employee_details');
        
        if($data["password"] == $data["cnfpassword"]){
            $where = array("email" => $data["email"] , "password" => $data["password"], "name" => $data["name"], "approval" => -1);
            $update_db_data = array("approval" => 0);
            $this->db->update("employee_details", $update_db_data, $where);
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
        $query = $this->db->get("employee_details");
        return $query->result();
    }

}
