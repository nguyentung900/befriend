<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myIndex_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$post_id=1;
		$this->load->model('left_pic_model');
		$this->load->model('center_post_model');
		$this->load->model('update_avt_model');
		$this->load->model('addFriend_model');
		$pic = $this->left_pic_model->getPic($user_id);
		$load_data_post = $this->center_post_model->getPost($user_id);
		$load_comment = $this->center_post_model->getComment();
		$get_avt = $this->update_avt_model->get_avt();
		$get_listFriend_All = $this->addFriend_model->get_listFriend_All();
		//danh sach user da gui ket ban
		$get_listFriend_added = $this->addFriend_model->get_listFriend_added();
		//lay danh sach ban de conform
		$get_listFriend_To_Confirm = $this->addFriend_model->get_listFriend_To_Confirm();
		//lay danh sách bạn của user
		$get_list_friend = $this->addFriend_model->get_list_friend();

		//
		//$addLike = $this->center_post_model->addLike()
		
		//lay like
		$get_list_like = $this->center_post_model->get_list_like();

		//lay danh sach user
		$search_user = trim($this->input->post('search_user'));
		if($search_user==""){$search_user='?';}
		$serach_user = $this->center_post_model->serach_user($search_user);


		$data = array(
			'item_content' 		=> 'my_acc/content_view',
			'pic' 				=> $pic,
			'load_data_post' 	=>$load_data_post,
			'load_comment' 		=> $load_comment,
			'get_avt'			=> $get_avt,
			'get_listFriend_All' => $get_listFriend_All,
			'get_listFriend_added' => $get_listFriend_added,
			'get_listFriend_To_Confirm' => $get_listFriend_To_Confirm,
			'get_list_friend' 		=> $get_list_friend,
			'get_list_like'		=> $get_list_like,
			'serach_user' 			=> $serach_user
		);

		$this->load->view('my_acc/myIndex_view', $data);
	}


	public function addPost()
	{
		$post_content = $this->input->post('post_content');
		//$post_img = $this->input->post('post_img');
		$post_img = $_FILES['post_img']['name'];

		$this->load->model('center_post_model');
		
		$result = $this->center_post_model->addPost($post_content, $post_img);

		if($result>0) {

			//data da duoc them
			//thi them anh vao server
			$file = $_FILES['post_img'];
			if($file['name'] !=""){
				$filename 		= $file['tmp_name'];
				$destination 	= 'img/img-upload/'.$file['name']; 
				move_uploaded_file($filename, $destination);			
			}
			$this->session->set_flashdata('thanhcong', 'Bài viết của bạn đã được tạo!');
			redirect('myAcc/myIndex_controller','refresh');

			
		}
	}


	public function updatePost_content($post_id)
	{
		//echo $post_id; die();
		$post_content  = $this->input->post('post_content');
		$this->load->model('center_post_model');
		$this->center_post_model->updatePost_content($post_id, $post_content);

		redirect('myAcc/myIndex_controller','refresh');
	}


	public function deletePost($post_id)
	{
		//echo $id;die();
		//
		//day là hàm thuc hien xóa bài post
		//nhưng, truoc tien phải xóa các comment trong bài post này
		//trước (nếu có), vì ràng buoc fk giửa 2 table posts và comments
		
		$this->load->model('center_post_model');
		$this->center_post_model->deleteCmt_with_post($post_id);

		//dau do tien hành xóa bài post, 
		$this->center_post_model->deletePost($post_id);
		
		redirect('myAcc/myIndex_controller','refresh');
	}


	public function addComment()
	{
		$cmt_content = $this->input->post('cmt_content');
		$post_id = $this->input->post('post_id');
		$user_id = $this->input->post('user_id');

		$this->load->model('center_post_model');
		$result = $this->center_post_model->addComment($cmt_content, $post_id, $user_id);

		if($result>0) {
			redirect('myAcc/myIndex_controller','refresh');
		}
	}

	//xy ly bang ajax
	public function addComment_ajax()
	{
		$cmt_content = $this->input->post('cmt_content');
		$post_id = $this->input->post('post_id');
		$user_id = $this->input->post('user_id');
		echo 'nguyen thanh tung';
		$this->load->model('center_post_model');
		$result = $this->center_post_model->addComment($cmt_content, $post_id, $user_id);

		if($result>0) {
			//redirect('myAcc/myIndex_controller','refresh');
			$load_data_post = $this->center_post_model->getPost($user_id);
			/*echo '<pre>';
			print_r($load_data_post);
			echo '</pre>';*/

		
		}
	}


	public function update_avt()
	{
		 $post_content = $this->input->post('post_content');
		$user_avt = $_FILES['user_avt']['name'];

		$this->load->model('update_avt_model');

		
		$this->update_avt_model->update_avt($user_avt);
		//die();
		//cap nhat avt xong, up anh avt len post
		$this->load->model('center_post_model');
		$result = $this->center_post_model->addPost($post_content, $user_avt);


		$file = $_FILES['user_avt'];
		if($file['name'] !=""){
			$filename 		= $file['tmp_name'];
			$destination 	= 'img/img-avt/'.$file['name']; 
			$destination_post 	= 'img/img-upload/'.$file['name'];
			move_uploaded_file($filename, $destination);
			move_uploaded_file($filename, $destination_post);			
		}
		
		redirect('myAcc/myIndex_controller','refresh');
	}


	//add friends
	public function addFriend($id)
	{
		$this->load->model('addFriend_model');
		$result = $this->addFriend_model->addFriend($id, 0);
		if($result > 0) {
			redirect('myAcc/myIndex_controller','refresh');
		}
		else {
			$this->session->set_flashdata('thanhcong', 'Đã kết bạn rồi!');
			redirect('myAcc/myIndex_controller','refresh');
		}

		
	}


	public function confirm_addFriend($user_id)
	{
		//echo $user_id;
		$this->load->model('addfriend_model');
		//xac nhan ket ban, thay doi list_status = 1
		$this->addfriend_model->confirm_addFriend($user_id);
		//gia su a chap nhan ket ban voi b,
		//thi2 tien hanh tu dong cho b la ban cua3 a bang cach
		//them b vao2 bang listfriend voi  list_status cua b = 1
		$this->addfriend_model->addFriend($user_id, 1);

		redirect('myAcc/myIndex_controller','refresh');
	}

	public function addLike($post_id)
	{
		$post_id = $this->input->post('post_id');
		$this->load->model('center_post_model');
		$result = $this->center_post_model->addLike($post_id);

		if($result>0) {
			redirect('myAcc/myIndex_controller','refresh');
		}
	}



	



}

/* End of file myIndex_controller.php */
/* Location: ./application/controllers/myIndex_controller.php */