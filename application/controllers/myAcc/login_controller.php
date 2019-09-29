<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login_view');
	}


	public function login()
	{
		$username = $this->input->post('name');
		$password = $this->input->post('pass');

		
		
		$config = array(
			array(
				'field' => 'name',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'pass',
				'label' => 'Pass',
				'rules' => 'required'
			)

		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$this->load->model('login_model');
			$result = $this->login_model->login($username, $password);
				/*--*/
			if(!empty($result)) {
				$user_id = "";
				$user_acc = "";
				$user_pass = "";
				$user_firstname = "";
				$user_lastname = "";
				$user_avt = "";
				$user_sex = "";

				foreach ($result as $value) {
					$user_id .= $value['user_id'];
					$user_acc .=$value['user_acc'];
					$user_pass .= $value['user_pass'];
					$user_firstname .= $value['user_firstname'];
					$user_lastname .= $value['user_lastname'];
					$user_avt .= $value['user_avt'];
					$user_sex .= $value['user_sex'];
				}

				$infoUser = array(
					'user_id' => $user_id,
					'user_acc' => $user_acc, 
					'user_pass' => $user_pass,
					'user_firstname' => $user_firstname,
					'user_lastname' => $user_lastname,
					'user_avt' => $user_avt,
					'user_sex' => $user_sex
					
				);
				$this->session->set_userdata($infoUser);
				//header('location: http://localhost/www/codeigniter/beFriend/myAcc/myIndex_controller');
				redirect('myAcc/myIndex_controller','refresh');
				/*$this->load->model('user_model');
				$data = $this->user_model->getData();
				$data = array('listUser' => $data);
				$this->load->view('user_view', $data);*/
				//redirect('/user_controller','refresh');
			}
			else {
				//sai vì pass va name k đúng
				$this->load->view('login_view');
				
			}
			
		} else {
			//sai vì lỗi validateton: bỏ trống, k nhập pass
			$this->load->view('login_view');
		}

		
	}


	//dang ky tai khoan
	public function addAccount()
	{
		$user_acc = $this->input->post('user_acc');
		$user_pass = $this->input->post('user_pass');
		$user_repass = $this->input->post('user_repass');
		$user_firstname = $this->input->post('user_firstname');
		$user_lastname = $this->input->post('user_lastname');
		$user_sex = $this->input->post('user_sex');

		if($user_sex=="Nam") {$user_avt ="default_avt_boy.jpg"; $user_sex=1;}
		else { $user_avt = "dedault_avt_girl.jpg"; $user_sex=0;}
		
		
		
		$config = array(
			array(
				'field' => 'user_acc',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'user_pass',
				'label' => 'Pass',
				'rules' => 'required'
			),
			array(
				'field' => 'user_repass',
				'label' => 'rePass',
				'rules' => 'required|matches[user_pass]'
			),
			array(
				'field' => 'user_firstname',
				'label' => 'Pass',
				'rules' => 'required'
			),
			array(
				'field' => 'user_lastname',
				'label' => 'Pass',
				'rules' => 'required'
			)

		);

		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {

			$this->load->model('login_model');
			$result = $this->login_model->addAcount($user_acc, $user_pass, $user_firstname, $user_lastname, $user_sex, $user_avt);

			if($result>0) {
				$this->session->set_flashdata('thanhcong','<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Tài khoản của bạn đã được tạo thành công!
					</div>');
				//header('location: http://localhost/www/codeigniter/beFriend/myAcc/login_controller');
				redirect('myAcc/login_controller','refresh');
			}
			
		} else {
			//sai vì lỗi validateton: bỏ trống, k nhập pass
			//$this->session->set_flashdata('kthanhcong', 'Đăng ký không thành công!');
			$this->load->view('login_view');
		}
	}


	//dang xuat + huy session
	public function logout()
	{
		$array_items = array('user_id', 'user_name');
		$this->session->unset_userdata($array_items);
		//header('location: http://localhost/www/codeigniter/beFriend/myAcc/login_controller');
		redirect('myAcc/login_controller','refresh');
	}

}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */