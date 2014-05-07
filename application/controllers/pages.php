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

		$this->load->view('pages/about', $data);	
	}
}
