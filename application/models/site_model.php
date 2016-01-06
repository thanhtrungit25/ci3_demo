<?php
class Site_model extends CI_Model {

	function getAll() {

		$q = $this->db->get('site');
		return $q->result();
	}
	function insert_one($data) {
		$this->db->insert('site', $data);
	}
	function insert_many($data) {
		$this->db->insert_batch('site', $data);
		return $this->db->affected_rows();
	}
	/**
	 * Create insert string
	 * @return string query
	 */
	function insert_helper() {
		$data = array('title' => 'Diep Van 3');
		$str = $this->db->insert_string('site', $data);
		echo $str;die;
	}
	function update_helper() {
		$data = array('title' => 'Messi');
		$where = "id = '2'";

		$str = $this->db->update_string('site', $data, $where);
		echo $str;
	}


}