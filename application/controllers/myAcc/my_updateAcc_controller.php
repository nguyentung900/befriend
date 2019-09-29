<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class my_updateAcc_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('update_avt_model');
		$this->load->model('addFriend_model');
		$get_avt = $this->update_avt_model->get_avt();
		$this->load->model('updateAcc_model');
		$getAcc = $this->updateAcc_model->getAcc();
		//lay danh sach ban de conform
		$get_listFriend_To_Confirm = $this->addFriend_model->get_listFriend_To_Confirm();
		//lay danh sách bạn của user
		$get_list_friend = $this->addFriend_model->get_list_friend();
		$data = array(
			'item_content' => 'my_acc/update_acc_view',
			'getAcc'		=> $getAcc,
			'get_avt'			=> $get_avt,
			'get_listFriend_To_Confirm' => $get_listFriend_To_Confirm,
			'get_list_friend' => $get_list_friend

		);

		$this->load->view('my_acc/myIndex_view', $data);
	}


	public function update_acc()
	{
		$user_acc = $this->input->post('user_acc');
		$user_pass = $this->input->post('user_pass');
		$user_repass = $this->input->post('user_repass');
		$user_firstname = $this->input->post('user_firstname');
		$user_lastname = $this->input->post('user_lastname');

		// $config = array(
		// 	array(
		// 		'field' => 'user_acc',
		// 		'label' => 'Username',
		// 		'rules' => 'required'
		// 	),
		// 	array(
		// 		'field' => 'user_pass',
		// 		'label' => 'Pass',
		// 		'rules' => 'required'
		// 	),
		// 	array(
		// 		'field' => 'user_repass',
		// 		'label' => 'user_repass',
		// 		'rules' => 'required|matches[user_pass]'
		// 	),
		// 	array(
		// 		'field' => 'user_firstname',
		// 		'label' => 'Pass',
		// 		'rules' => 'required'
		// 	),
		// 	array(
		// 		'field' => 'user_lastname',
		// 		'label' => 'Pass',
		// 		'rules' => 'required'
		// 	)

		// );

		/*$this->form_validation->set_rules($config);
		if($this->form_validation->run()) {

			
			
		}*/

		$this->load->model('updateAcc_model');
		$result = $this->updateAcc_model->update_acc($user_acc, $user_pass, $user_firstname, $user_lastname);

		
		$this->session->set_flashdata('thanhcong','<div class="alert alert-success alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Tài khoản của bạn đã được cập nhật thành công!
			</div>');
				//header('location: http://localhost/www/codeigniter/beFriend/myAcc/login_controller');
		redirect('myAcc/my_updateAcc_controller','refresh');
	}

}

/* End of file my_updateAcc_controller.php */
/* Location: ./application/controllers/my_updateAcc_controller.php */