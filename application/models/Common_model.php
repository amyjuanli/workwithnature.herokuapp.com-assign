<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model{
     
     
    // public function addLatLng($latitude, $longitude){      
    //     $coordinates = array(
    //       'latitude'=>$latitude,
    //       'longitude'=>$longitude
    //     );
    //     $query = $this->db->insert('donations', $coordinates);
    //     return $query;
    // }
    public function addLatLng($latitude, $longitude, $donorId, $latestdonationId){      
        $coordinates = array(
          'latitude'=>$latitude,
          'longitude'=>$longitude,
          'donor_id' => $donorId,
          'id' => $latestdonationId
        );

        // $query = $this->db->insert('donations', $coordinates); 
        // $sql = "UPDATE donations SET latitude= $coordinates['latitude'], longitude = $coordinates['longitude'];";
        // $this->db->set('id', $coordinates['id']);
        $this->db->set('latitude', $coordinates['latitude']);
        $this->db->set('longitude', $coordinates['longitude']);
        $this->db->set('donor_id', $coordinates['donor_id']);
        $this->db->where('id', $coordinates['id']);
$this->db->update('donations');
        // $this->db->insert('donations');
         
        // $query = $this->db->replace('donations', $coordinates);
        // return $query;
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
                    
                    
                    
                    
                    
                    
                    
                    