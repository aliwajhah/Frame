<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
    }
    public function control(){
    //load view 
    $this->load->view("admin/overview");    
    }
    public function belajar(){
		$this->load->view("view_belajar");
    }
}