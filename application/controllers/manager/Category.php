<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		$data['category']=$this->db->get('category_table')->result();
		$this->load->view('manager/category/index',$data);
	}
	public function cat_delete($id)
	{
		$this->db->where('cat_id',$id);
		$this->db->delete('category_table');
		$this->session->set_flashdata('message','Category Delete Successfull.');
		redirect(base_url('manager/category'));
	}
	public function edit_cat($id)
	{
		$this->db->where('cat_id',$id);
		$data['category']=$this->db->get('category_table')->result();
		$this->load->view('manager/category/edit',$data);
	}
	public function add_cat()
	{
		$this->load->view('manager/category/add');
	}
	public function cat_update()
	{
		$id=$this->input->post('cat_id');
		$data=array(
			'Category_ID'=>$this->input->post('Category_ID'),
			'Category_Name'=>$this->input->post('Category_Name'),
		);
		$this->db->where('cat_id',$id);
		$this->db->update('category_table',$data);
		$this->session->set_flashdata('message','Category Updated Successfull.');
		redirect(base_url('manager/category'));
	}
	public function cat_save()
	{
		$data=array(
			'Category_ID'=>$this->input->post('Category_ID'),
			'Category_Name'=>$this->input->post('Category_Name'),
		);
		$this->db->insert('category_table',$data);
		$this->session->set_flashdata('message','Category Updated Successfull.');
		redirect(base_url('manager/category'));
	}







}