<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_course extends CI_Controller {

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
		$this->load->view('dashboard');
	}

	public function player($id){
		if($id){
			$where = array('id'=>$id);
			$this->db->where($where);
			$video = $this->db->get('links')->result();
			$data = array(
				'course'=>$video[0]->course,
				'course_name'=>$video[0]->course_name,
				'link'=>$video[0]->link,
				'details'=>$video[0]->details
			);
			$this->load->view('video_course', $data);
		}
		else{
			$this->load->view('dashboard');
		}
	}

}
