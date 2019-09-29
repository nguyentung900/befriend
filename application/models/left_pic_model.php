<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class left_pic_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	//get picture
	public function getPic($user_id)
	{
		$this->db->select('post_img');
		$this->db->where('user_id', $user_id);
		$this->db->order_by('user_id', 'desc');
		$result = $this->db->get('posts', 6);
		$result = $result->result_array();

		return $result;
	}

}

/* End of file left_pic_model.php */
/* Location: ./application/models/left_pic_model.php */