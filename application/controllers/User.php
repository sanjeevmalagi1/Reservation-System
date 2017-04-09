<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                
                $this->load->model('users_model');
                $this->load->model('shows_model');
                $this->load->model('bookings_model');
        }

	public function LogIn()
	{       
            if($this->session->userdata('logged_in')==FALSE)
            {    
		$this->load->view('LogIn/stylesheets');
                $this->load->view('LogIn/LogIn');
                if ($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if($this->users_model->LogInUser($this->input->post('UserName'),$this->input->post('Password')))
                    {
                        $sessiondata=$this->users_model->GetUserSessionData($this->input->post('UserName'));
                        $session = array(
                                    'ID'  => $sessiondata['ID'],
                                    'UserName'  => $sessiondata['UserName'],
                                    'FirstName'  => $sessiondata['FirstName'],
                                    'LastName'  => $sessiondata['LastName'],
                                    'Email'  => $sessiondata['Email'],
                                    'Phone'  => $sessiondata['Phone'],
                                    'Type'  => $sessiondata['Type'],
                                    'logged_in' => TRUE
                                    );

                        $this->session->set_userdata($session);
                        redirect(base_url().'index.php/Shows');
                        
                    }
                    
                }
                $this->load->view('LogIn/scripts');
            }
            else
            {
                redirect(base_url().'index.php/Shows');
            }
	}
        
        public function Register()
	{       
            if($this->session->userdata('logged_in')==FALSE)
            { 
		$this->load->view('LogIn/stylesheets');
                $this->load->view('LogIn/Register');
                if ($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $this->users_model->RegisterUser($this->input->post('FirstName'),$this->input->post('LastName'),$this->input->post('UserName'),$this->input->post('Password'),$this->input->post('Email'),$this->input->post('Phone'));
                    redirect(base_url().'index.php/User/LogIn');
                }
                $this->load->view('LogIn/scripts');
            }
            else
            {
                redirect(base_url().'index.php/Shows');
            }
	}
        
        public function ViewBookings($BookingID=NULL)
	{       
            if($this->session->userdata('logged_in'))
            {
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                if($BookingID == NULL)
                {
                    $Bookings['Bookings']=$this->bookings_model->GetAllBookingOfUser($this->session->userdata('ID'));
                    $this->load->view('User/Bookings',$Bookings);
                }
                else
                {
                    $Ticket['Ticket']=  $this->bookings_model->GetBookingInformation($BookingID);
                    
                    $this->load->view('User/Ticket',$Ticket);
                }
                
                $this->load->view('Templates/scripts');
            }
            else 
            {
                 redirect(base_url().'index.php/Shows');
            }
	}
        
        public function LogOut()
	{       
            if($this->session->userdata('logged_in'))
            {
                $this->session->sess_destroy();
            }
            redirect(base_url().'index.php/User/LogIn?msg="Logged Out Successfully"');
	}
}
