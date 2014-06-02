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
			$query = $this->db->get('7_idp_infos');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('7_idp_infos', array('id' => $id));
		return $query->row_array();
	}

	public function get_infos_by_category($category = FALSE)
	{
		if ($category === FALSE)
		{
			$query = $this->db->get('7_idp_infos');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('7_idp_infos', array('category' => $category));
		return $query->result_array();
	}

	public function get_categories($parent = FALSE)
	{
		//if no parent input ,select categoies with no parent
		if ($parent === FALSE)
		{
			$query = $this->db->get_where('7_idp_categories', array('parent' => 'null'));
			return $query->result_array();
		}
		
		$query = $this->db->get_where('7_idp_categories', array('parent' => $parent));
		return $query->result_array();
	}

	public function set_info($data)
	{
		return $this->db->insert('7_idp_infos', $data);
	}

	public function update_info($data)
	{
		$this->db->where('id', $data['id']);
		return $this->db->update('7_idp_infos', $data);
	}

	public function set_infos_by_parser($title,$content,$start_date,$category)
	{
		$data = array(
			'title' => $title,
			'content' => $content,
			'start_date' => $start_date,
			'category' => $category
			
		);
		
		return $this->db->insert('7_idp_infos', $data);
	}
}