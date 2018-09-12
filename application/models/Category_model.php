<?php
/**
 * Shubham Sahu
 */
class Category_model extends CI_Model
{
    
    public function __construct()
    {
     parent::__construct();  
     $this->load->database(); 
    }
    public function listing(){
    	return $this->db->get('category_table')->result();
    }
    public function savedata($data){
    	return $this->db->insert('category_table',$data);
    }
    public function edit($id){
    	$this->db->where('cat_id',$id);
		return $this->db->get('category_table')->result();
    }
    public function update($id,$data){
    	$this->db->where('cat_id',$id);
		return $this->db->update('category_table',$data);
    }
}