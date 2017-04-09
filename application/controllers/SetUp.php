<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SetUp extends CI_Controller {

	public function index()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/content');
                $this->load->view('Templates/scripts');
	}
}
