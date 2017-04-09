<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operations extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('bookings_model');
                $this->load->model('shows_model');
                $this->load->model('users_model');
        }
        
        public function Book($ShowID) {
           
             if($this->session->userdata('logged_in'))
             {
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                $Show['Show']=$this->shows_model->GetShowInformation($ShowID);
                $this->load->view('Opeations/Book',$Show);
                if ($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if($this->input->post('submit'))
                    {
                        $this->bookings_model->AddBooking($ShowID,  $this->session->userdata('ID'),  $this->input->post('NumberOfSeats'));
                        redirect(base_url().'index.php/User/ViewBookings/');
                    }
                }
                $this->load->view('Templates/scripts');
             }
            else 
            {
                 redirect(base_url().'index.php/User/LogIn');
            }
	
        }
        
        public function CancelBooking($BookinhID) {
            if($this->session->userdata('logged_in'))
            {
                $this->bookings_model->CancelBooking($BookinhID,  $this->session->userdata('ID'));
                redirect(base_url().'index.php/User/ViewBookings');
            }
        }
}
