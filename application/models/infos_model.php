<?php
class Infos_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_infos($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('infos');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('infos', array('id' => $id));
		return $query->row_array();
	}

	public function get_infos_by_category($category = FALSE)
	{
		if ($category === FALSE)
		{
			$query = $this->db->get('infos');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('infos', array('category' => $category));
		return $query->result_array();
	}

	public function set_infos_by_parser($title,$content,$start_date,$category)
	{
		$data = array(
			'title' => $title,
			'content' => $content,
			'start_date' => $start_date,
			'category' => $category
			
		);
		
		return $this->db->insert('infos', $data);
	}
}