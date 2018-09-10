<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order_model');
		$this->load->library('session');
		if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		$data['order']=$this->Order_model->listing();
		$this->load->view('manager/order/index',$data);
	}
	
}
