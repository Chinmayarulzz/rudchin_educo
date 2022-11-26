<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

	public function index()
	{
		if($this->session->userdata("loggedin") == 2){
			$this->load->view('admin_dashboard');
		}
		else{
			$this->load->view('homepage');
		}
	}

	public function approve($id){
		$where = array('id'=>$id, 'approval'=>0);
		$data = array('approval'=>1);
		$this->db->update('employee_details', $data, $where);
		redirect(base_url() . 'admin_dashboard');
	}

	public function reject($id){
		$where = array('id'=>$id, 'approval'=>0);
		$data = array('approval'=>-1);
		$this->db->update('employee_details', $data, $where);
		redirect(base_url() . 'admin_dashboard');
	}
}
