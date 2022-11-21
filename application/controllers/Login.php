<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
         
        
        // if ($this->session->userdata("loggedin") == TRUE) {
        //     redirect(base_url() . "dashboard");
        // }
    }
	public function index()
	{
        if ($_POST) {
            $user_data = $this->User_model->user_login();
           
            if (!empty($user_data)) {
                $data = array(
                    'id' => $user_data[0]->id,
                    'name' => $user_data[0]->name,
                    'user_role' => $user_data[0]->email,
                    'email' => $user_data[0]->password,
					'approval' => $user_data[0]->approval,
					'role' => $user_data[0]->role
                );

				if($data['approval'] == 1){
					if($data['role'] == "Admin"){
						$data['loggedin'] = 2;
					}
					else{
						$data['loggedin'] = 1;
					}
					$this->session->set_userdata($data);
				}
                
                redirect(base_url() . "dashboard");
            } else {
                $this->session->set_flashdata("error", "Not a valid user. Please try again.");
                redirect(base_url() . "login");
            }
		}
		$this->load->view('login');
    }
}
