<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wash_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
        function gettable() 
	{
        $query = $this->db->get('loctab');
        return $query->result_array();
	}
	
	function registerUser($fbdata) 
	{
		
		if(count($fbdata)==0)
		{
		    $data=array(
			'first_name'=>$_POST["firstName"],
			'last_name'=>$_POST["lastName"],
			'password'=>$_POST["userPassword"],
			'email'=>$_POST["userEmail"],
			'phone_number'=>$_POST["phoneNumber"],
		    );
		}
		else
		{
		    $data=array(
			'first_name'=>$fbdata["name"],
		    );
		}
		
		
		
		$this->db->insert('user',$data);
		$id=$this->db->insert_id();
		$result=$this->db->get_where('user', array('id' => $id))->result_array();
		return $result[0];
	}
	function loginUser() 
	{
		$password= $_POST["userPassword"];
		$email= $_POST["userEmail"];

		$result=$this->db->get_where('user', array('email' => $email, 'password'=> $password))->result_array();

		if(count($result)>0){
			$resultAddress=$this->db->get_where('user_address', array('user_id' => $result[0]['id']))->result_array();
			//print_r($resultAddress[0]);
			//exit;
			return $data=array("message"=>"yes", "data" => $result[0],"address" => $resultAddress[0]);	
		}
		else
		{
			return $data=array("message"=>"no");	

		}
		
	}
	//USER ADDRESS
	function userAddress($userId) 
	{
		
		$data=array(
			'user_id'=>$userId,
			'street_name1'=>$_POST["street_name1"],
			'street_name2'=>$_POST["street_name2"],
			'city'=>$_POST["city"],
			
		);
		
		$this->db->insert('user_address',$data);
		$id=$this->db->insert_id();
		
		return $result=$this->db->get_where('user_address', array('user_id' => $userId))->result_array();
	}
	function getAddress($userId) 
	{
		return $result=$this->db->get_where('user_address', array('user_id' => $userId))->result_array();
	}
	//PLACEORDER 
	function placeOrder($userId) 
	{
		$cleantype = implode(",", $this->input->post('cleantype'));
		
		$data=array(
			'user_id'=>$userId,
			//'location_id'=>$_POST["pickLocation"],
			'pick_up_date'=>$_POST["collectiondate"],
			'pick_up_time'=>$_POST["pickuptime"],
			'delivery_date'=>$_POST["deliverydate"],
			'delivery_time'=>$_POST["deliverytime"],
			'delivery_notes'=>$_POST["deliveryNotes"],
			'clean_type'=>$cleantype,
			//'current_time'=>$_POST["street_name2"],
			
		);
		$this->db->insert('placeOrder',$data);
		//print_r($data);
		//exit;
		$id=$this->db->insert_id();
		return $result=$this->db->get_where('user', array('id' => $id))->result_array();
	}
	
}