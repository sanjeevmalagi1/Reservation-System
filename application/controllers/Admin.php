<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('shows_model');
                $this->load->model('bookings_model');
                $this->load->model('users_model');
        }

	
        public function AddNewShow()
	{
             if(($this->session->userdata('logged_in'))&&($this->session->userdata('Type') == 'admin'))
             {
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                
                $this->load->view('Admin/AddNewShow');
                $this->load->view('Templates/scripts');
             }
             
	}
        
        public function ViewCustomers($ShowID=NULL)
	{
             if(($this->session->userdata('logged_in'))&&($this->session->userdata('Type') == 'admin'))
             {
                if($ShowID)
                {
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                $this->bookings_model->GetBookingsOfShow($ShowID);
                $this->load->view('Admin/ViewCustomer');
                
                $this->load->view('Admin/AddNewShow');
                $this->load->view('Templates/scripts');
                }
             }
             
	}
        
       
}
