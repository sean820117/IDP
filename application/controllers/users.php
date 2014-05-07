<?php
class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function login()
	{

		$userId = $this->users_model->get_user_from_fb();
		if ($this->users_model->check_user($userId)) {
			$this->session->set_userdata('user_id', $userId);
		} else {
			$this->users_model->set_user($userId);
			$this->session->set_userdata('user_id', $userId);
		}	
		
		
		
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$url = base_url("infos");
		
		//header("Location:$url");
		echo '<script>location.href="'.$url.'";</script>';
		//echo base_url();
	}
}