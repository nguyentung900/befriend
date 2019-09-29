<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class get_pic_posted_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	public function get_pic()
	{
		$this->db->select('post_id, post_img');
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('post_img !=', "");
		$result = $this->db->get('posts');
		$result = $result->result_array();
			
		return $result;

	}

}

/* End of file get_pic_posted_model.php */
/* Location: ./application/models/get_pic_posted_model.php */