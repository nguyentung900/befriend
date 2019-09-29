<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updateInfoAcc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getInfoAcc()
	{
		$this->db->select('user_sex, user_phone, user_address');
		$this->db->where('user_id', $this->session->userdata('user_id'));

		$result = $this->db->get('users');
		$result = $result->result_array();

		return $result;
	}


	public function update_infoAcc($user_sex, $user_phone, $user_address)
	{
		$data = array(
			'user_sex' => $user_sex,
			'user_phone' => $user_phone,
			'user_address' => $user_address
		);

			/*echo '<pre>';
			print_r($data);
			echo '</pre>';*/

		$this->db->where('user_id', $this->session->userdata('user_id'));

		$this->db->update('users', $data);
	}

	

}

/* End of file updateInfoAcc_model */
/* Location: ./application/models/updateInfoAcc_model */