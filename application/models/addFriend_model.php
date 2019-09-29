<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addFriend_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// lay danh sach user trong table users de hien thi5
	// de xuat user
	public function get_listFriend_All()
	{
		//lay danh sach user là bạn cùa user dang xet
		$this->db->select('list_user_id');
		$this->db->where('user_id', $this->session->userdata('user_id'));
		//$this->db->where('list_user_id', $this->session->userdata('user_id'));
		$user_id = $this->db->get('listfriends');
		$user_id = $user_id->result_array();


		$this->db->select('*');
		// neu là loại bỏ chính mình khỏi danh sách load de xuat user
		$this->db->where('user_id !=', $this->session->userdata('user_id'));
		//dieu kien: neu là bạn, thì loại bỏ khỏi danh sach load bạn bè de xuất
		foreach($user_id as $value) {
			$this->db->where('user_id !=', $value['list_user_id']);
			//$this->db->where('user_id !=', $value['user_id']);		
		}
		//$this->db->where('user_id !=', $this->session->userdata('user_id'));

		$result = $this->db->get('users', 4);
		$result = $result->result_array();
			/*echo '<pre>';
			print_r($result);
			echo '</pre>';*/
		return $result;

	}

	//lay ra danh sach nhung user ma mình da ket ban
	public function get_listFriend_added()
	{
		$this->db->select('*');
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('list_status',0);

		$result = $this->db->get('listfriends');
		$result = $result->result_array();

		return $result;
	}

	//lay ra danh sach user ket ban voi minh de xac nhan ket bạn từ user đó
	public function get_listFriend_To_Confirm()
	{
		

		$this->db->select('users.user_id, users.user_firstname, users.user_lastname, users.user_avt');
		$this->db->where('listfriends.list_user_id', $this->session->userdata('user_id'));
		$this->db->where('list_status', 0);
		//$this->db->where('users.user_id', 4);
		/*foreach($data as $value) {
			$this->db->where('users.user_id', $value['user_id']);
		}*/
		$this->db->from('users');
		$this->db->join('listfriends', 'users.user_id = listfriends.user_id');
		/*foreach($data as $value) {
			$this->db->where('user_id', $value['user_id']);
		}*/


		$result = $this->db->get();
		$result = $result->result_array();

		return $result;

	}

	public function addFriend($user_id, $list_status)
	{
		//01
		$this->db->select('*');
		$this->db->where('user_id', $user_id);

		$data = $this->db->get('users');
		$data = $data->result_array();

		$user_id = "";
		$user_acc = "";
		$user_firstname = "";
		$user_lastname = "";
		$user_sex = "";
		$user_phone = "";
		$user_address = "";
		$user_avt = "";

		foreach($data as $value) {
			$user_id 		.= $value['user_id'];
			$user_acc 		.= $value['user_acc'];
			$user_firstname .= $value['user_firstname'];
			$user_lastname 	.= $value['user_lastname'];
			$user_sex 		.= $value['user_sex'];
			$user_address 	.= $value['user_address'];
			$user_avt 		.= $value['user_avt'];
		}

		

		$data_to_insert_01 = array(
			'user_id' => $this->session->userdata('user_id'),
			'list_user_id' => $user_id,
			'user_firstname' => $user_firstname,
			'user_lastname' => $user_lastname,
			'user_sex' => $user_sex,
			'user_phone' => $user_phone,
			'user_address' => $user_address,
			'user_avt' => $user_avt,
			'list_status' => $list_status
		);



			/*echo '<pre>';
			print_r($data_to_insert);
			echo '</pre>';*/
		
	
		$this->db->insert('listfriends', $data_to_insert_01);

		//$this->db->insert('listfriends', $data_to_insert_02);

		return $this->db->insert_id();

	}

	//thuc hien xac nhan, chap nhan loi moi ket ban
	public function confirm_addFriend($user_id)
	{
		
		$this->db->where('user_id', $user_id);
		$data = array('list_status' => 1);

		$this->db->update('listfriends', $data);
	}


	//lay danh sach bạn cua user
	public function get_list_friend()
	{
		$this->db->select('*');
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('list_status', 1);

		$result = $this->db->get('listfriends');
		$result = $result->result_array();

		return $result;
	}

}

/* End of file addFriend_model.php */
/* Location: ./application/models/addFriend_model.php */