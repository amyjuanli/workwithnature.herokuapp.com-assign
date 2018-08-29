<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapController extends CI_Controller {
	public function load()
	{
	    $this->load->model('donationmodel');
	    return $this->donationmodel;
	}
	public function index()
	{
        $this->load->view('maps/index.php');
	}
	
	public function show() {
		// list donations
		// die('show');
		// $this->load->view('maps/show.php');
		// die();
		$postData = $this->input->post(NULL, true);
		$donorData = $this->load()->getUserByEmail($postData['email']);
		// var_dump($this->load()->getAllByDonorID($donorData['id']));
		// die();

		$this->load->view('maps/show.php', [
			'donations' => $this->load()->getAllByDonorID($donorData['id']),
			'donor' => $this->load()->getUserByEmail($postData['email'])
			]
		);
		

	}

}
