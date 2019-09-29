<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myUpdate_info_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('updateInfoAcc_model');
	}

	public function index()
	{
		$this->load->model('update_avt_model');
		$this->load->model('addFriend_model');
		$get_avt = $this->update_avt_model->get_avt();
		$getInfoAcc = $this->updateInfoAcc_model->getInfoAcc();
		//lay danh sach ban de conform
		$get_listFriend_To_Confirm = $this->addFriend_model->get_listFriend_To_Confirm();
		//lay danh sách bạn của user
		$get_list_friend = $this->addFriend_model->get_list_friend();
		$data = array(
			'item_content' => 'my_acc/update_info_view',
			'getInfoAcc' => $getInfoAcc,
			'get_avt'			=> $get_avt,
			'get_listFriend_To_Confirm' => $get_listFriend_To_Confirm,
			'get_list_friend' => $get_list_friend

		);

		$this->load->view('my_acc/myIndex_view', $data);
	}


	public function update_infoAcc()
	{
		$user_sex = $this->input->post('user_sex');
		$user_phone = $this->input->post('user_phone');
		$user_address = $this->input->post('user_address');

		if($user_sex=="Nữ") {$user_sex=0;}
		else{$user_sex=1;}

		$this->updateInfoAcc_model->update_infoAcc($user_sex, $user_phone, $user_address);

		$this->session->set_flashdata('thanhcong','<div class="alert alert-success alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Thông tin tài khoản của bạn đã được cập nhật thành công!
			</div>');
				//header('location: http://localhost/www/codeigniter/beFriend/myAcc/login_controller');
		redirect('myAcc/myUpdate_info_controller','refresh');
	}

}

/* End of file myUpdate_info_controller.php */
/* Location: ./application/controllers/myUpdate_info_controller.php */