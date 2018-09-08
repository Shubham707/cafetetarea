<?php 
/**
 * Shubham Sahu
 */
class Kitchen extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
    }
    public function index()
    {
    	$this->load->view('kitchen/index');
    }

}
