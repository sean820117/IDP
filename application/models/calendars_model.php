<?php
class Calendars_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_calendar($id = FALSE)
	{
		$this->db->where('userid' , $id);
		$this->db->from('7_idp_events_of_user');
		$this->db->join("7_idp_infos","7_idp_infos.id = 7_idp_events_of_user.eventid");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function set_event($eventid,$userid)
	{
		$data = array(
			'eventid' => $eventid,
			'userid' => $userid,
		);
		
		return $this->db->insert('7_idp_events_of_user', $data);
	}
}