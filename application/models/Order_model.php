<?php
/**
 * Shubham Sahu
 */
class Order_model extends CI_Model
{
    
    public function __construct()
    {
    	parent::__construct();   
    	$this->load->database(); 
    }
    public function listing()
    {
    	return $this->db->get('order')->result();
    }
}