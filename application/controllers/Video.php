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
                'id'=>$db_data[0]->id,
                'course'=>$db_data[0]->course,
                'course_name'=>$db_data[0]->course_name,
                'link'=>$db_data[0]->link,
                'details'=>$db_data[0]->details,
                'thumbnail'=>$db_data[0]->thumbnail
            );
            $this->load->view('editvideo',$data);
            if($_POST){
                $where = array('id'=>$id);
                $db_up = array(
                    'course'=>$this->input->post('course'),
                    'course_name'=>$this->input->post('coursename'),
                    'link'=>$this->input->post('link'),
                    'details'=>$this->input->post('details')
                );
                $this->db->update('links',$db_up,$where);
                redirect(base_url() . 'admin_dashboard');
            }
        }
        else{
            $this->load->view('homepage');
        }
    }

    public function delete($id){
        if($id){
            $where = array('id'=>$id);
            $this->db->where($where);
            $this->db->delete('links');
            redirect(base_url() . 'admin_dashboard');
        }
        else{
            $this->load->view('homepage');
        }
    }

    public function add(){
        if($_POST){
            $data = array(
                'course'=>$this->input->post('course'),
                'course_name'=>$this->input->post('coursename'),
                'link'=>'https://youtube.com/embed/EZCSlalKmaQ',
                'details'=>$this->input->post('details'),
                'thumbnail'=>'images/video11.PNG'
            );
            $this->db->insert('links',$data);
            redirect(base_url() . 'admin_dashboard');
        }
        else{
            $this->load->view('addvideo');
        }
    }

}