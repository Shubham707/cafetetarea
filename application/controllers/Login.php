<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->database();
		$this->load->library('session');
		

	}
	
	public function index()
	{		
		 $this->load->view('login');
		
	}
	public function save()
	{
		$data = array(
			'first_name' => $this->input->post('name'), 
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'password' => md5($this->input->post('password')),
		);
		//print_r($data); die();
		$this->User_model->customer_form_insert($data);
		$this->session->set_flashdata('message', 'New User Registration Successfull');
		redirect(base_url().'login');
	}
	public function user_login()
	{
		$admin_name = $this->input->post('email');
		 $password = md5($this->input->post('password'));
		$key = $this->User_model->admin_login($admin_name,$password);
		if($key!='')
		{
				$data1 = array(
                'id' => $key[0]->id,
                'name' => $key[0]->name,
                'email' => $key[0]->email,
                'mobile' => $key[0]->mobile,
                'login_time'=>$key[0]->login_time,
                'login_in'=>true,
               );
			
				$this->session->set_userdata($data1);
				redirect(base_url().'profile');				
		}
		else{
			redirect(base_url().'login');
	
		}
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}

}
