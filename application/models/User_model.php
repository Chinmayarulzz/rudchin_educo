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

        $where = array('email' => $data['email']);
        $this->db->where($where);
        $db_data = $this->db->get('employee_details');
        
        if(!empty($db_data)){
            if($data["password"] == $data["cnfpassword"] && $data['password'] == $db_data->password){
                $where = array('id' => $db_data->id);
                $this->db->where($where);
                $update_db_data = array('approval' => 0);
                $this->db->update('employee_details', $update_db_data);
            }
        }

        // $this->db->set($data);
        // $data = $this->db->insert("register");
        // if ($this->db->insert_id()) {
        //     return true;
        // } else {
        //     return false;
        // }
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
