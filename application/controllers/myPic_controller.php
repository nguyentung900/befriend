<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myPic_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'item_content' => 'my_acc/myPic_view'
		);

		$this->load->view('my_acc/myIndex_view', $data);
	}

}

/* End of file myPic_controller.php */
/* Location: ./application/controllers/myPic_controller.php */