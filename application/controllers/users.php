<?php
class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function login($cur_page)
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
		$url = base_url($cur_page);
		
		//header("Location:$url");
		echo '<script>location.href="'.$url.'";</script>';
		//echo base_url();
	}

	public function logout()
	{
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->session->unset_userdata('user_id');
		echo '<script>location.href="'.base_url("/home").'";</script>';
	}

	public function friendlist_fb()
	{
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$friendlist = $this->users_model->get_friendlist_fb();

		echo $friendlist['data'][0]['name'];
		foreach ($friendlist['data'] as $friend) {
			echo $friend['name']."<br>";
		}
		
	}

	public function user_list() {
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$userlist = $this->users_model->get_users();

		$this->output
    		->set_content_type('application/json')
    		->set_output(json_encode($userlist));
	}
}