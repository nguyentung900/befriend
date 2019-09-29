<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class update_avt_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_avt()
	{
		$this->db->select('user_avt');
		$this->db->where('user_id', $this->session->userdata('user_id'));

		$result = $this->db->get('users');
		$result = $result->result_array();

		return $result;
	}

	public function update_avt($user_avt)
	{
		$data = array('user_avt' => $user_avt);
			/*echo '<pre>';
			print_r($data);
			echo '</pre>';*/
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->update('users', $data);
	}

}

/* End of file update_avt_model.php */
/* Location: ./application/models/update_avt_model.php */