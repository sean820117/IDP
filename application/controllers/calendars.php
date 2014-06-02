<?php
class Calendars extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('calendars_model');
		$this->load->model('infos_model');
	}

	public function big_calendar() {
		$data['title'] = 'big_calendar';

		$this->load->helper('url');
		$this->load->helper('simplehtmldom');
		$this->load->library('gcal');

		
		$calendar = $this->gcal->calendarGet(array(
		   'calendarId' => 'primary',   // required
		   'redirectURI' => 'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/big_calendar'  // defaults to the URL of the current page
		));

		$data['calendar'] = $calendar;

		$this->load->view('templates/header', $data);
		$this->load->view('infos/big_calendar', $data);
		$this->load->view('templates/footer', $data);
	}

	public function set_event_to_calendar($eventid)
	{
		$this->load->helper('url');
		$this->load->helper('simplehtmldom');

		//$userid = $this->session->userdata('user_id');
		$userid = $this->input->get('userid');
		$this->calendars_model->set_event($eventid,$userid);

		$this->load->library('gcal');
		$result = $this->infos_model->get_infos($eventid);
		$response = $this->gcal->eventInsert(array(
		    'calendarId' => 'primary',   // required
		    'start' => '2014-05-'.substr($result['start_date'],-2,2),  // required
		    'end' => '2014-5-'.substr($result['start_date'],-2,2),  // required
		    'summary' => $result['title'],  // optional
		    'location' => 'tainan',  // optional
		    //'recurrence' => '',  // optional
		    'description' => '',
		    'timezone_offset' => 'Asia/Taipei',  // optional, defaults to GMT
		    'redirectURI' => 'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/big_calendar'  // defaults to the URL of the current page
		));
	}
}