<?php 
class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_user_from_fb()
	{
		//echo base_url("/public/");
		require APPPATH."libraries/facebook.php";
		//$this->load->library('facebook');
		// Create our Application instance (replace this with your appId and secret).
		$facebook = new Facebook(array(
		  'appId'  => '1389269967996525',
		  'secret' => '909eb7f75b0f56fef9ff5f68b7fccef3',
		  'allowSignedRequest' => false
		));
		// Get User ID
		$user = $facebook->getUser();

		if (!$user) {
			$par = array();
			$permissions = "read_friendlists";
			$par['scope'] = $permissions;
			$login_url = $facebook->getLoginUrl($par);
	 	 	echo '<script>location.href="'.$login_url.'";</script>';
		}
		
		return $user;
	}

	public function get_friendlist_fb()
	{
		//echo base_url("/public/");
		require APPPATH."libraries/facebook.php";
		//$this->load->library('facebook');
		// Create our Application instance (replace this with your appId and secret).
		$facebook = new Facebook(array(
		  'appId'  => '1389269967996525',
		  'secret' => '909eb7f75b0f56fef9ff5f68b7fccef3',
		  'allowSignedRequest' => false
		));
		// Get User ID
		$user = $facebook->getUser();

		if (!$user) {
			$par = array();
			$permissions = "manage_friendlists";
			$par['scope'] = $permissions;
			$login_url = $facebook->getLoginUrl($par);
	 	 	echo '<script>location.href="'.$login_url.'";</script>';
		} else {
			$profile = $facebook->api('/me/friends','GET');
		}
		
		

		return $profile;
	}

	public function check_user($id = false)
	{
		$query = $this->db->get_where('7_idp_users', array('id' => $id));
		if ($query->num_rows() != 0) {
			return true;
		} else {
			return false;
		}
		
	}

	public function get_users($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('7_idp_users');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('7_idp_users', array('id' => $id));
		return $query->row_array();
	}

	public function set_user($id)
	{
		$facebook = new Facebook(array(
		  'appId'  => '1389269967996525',
		  'secret' => '909eb7f75b0f56fef9ff5f68b7fccef3',
		  'allowSignedRequest' => false,
		));

		$profile = $facebook->api('/'.$id,'GET');

		$data = array(
			'id' => $id,
			'name' => $profile['name'],
		);

		return $this->db->insert('7_idp_users', $data);
	}

}