<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	//xử lý login
	public function login($useracc, $pass)
	{
		$this->db->select('*');
		$this->db->where('user_acc', $useracc);
		$this->db->where('user_pass', $pass);
		//$this->db->where('password', $password);
		
		$result = $this->db->get('users');
		$result = $result->result_array();

		return $result;
	}

	//dang ky tai khoan
	public function addAcount($user_acc, $user_pass, $user_firstname, $user_lastname, $user_sex, $user_avt)
	{
		$data = array(
			'user_acc' 		=> $user_acc,
			'user_pass' 	=> $user_pass,
			'user_firstname'=> $user_firstname,
			'user_lastname' => $user_lastname,
			'user_sex' => $user_sex,
			'user_avt'		=> $user_avt
		);
			/*echo '<pre>';
			print_r($data);
			echo '</pre>';*/
		$this->db->insert('users', $data);

		return $this->db->insert_id();
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */