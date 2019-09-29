<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myPic_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('update_avt_model');
		$this->load->model('addFriend_model');
		$this->load->model('get_pic_posted_model');
		$get_avt = $this->update_avt_model->get_avt();
		$get_listFriend_To_Confirm = $this->addFriend_model->get_listFriend_To_Confirm();
		//lay danh sách bạn của user
		$get_list_friend = $this->addFriend_model->get_list_friend();
		//lay ảnh đã post
		$get_pic = $this->get_pic_posted_model->get_pic();

		$data = array(
			'item_content' 				=> 'my_acc/myPic_view',
			'get_avt'					=> $get_avt,
			'get_listFriend_To_Confirm' => $get_listFriend_To_Confirm,
			'get_list_friend'			=> $get_list_friend,
			'get_pic'					=> $get_pic
		);

		$this->load->view('my_acc/myIndex_view', $data);
	}

}

/* End of file myPic_controller.php */
/* Location: ./application/controllers/myPic_controller.php */