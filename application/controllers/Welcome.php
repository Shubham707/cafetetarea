<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['plan']=$this->db->get('category_table')->result();
		$this->load->view('index',$data);
	}
}
