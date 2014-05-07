<?php
class Infos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('infos_model');
	}

	public function index()
	{
		$data['infos'] = $this->infos_model->get_infos();
		$data['title'] = 'Home';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('infos/index', $data);
		$this->load->view('infos/calendar', $data);
		$this->load->view('templates/footer');
	}

	public function category($category)
	{
		$data['infos'] = $this->infos_model->get_infos_by_category($category);

		$data['title'] = $category;

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->view('templates/header', $data);
		$this->load->view('infos/index', $data);
		$this->load->view('infos/calendar', $data);
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
      			$start_date = $element->find('td',3)->text().'<br>';
       			$data['infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","intern");

       	}
	    echo "parse_intern successful<br>";

	}

	public function parse_art()
	{

		$this->load->helper('simplehtmldom');
		$html = file_get_html('http://artcenter.ncku.edu.tw/bin/home.php');
		$s_html = file_get_html('http://artcenter.ncku.edu.tw/bin/home.php');
		for($x=1;$x<=5;$x++)
		{
				$element = $html->find('span[class=ptname] a');
       			$title = $element->text();
       			//$a_href = file_get_html("http://career.osa.ncku.edu.tw/NCKU_CDD/activity/".$element->href);
       			$content = 1234;
      			//$element=$element->parent->parent;
      			$start_date = 1234;
       			$data['infos'] = $this->infos_model->set_infos_by_parser("$title","$content","$start_date","art");

       	}
	    echo "parse_art successful<br>";
	}

	public function parse_exchange()
	{
		$this->load->helper('simplehtmldom');

		echo "parse_exchange successful<br>";
		
	}
}