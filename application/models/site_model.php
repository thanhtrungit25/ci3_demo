<?php
class Site_model extends CI_Model {

	function getAll() {

		$q = $this->db->get('test');
		return $q->result();
	}


}