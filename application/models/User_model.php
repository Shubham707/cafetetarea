<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function save($data)
	{
		return $data=$this->db->insert('users',$data);
	}

	public function view()
	{
		 return $query = $this->db->get('users')->result();
   	}

   	
   	public function customer_form_insert($data)
   	{
   		//print_r($data); die();
   		 return $this->db->insert('users',$data);
	}
	
	public function filterdmonth($value,$data)
	{
		$this->db->where('customer_date BETWEEN "'. date('Y-m-d', strtotime($value)). '" and "'. date('Y-m-d', strtotime($data)).'"');
		return $this->db->get('users')->result();
	}
	
	/*login admin*/
	public function admin_login($user_email,$user_pass)
	{
	return	$data=$this->db->get_where('users',array('email'=> $user_email,'password'=>$user_pass,))->result();	
	
	}
	
}
