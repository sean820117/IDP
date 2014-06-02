<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// this page was gone
			show_404();
		}
		
		$data['title'] = ucfirst($page); // fisrt letter shuold be 
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	public function about()
	{
		$data['title'] = 'about';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer', $data);	
	}

	public function test() {
		$data['title'] = 'test';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		//$this->load->library('gcal');

		
		//$calendar = $this->gcal->calendarGet(array(
		  // 'calendarId' => 'primary',   // required
		  // 'redirectURI' => 'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/test'  // defaults to the URL of the current page
		//));

		//$data['calendar'] = $calendar;
		$this->load->view('templates/header', $data);
		$this->load->view('/pages/test', $data);
	}
}
