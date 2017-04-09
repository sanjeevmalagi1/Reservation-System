<?php

class shows_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        
        public function GetAllShows() {
            
            $query = $this->db->get('shows');
            $result = $query->result_array();
            return $result;
        }
        
        public function GetShowInformation($ShowID) {
            $this->db->where('ID',$ShowID);
            $query = $this->db->get('shows');
            $result = $query->row_array();
            return $result;
        }
        
        public function IncrementVisits($ShowID) {
            $this->db->where('ID',$ShowID);
            $this->db->set('Visits','Visits+1',FALSE);
            $this->db->update('shows');
        }
        
        public function GetRecentShows() {
            $this->db->order_by('Date', 'DESC');
            $query = $this->db->get('shows');
            
            $result = $query->result_array();
            return $result;
        }
        
        public function GetFamousShows() {
            $this->db->order_by('Visits', 'DESC');
            $query = $this->db->get('shows');
            
            $result = $query->result_array();
            return $result;
        }
        
         public function GetShowsOfCatagory($Catagory) {
            $this->db->where('Catagory',$Catagory);
            $query = $this->db->get('shows');
            $result = $query->result_array();
            return $result;
        }
}
