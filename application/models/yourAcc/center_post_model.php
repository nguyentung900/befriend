<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class center_post_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_info_yourFriend($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id', $user_id);

		$result = $this->db->get('users');
		$result = $result->result_array();

		return $result;

	}

	public function getPost($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id', $user_id);
		$this->db->order_by('post_id', 'desc');

		$result = $this->db->get('posts');
		$result = $result->result_array();

		return $result;
	}

	// get comment:
	public function getComment()
	{
		
		$this->db->select('comment2.cmt_content, comment2.post_id, users.user_id, users.user_firstname, users.user_lastname, users.user_avt');
		$this->db->from('users');
		$this->db->join('comment2', 'users.user_id = comment2.user_id');
		//$this->db->where('user_id', $user_id);
		//$this->db->where('post_id', $post_id);

		$result = $this->db->get('');
		$result = $result->result_array();

		return $result;
	}

	public function addComment($cmt_content, $post_id, $user_id)
	{
		$data = array(
			'cmt_content' => $cmt_content,
			'post_id' => $post_id,
			'user_id' => $user_id
		);
			/*echo '<pre>';
			print_r($data);
			echo '</pre>';
			die();*/
		$this->db->insert('comment2', $data);
		return $this->db->insert_id();
	}

	public function addLike($post_id, $user_id)
	{
		$data = array(
			'like_number' => 1,
			'post_id' => $post_id,
			'user_id' => $user_id
		);
		/*echo '<pre>';
		print_r($data);
		echo '</pre>';*/
		$this->db->insert('like2', $data);
		return $this->db->insert_id();

	}


	public function get_list_like()
	{
		$this->db->select('*');
		$result = $this->db->get('like2');
		$result=$result->result_array();

		return $result;
	}
	//lay hinh cua your user da post
	public function get_yourPic($user_id)
	{
		$this->db->select('post_id, post_img');
		$this->db->where('user_id', $user_id);
		$this->db->where('post_img !=', "");
		$result = $this->db->get('posts');
		$result = $result->result_array();
			
		return $result;

	}

}

/* End of file center_post_model.php */
/* Location: ./application/models/center_post_model.php */