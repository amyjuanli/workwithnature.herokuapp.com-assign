<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapController extends CI_Controller {
	public function load()
	{
	    $this->load->model('donationmodel');
	    return $this->donationmodel;
	}
	public function maploader() {
	
        $this->load->view('maps/index.php');
	}
	
	public function show() // show all donations
	{ 
		$postData = $this->input->post(NULL, true);
		$donorData = $this->load()->getUserByEmail($postData['email']);
		$donations = $this->load()->getAllByDonorID($donorData['id']);
		$this->session->set_userdata('donor', $donorData);
// set session data for the donor by the input email 
$this->session->set_userdata('emailDonor', $donorData);


		$this->load->view('maps/show.php', [
			'donations' =>$donations,
			'donor' => $donorData
			]
		);
	}
	public function donation($id) // show the detail of one donation
	{ 
		$donor_id = $this->session->userdata('donor')['id'];
		$this->load->view('maps/donation.php', [
			'donation' =>$this->load()->getDonation($id),
			'donations' =>$this->load()->totalDonationsByDonor($donor_id),
		]);
	}


}
