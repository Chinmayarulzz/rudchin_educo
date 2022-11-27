<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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
	public function index()
	{
		$this->load->view('homepage');
	}

    public function edit($id){
        if($id){
            $db_data = $this->db->get('links')->result();
            $data = array(
                'id'=>$db_data->id,
                'course'=>$db_data->course,
                'course_name'=>$db_data->course_name,
                'link'=>$db_dta->link,
                'details'=>$db_data->details,
                'thumbnail'=>$db_data->thumbnail
            );
            $this->load->view('editvideo',$data);
        }
        else{
            $this->load->view('homepage');
        }
    }

    public function delete($id){
        if($id){}
        else{
            $this->load->view('homepage');
        }
    }

    public function add($id){
        redirect(base_url() . 'video/addvideo');
    }

    public function addvideo(){

    }

}