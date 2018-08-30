<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualController extends CI_Controller {

	public function index()
	{
		$this->load->view('homepage');
	}

	public function register_individual()
	{
		$this->load->view('register_individual');
	}

	# this function is for testing purposes only
	// public function logged_in()
	// {
	// 	$this->load->view('login');
	// }

	// # this function is for testing purposes only
	// public function social()
	// {
	// 	$this->load->view('sharesocial');
	// }

	// # this function is for testing purposes only
	// public function donatemore()
	// {
	// 	$this->load->view('donatemore');
	// }

	# registration form  validation
	public function donate_now()
	{
		$this->form_validation->set_rules('squaremeter', 'donation amount', 'trim|alpha_numeric_spaces|required');
		$this->form_validation->set_rules('sqm', 'donation amount', 'trim|numeric');
		$this->form_validation->set_rules('timeframe', 'time period', 'required');
		$this->form_validation->set_rules('iban_agree', 'IBAN agreement', 'required');
		$this->form_validation->set_rules('iban', 'IBAN', 'required|min_length[18]|max_length[18]'); 
		$this->form_validation->set_rules('paymentmethod', 'payment method', 'required');
		$this->form_validation->set_rules('firstname', 'first name', 'alpha|required');   
		$this->form_validation->set_rules('lastname', 'last name', 'alpha|required');  
		$this->form_validation->set_rules('street', 'street', 'trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('zipcode', 'zipcode', 'trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('location', 'trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'e-mail', 'valid_email|required|is_unique[donors.email]');  
		$this->form_validation->set_rules('password', 'password', 'min_length[7]|required'); 
		$this->form_validation->set_rules('confirm_password', 'password confirmation', 'matches[password]'); 

		if ($this->form_validation->run() === false) {
			$data['errorsRegister'] = validation_errors();
			$this->load->view('register_individual', $data); 
		} else {
			$info = $this->input->post(NULL, TRUE);
			
			$info['password'] = $this->encryption->encrypt($info['password']);

			$donordata = array(  
				'timetype' => $info['timeframe'],	
				'bankaccount' => $info['iban'],
				'salutation' => $info['salutation'],
				'firstname' => $info['firstname'],
				'insertion' => $info['insertion'],
				'lastname' => $info['lastname'],
				'birthdate' => $info['birthdate'],
				'address' => $info['address'],
				'zipcode' => $info['zipcode'],
				'location' => $info['location'],
				'email' => $info['email'],
				'password' => $info['password'],
				'referral_method' => $info['referral_method'],
				'gift' => $info['gift']
			);

			if ($info['squaremeter'] == "on") {
				$donationdata = array(
					'squaremeter' => $info['sqm']
				);
			} else {
				$donationdata = array(
					'squaremeter' => $info['squaremeter']
				);
			}
			
			$this->load->model('individual');
			$this->individual->add_donor($donordata);
		
			$this->individual->add_donation($donationdata);

			// get donor id
			$this->load->model('donationmodel');
			$donor = $this->donationmodel->getUserByEmail($info['email']);
			// var_dump($donor_id); die();
			$this->session->set_userdata('donor', $donor);


			$reg['success'] = "Congratulations " . $donordata['firstname'] . ", your donation has been registered successfully!";
			$this->load->view('register_individual', $reg); # adjust the view
		}
	}


}
