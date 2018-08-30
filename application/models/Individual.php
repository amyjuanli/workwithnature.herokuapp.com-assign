<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual extends CI_Model
{
	
	public function add_donor($arg)
	{
		$this->db->insert('donors', $arg);
	}

	public function add_donation($arg)
	{
		$this->db->insert('donations', $arg);
	}
	public function getDonorId() 
	{
		$sql = 'SELECT * FROM donors ORDER BY id DESC LIMIT 1';
		$this->db->query($sql);
	}
}


?>