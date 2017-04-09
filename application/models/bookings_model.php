<?php

class bookings_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        
        public function AddBooking($ShowID,$UserID,$NumberOfBookings) {
            $data=array(
                'ShowID' => $ShowID,
                'UserID' => $UserID,
                'Number' => $NumberOfBookings,
            );
            $this->db->insert('bookings',$data);
            
        }
        
        public function GetAllBookingOfUser($UserID) {
            $condition=array(
                'UserID' => $UserID
            );
            $this->db->where($condition);
            $query = $this->db->get('bookings');
            $result = $query->result_array();
            return $result;
        }
        
        public function NumberOfBooking($ShowID) {
            $condition=array(
                'ShowID' => $ShowID
            );
            $this->db->where($condition);
            $query = $this->db->get('bookings');
            $result = $query->result_array();
            return count($result);
            
        }
        
        public function GetBookingInformation($BookingID) {
            $condition=array(
                'ID' => $BookingID
            );
            $this->db->where($condition);
            $query = $this->db->get('bookings');
            $result = $query->row_array();
            return $result;
        }
        
        public function CancelBooking($BookingID,$UserID) {
            $condition=array(
                'ID' => $BookingID,
                'UserID' => $UserID
            );
            $this->db->where($condition);
            $this->db->delete('bookings');
            
        }
        
        public function GetBookingsOfShow($ShowID) {
            $condition=array(
                'ShowID' => $ShowID
            );
            $this->db->where($condition);
            $query = $this->db->get('bookings');
            $result = $query->result_array();
            return $result;
        }
        
        
}
