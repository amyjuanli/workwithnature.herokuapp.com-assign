<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model{
     
     
<<<<<<< HEAD
    public function addLatLng($latitude, $longitude){      
=======
    public function formkoordinatjembatan($latitude, $longitude){      
>>>>>>> 724c25a4b424422679dfb33dd5b6c35f91495c6d
        $coordinates = array(
          'latitude'=>$latitude,
          'longitude'=>$longitude
        );
<<<<<<< HEAD
=======
        
>>>>>>> 724c25a4b424422679dfb33dd5b6c35f91495c6d
        $query = $this->db->insert('donations', $coordinates);
        return $query;
    }
    
     public function getAll(){
        $this->db->select('*');
        $this->db->from('donations');
      //  $this->db->join('donors','donor.id_donor = donation.donor_id');
        $query = $this->db->get();
        return $query;
        
    }
}
//     public function read($id){
//        $this->db->select('*');
//        $this->db->from('tbl_koordinatjembatan');
//        $this->db->join('tbl_jembatan','tbl_jembatan.id_jembatan = tbl_koordinatjembatan.jembatan_id');
//        $this->db->join('id_koordinatjembatan',$id);
//        $query = $this->db->get();
//        return $query;
//        
//    }
//    
//    public function update($jalan,$latitude,$longitude,$id){
//        $data=array('jembatan_id' => $jalan,
//        'latitude'=>$latitude,
//        'longitude'=>$longitude);  
//        $this->db->where('id_koordinatjembatan',$id);
//        $query = $this->db->update('tbl_koordinatjembatan',$data);
//        return $query;
//    }
//     
//     public function delete($id){
//         $this->db->where('id_koordinatjembatan', $id);
//         $query = $this->db->delete('tbl_koordinatjembatan');
//         return $query;
//     }
//
                    
                    
                    
                    
                    
                    
                    
                    