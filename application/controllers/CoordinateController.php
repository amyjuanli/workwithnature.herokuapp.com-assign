<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

class CoordinateController extends CI_Controller{
     
    public function __construct(){
        
        parent::__construct();
        
        $this->load->model(array('common_model'));
        $this->load->helper('url');
        $this->load->library('form_validation');
        
    }
    
    function index(){
        $data = array ('content' => 'admin/formkoordinatjembatan',
        'itemkoordinat'=>$this->common_model->getAll());
        $this->load->view('templates/template-admin',$data);
    }
    function create(){
         if(!$this->input->is_ajax_request()){
             show_404();
             
         }else{
             $this->form_validation->set_rules('latitude','Latitude','trim|required');
             $this->form_validation->set_rules('longitude','Longitude','trim|required');
             if($this->form_validation->run()==false){
                 $status = 'error';
                 $msg = validation_errors();
                 
             }else{
                 if($this->model_jalan->create()){
                     $status = 'success';
                     $msg = "oke, message has been send";
                 }
                 $status = 'error';
                 $msg = "sorry, message are not send";
             }
         }
             
    }
    // store the coords to database 
    function addCoords() {
        $postData = $this->input->post(null, true);
        $this->common_model->addLatLng($postData['latitude'], $postData['longitude']);
        rediret('/coordinates');
    }
}


