<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shows extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('shows_model');
        }

	public function index()
	{
             
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                $Shows['Shows']=$this->shows_model->GetAllShows();
                $this->load->view('Shows/Shows',$Shows);
                $this->load->view('Templates/scripts');
             
	}
        
        public function ViewShow($ShowID)
	{
             
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                $Show['Show']=$this->shows_model->GetShowInformation($ShowID);
                $this->shows_model->IncrementVisits($ShowID);
                $this->load->view('Shows/ViewShow',$Show);
                $this->load->view('Templates/scripts');
             
	}
        
        public function Recent()
	{
             
            $this->load->view('Templates/stylesheets');
            $this->load->view('Templates/header');
            $this->load->view('Templates/sidebar');
            $Shows['Shows']=$this->shows_model->GetRecentShows();
            $this->load->view('Shows/Shows',$Shows);
            $this->load->view('Templates/scripts');
                
             
	}
        
        public function MostFamous()
	{
             
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                $Shows['Shows']=$this->shows_model->GetFamousShows();
                $this->load->view('Shows/Shows',$Shows);
                
                $this->load->view('Templates/scripts');
            
            
	}
        
        public function Search()
	{ 
                if($this->input->get('catagory'))
                {
                    $this->load->view('Templates/stylesheets');
                    $this->load->view('Templates/header');
                    $this->load->view('Templates/sidebar');
                    $Shows['Shows']=$this->shows_model->GetShowsOfCatagory($this->input->get('catagory'));
                    $this->load->view('Shows/Shows',$Shows);
                    $this->load->view('Templates/scripts');
                }
		
	}
}
