<?php

class DonationModel extends CI_Model {
   public function getUserByEmail($email)
   {
       $sql = 'SELECT id, firstname, insertion, lastname FROM donors WHERE email=?';
       return $this->db->query($sql, [$email])->row_array();
   }
   public function getAllByDonorID($donor_id)
   {
        $sql = 'SELECT id, longitude, latitude, squaremeter FROM donations
                WHERE donor_id = ?
                ORDER BY squaremeter DESC';
        return $this->db->query($sql, [$donor_id])->result_array();
   }

}