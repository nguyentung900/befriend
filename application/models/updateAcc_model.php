<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updateAcc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	//hàm lay data đổ lên form update
	public function getAcc()
	{
		$this->db->select('user_acc, user_pass, user_firstname, user_lastname');
		$this->db->where('user_id', $this->session->userdata('user_id'));

		$result = $this->db->get('users');
		$result = $result->result_array();

		return $result;
	}


	public function update_acc($user_acc, $user_pass, $user_firstname, $user_lastname)
	{
		$data = array(
			'user_acc' 			=> $user_acc,
			'user_pass' 		=> $user_pass,
			'user_firstname' 	=> $user_firstname,
			'user_lastname' 	=> $user_lastname
		);
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->update('users', $data);

		 //return $this->db->insert_id();
	}


}

/* End of file updateAcc_model.php */
/* Location: ./application/models/updateAcc_model.php */