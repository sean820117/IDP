<?php

class Infos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('infos_model');
		$this->load->model('calendars_model');
	}

	public function home()
	{
		$data['infos'] = $this->infos_model->get_infos();
		$data['title'] = 'home';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');

		$this->load->view('templates/header', $data);
		$this->load->view('infos/home', $data);
	}

	public function index()
	{
		$data['infos'] = $this->infos_model->get_infos();
		$data['events'] = $this->calendars_model->get_calendar($this->session->userdata('user_id'));
		$data['title'] = 'infos';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');

		$this->load->view('templates/header', $data);
		$this->load->view('infos/index', $data);
		$this->load->view('infos/calendar', $data);
		$this->load->view('infos/detail', $data);
		$this->load->view('infos/invite', $data);
		$this->load->view('templates/footer');
	}

	public function index_get_data($id)
	{
		$data['infos_item'] = $this->infos_model->get_infos($id);
		$data['infos'] = $this->infos_model->get_infos();
		$data['events'] = $this->calendars_model->get_calendar($this->session->userdata('user_id'));
		$data['title'] = 'infos';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		//$data['title'] = $data['infos_item']['title'];
		//$data['content'] = $data['infos_item']['content'];
		$data['title'] = $data['infos_item']['title'];
		$data['content'] = $data['infos_item']['content'];
		$data['detail_id'] = $id;

		$this->load->view('infos/detail', $data);
		$this->output->set_output($data);
		$this->output
    		->set_content_type('application/json')
    		->set_output(json_encode($data['infos_item']));

    	
	}

	public function category($category)
	{
		$data['infos'] = $this->infos_model->get_infos_by_category($category);
		$data['events'] = $this->calendars_model->get_calendar($this->session->userdata('user_id'));
		$data['title'] = "infos/".$category;

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('infos/index', $data);
		$this->load->view('infos/invite', $data);
		$this->load->view('infos/calendar', $data);
		$this->load->view('infos/detail', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['infos_item'] = $this->infos_model->get_infos($id);
		if (empty($data['infos_item']))
		{
			show_404();
		}

		$data['title'] = $data['infos_item']['title'];

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('infos/view', $data);
		$this->load->view('templates/footer');
	}

	public function get_sub_categories($parent)
	{
		$data['sub_categories'] = $this->infos_model->get_categories($parent);

		$this->output->set_output($data);
		$this->output
    		->set_content_type('application/json')
    		->set_output(json_encode($data['sub_categories']));
	}

	public function newpage() {
		$data['title'] = 'new';
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('infos/new');
		$this->load->view('templates/footer');
	}

	public function editpage($id) {
		$data['title'] = 'edit';
		$data['infos_item'] = $this->infos_model->get_infos($id);

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('infos/edit',$data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		$data['category'] = $this->input->post('category');
		$data['start_date'] = $this->input->post('time');

		$this->infos_model->set_info($data);
	}

	public function update()
	{
		$data['id'] = $this->input->post('id');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		$data['category'] = $this->input->post('category');
		$data['start_date'] = $this->input->post('time');

		$this->infos_model->update_info($data);
	}

	public function parse_intern()
	{
		$this->load->helper('simplehtmldom');
		$html = file_get_html('http://career.osa.ncku.edu.tw/NCKU_CDD/activity/bbs.jsp');
		$s_html = file_get_html('http://career.osa.ncku.edu.tw/NCKU_CDD/activity/bbs.jsp');
		foreach($html->find('td[width=450] a') as $element)
		{ 
				
       			$title = $element->text();
       			$a_href = file_get_html("http://career.osa.ncku.edu.tw/NCKU_CDD/activity/".$element->href);
       			$content = $a_href->find('td[class=bg_white] div[id=maincontent] tbody tr td',6);
      			$element=$element->parent->parent;
      			$start_date = $element->find('td',3)->text();
       			$data['7_idp_infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","intern");

       	}
	    echo "parse_intern successful<br>";

	}
/*
	public function parse_volunteer()
	{
		$this->load->helper('simplehtmldom');
		$html = file_get_html('http://www.vya.org.tw/');
		//$s_html = file_get_html('http://career.osa.ncku.edu.tw/NCKU_CDD/activity/bbs.jsp');
		foreach($html->find('td[width=480 height=25] a') as $element)
		{ 
				
       			$title = $element->text();
       			$a_href = file_get_html("http://career.osa.ncku.edu.tw/NCKU_CDD/activity/".$element->href);
       			$content = $a_href->find('tr',5);
      			
      			$start_date = 1234;
       			$data['7_idp_infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","volunteer");

       	}
	    echo "parse_volunteer successful<br>";

	}
*/
	public function parse_art()
	{
		//////////成大藝術中心////////////
		
		$this->load->helper('simplehtmldom');

		$html = file_get_html('http://artcenter.ncku.edu.tw/bin/home.php');
		$s_html = file_get_html('http://artcenter.ncku.edu.tw/bin/home.php');
		for($x=0;$x<=3;$x++)
		{	

				$element = $html->find('span[class=ptname] a',$x);
       			$title = $element->text();
       			$a_href = file_get_html($element->href);
       			$content = $a_href->find('div[class=ptcontent]',0);
      			//$element=$element->parent->parent;
      			$start_date = 1234;
       			$data['7_idp_infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","art");

       	}
	
       	///////////////台南文化中心//////////////////
/*
		$html = file_get_html('http://culture.tainan.gov.tw/act_month/index.php?m2=30');
		$s_html = file_get_html('http://culture.tainan.gov.tw/act_month/index.php?m2=30');

		foreach($html->find('div[id=act_month] div[class=act_month_word]') as $element)
		{	
       			$title = $element->text();
       			$a_href = file_get_html('http://culture.tainan.gov.tw/act_month/index-1.php?m2=30&sid=35&id=4701');
       			$content = $a_href->find('div[id=FontSizeArea]');
      			$start_date = 2014-5-21;
       			$data['7_idp_infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","art");

       	
       	}
*/



	    echo "parse_art successful<br>";
	


	}

	public function parse_exchange()
	{

		/////////////  國際事務處 /////////////////
		$this->load->helper('simplehtmldom');


			$html = file_get_html('http://oia.ncku.edu.tw/files/40-1018-501-2.php');
			foreach($html->find('span[class=ptname] a') as $element)
			{

       			
				//$start_date = $html->find('span[class=date]')->text();
	       	 	$ahref = file_get_html($element->href);
	       	 	$content = $ahref->find('div[class=ptcontent clearfix floatholder]',0) ;


	       		$title = $element->text();
       			

      			$start_date = 2014-5-21;
       			$data['7_idp_infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","exchange");
			}

		//////////////////////////////////////////////////////////////////////

		echo "parse_exchange successful<br>";
		
	}
}