<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class yourIndex_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data = array(
			'item_content' => 'your_acc/content_view'
		);

		$this->load->view('your_acc/yourIndex_view', $data);
	}


	public function get_info_yourFriend($user_id)
	{
		//echo $this->uri->segment(4);
		$this->load->model('yourAcc/center_post_model');
		$this->load->model('left_pic_model');
		//$this->load->model('center_post_model');
		$get_info_yourFriend = $this->center_post_model->get_info_yourFriend($user_id);
		$left_pic_model = $this->left_pic_model->getPic($user_id);
		$getPost = $this->center_post_model->getPost($user_id);
		$get_comment = $this->center_post_model->getComment();

		//lay like
		$get_list_like = $this->center_post_model->get_list_like();
		/*echo '<pre>';
		print_r($get_info_yourFriend);
		echo '</pre>';*/
		$data = array(
			'item_content' => 'your_acc/content_view',
			'get_info_yourFriend' => $get_info_yourFriend,
			'left_pic_model'		=> $left_pic_model,
			'getPost'				=> $getPost,
			'get_comment'			=> $get_comment,
			'get_list_like'			=> $get_list_like
		);

		$this->load->view('your_acc/yourIndex_view', $data);	
	}


	public function addComment()
	{
		$cmt_content = $this->input->post('cmt_content');
		$post_id = $this->input->post('post_id');
		$user_id = $this->session->userdata('user_id');
		$ma = $this->input->post('user_id');

		$this->load->model('center_post_model');
		$result = $this->center_post_model->addComment($cmt_content, $post_id, $user_id);

		if($result>0) {
			redirect('yourAcc/yourIndex_controller/get_info_yourFriend/'.$ma.'','refresh');
		}
	}

	public function addLike()
	{
		$post_id = $this->input->post('post_id');
		$user_id = $this->session->userdata('user_id');
		$ma = $this->input->post('user_id');

		$this->load->model('yourAcc/center_post_model');
		$result = $this->center_post_model->addLike($post_id, $user_id);

		if($result>0) {
			redirect('yourAcc/yourIndex_controller/get_info_yourFriend/'.$ma.'','refresh');
		}
	}

	public function yourPic($user_id) 
	{
		$this->load->model('yourAcc/center_post_model');
		$this->load->model('left_pic_model');
		//$this->load->model('center_post_model');
		$get_info_yourFriend = $this->center_post_model->get_info_yourFriend($user_id);
		$left_pic_model = $this->left_pic_model->getPic($user_id);
		$getPost = $this->center_post_model->getPost($user_id);
		$get_comment = $this->center_post_model->getComment();

		//lay like
		$get_list_like = $this->center_post_model->get_list_like();
		
		$this->load->model('yourAcc/center_post_model');
		$yourPic = $this->center_post_model->get_yourPic($user_id);


		$data = array(
			'item_content' => 'your_acc/yourPic_view',
			'get_info_yourFriend' => $get_info_yourFriend,
			'left_pic_model'		=> $left_pic_model,
			'getPost'				=> $getPost,
			'get_comment'			=> $get_comment,
			'get_list_like'			=> $get_list_like,
			'yourPic'				=> $yourPic
		);

		$this->load->view('your_acc/yourIndex_view', $data);
	}

}

/* End of file yourIndex_controller.php */
/* Location: ./application/controllers/yourIndex_controller.php */