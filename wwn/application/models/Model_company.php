<?php

class Model_company extends CI_Model {

    // public $firstname;
    // public $lastname;
    // public $company_name;
    // public $address;
    // public $zipcode;
    // public $location;
    // public $email;
    // public $phone;
    // public $timetype;
    // public $referral_method;

    // insert users information into database
    public function addCompany($data)
    {
        $this->db->insert('donors', $data);
    }

}
    ?>

     