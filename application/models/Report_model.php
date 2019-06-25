<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();

    }
    public function appreciation(){
        $this->db->select('aTitle,modalId,shortContent,fullContent,imageLink,showStatus');
        $this->db->where('showStatus',1);
        $query = $this->db->get('appreciation');
        return $query->result_array();
    }
    public function get_info(){
        $this->db->select('pTitle,pContent,imageLink,showStatus');
        $this->db->where('showStatus',1);
        $query = $this->db->get('publicInfo');
        return $query->result_array();
    }
    public function gallery(){
        $this->db->select('imageName,imageData');
        $query = $this->db->get('gallery');
        return $query->result_array();        
    }
    public function ecellInfo($companyType){
        $this->db->select('companyHead,imageLink,companyData');
        $query = $this->db->get_where('eCell',array('companyType' => $companyType));
        return $query->result_array();
    }
    public function execomInfo($execomYear){
        $query = $this->db->get_where('execom',array('year' => $execomYear));
        return $query->result_array();
    }
    public function upcomingEvents(){
        $query = $this->db->get('upcomingEvents');
        return $query->result_array();        
    }
    public function messages($data){
      $this->db->insert('contacts', $data);
    }   
}