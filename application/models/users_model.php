<?php

class users_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        
        
        public function LogInUser($UserName,$Password) {
            $encPassword=  md5($Password);
            $this->db->select('Password')->where('UserName',$UserName);
            $query = $this->db->get('users');
            $result=$query->row_array();
            
            if($result)
            {
                if(($encPassword === $result['Password']))
                {
                    return TRUE;
                }
                else 
                {
                    return FALSE;
                }
            }
            else
            {
                return FALSE;
            }
        }
        
        public function RegisterUser($FirstName,$LastName,$UserName,$Password,$Email,$Phone) {
            $data=array(
                'FirstName' => $FirstName,
                'LastName' => $LastName,
                'UserName' => $UserName,
                'Password' => md5($Password),
                'Email' => $Email,
                'Phone' => $Phone
            );
            $this->db->insert('users',$data);
        }
        
        public function GetUserSessionData($UserName) {
            $this->db->where('UserName', $UserName);    
            $query = $this->db->get('users');
            $result = $query->row_array();
            return $result;
        }
        
        
        
       
        
       
}