<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Cart extends CI_Controller 
{
	public function index()
	{	

		//print_r($_REQUEST); die();
		$txid='tx-'.rand(11111,99999);
		$data=array(
			'payment'=>$this->input->post('total'),
			'bike_cc'=>$this->input->post('bike'),
			'bike_plan'=>$this->input->post('plan'),
			'service'=>$this->input->post('service'),
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'mobile'=>$this->input->post('mobile'),
			'txid'=>$txid,
		);
		$this->db->insert('booking',$data);
		$this->session->set_flashdata('message','Booking successfully');
		redirect(base_url().'profile');
		
		/*if (!$this->cart->contents()){
			$hash_string = MERCHANT_KEY."|".$data['txnid']."|".$data['totalCost']."|"."productinfo|".$this->session->userdata('username')."|".$this->session->userdata('email')."|||||||||||".SALT;
	    $rand=substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$insert_room = array(
			'id' => $rand,
			'total' => $this->input->get_post('total'),
			'bike' => $this->input->get_post('bike'),
			'name' => $this->input->get_post('plan'),
			'username' => $this->session->userdata('username'),
			'email' => $this->session->userdata('email'),
			'mobile' => $this->session->userdata('mobile'),
			'qty'=>1,
			    //Below is the required format need to hash it and send it across payumoney page. UDF means User Define Fields.
			    //$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
	   
	        'hash'=> strtolower(hash('sha512', $hash_string)),
	        'action' => PAYU_BASE_URL . '/_payment',       
		);
		$this->cart->insert($insert_room);
		}else{
			$arr['message'] = $this->session->flashdata('message');
		}*/

		//$this->load->view('cart', $arr);
	}

	public function add()
	{
		  $hash_string = MERCHANT_KEY."|".$data['txnid']."|".$data['totalCost']."|"."productinfo|".$this->session->userdata('username')."|".$this->session->userdata('email')."|||||||||||".SALT;
	    $rand=substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$insert_room = array(
			'id' => $rand,
			'total' => $this->input->get_post('total'),
			'bike' => $this->input->get_post('bike'),
			'name' => $this->input->get_post('plan'),
			'username' => $this->session->userdata('username'),
			'email' => $this->session->userdata('email'),
			'mobile' => $this->session->userdata('mobile'),
			'qty'=>1,
			    //Below is the required format need to hash it and send it across payumoney page. UDF means User Define Fields.
			    //$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
	   
	        'hash'=> strtolower(hash('sha512', $hash_string)),
	        'action' => PAYU_BASE_URL . '/_payment',       
		);
		$this->cart->insert($insert_room);

		$this->load->view('cart', $insert_room);
	}
	
	function remove($rowid)
	{
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		$this->session->unset_userdata('voucher_code');
		$this->session->unset_userdata('voucher_discount');
		$this->session->unset_userdata('voucher_status');
				
		redirect('cart');
	}	

	function update_cart()
	{
		
		$row_ids = $this->input->get_post('row_id');
		$qty = $this->input->get_post('cart_qty');
		$price = $this->input->get_post('price');
		
		for($i=0;$i<count($row_ids);$i++){
			$data = array(
					'rowid'   => $row_ids[$i],
					'qty'     => $qty[$i],
					'price' => $qty[$i]*$price[$i]
			);
	
			$this->cart->update($data);
		}
		
		redirect('cart');
	}	
	
	
}
 