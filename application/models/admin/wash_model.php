<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wash_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function checkUser($data)
	{
	    $email = $data['userEmail'];
	    $password = $data['password'];
	    $sql = "select * from admin_users where email = '$email' and password = '$password'";
	    return $result = $this->db->query($sql)->result_array();
	}
        function gettable()
	{
		$query = $this->db->post('loctab');
		return $query->result();
	}
	public function AddLocation($location,$yn)
	{

		$data = array(
			      'location' =>$location,
			      'added_type' =>"new",
			      'active_yn' =>$yn,

			      );
		$this->db->insert('loctab',$data);
		$insert_id = $this->db->insert_id();
	 
	 return $insert_id;
	}
	public function getAll($type) {

		if($type=="all"){
		$query = $this->db->get('loctab')->result_array();
	
		}
		else{
		$query = $this->db->get_where('loctab', array('added_type' =>$type))->result_array();

		}

		return $query;
	}
	function del_locat($location)
	{
		$val = $this->db->delete('loctab', array('location' => $location));
	}
	function edit_location($location)
	{
		$sql="SELECT * FROM loctab where id = $location";
		return $this->db->query($sql, $return_object = TRUE)->result_array();
		//print_r($return);exit;
	}
	function Update_location($id,$location,$active_yn){
		$data = array(
			      'location' =>$active_yn,
			      'active_yn'=>$location,
			      'added_type'=>'admin'
			      );
		$this->db->where('id', $id);
		$this->db->update('loctab',$data);
		
	}
	//Order Page
	// function getTableDetails()
	//{
	//    
	//   $sql="SELECT * FROM placeOrder";
	//   return $this->db->query($sql, $return_object = TRUE)->result_array();
	//}
	function getAdmin()
	{
	    
	   $sql="SELECT * FROM admin_users";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getAdminUser($id)
	{
	    
	   $sql="SELECT * FROM admin_users where id=$id";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	
	function adminUser() 
	{
		
		$data=array(
			
			'name'=>$_POST["name"],
			'password'=>$_POST["password"],
			'email'=>$_POST["email"],
			'role'=>$_POST["role"],
			'phonenumber'=>$_POST["phonenumber"],
			'area'=>$_POST["area"]
			
			
		);
		//print_r($data);exit;
		$this->db->insert('admin_users',$data);
		
	}
	function getUsers($id){
	  $sql="SELECT * FROM admin_users where id=$id";
	   return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getUserAddress($id){
		$sql="SELECT * FROM user_address where user_id=$id";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
    
	 function update(){  
		$id   = $this->input->post('id');  
		$name = $this->input->post('name');  
		$password = $this->input->post('password');  
		$role=$this->input->post('role');
		$email=$this->input->post('email');
		$phonenumber=$this->input->post('phonenumber');
		 $area=$this->input->post('area');
		$data = array(  
		  'name'=>$name,  
		  'password'=>$password,  
		  'role'=>$role ,
		  'email'=>$email,
		  'phonenumber'=>$phonenumber,
		  'area'=>$area
		);
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('admin_users',$data);
	       
	      }
	function delete($id){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('admin_users');
             
        }
	function getOrders($id)
	{
		
		$sql="SELECT * from placeorder WHERE id ='$id'";
		return $this->db->query($sql, $return_object = TRUE)->result_array();
	}

	function placedOrder(){
		
		$this->db->where('status', "PLACED");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function pickUpOrder(){
		
		$this->db->where('status', "PICKUP");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function testingOrder(){
		
		$this->db->where('status', "TESTING");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function billingOrder(){
		
		$this->db->where('status', "BILLING");
		$query = $this->db->get('placeorder');
		return $query->result_array();
	}
	function getBill($id)
	{
		$this->db->where('order_id', $id);
		$query = $this->db->get('billing');
		return $query->result_array();
	}
	function testingAnOrder($id){
		
		$where=array(
			     "id"=>$id,
			     "status"=>'TESTING'			     
			     );
		$this->db->where($where);
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	
	function washInProgressOrder(){
		
		$this->db->where('status', "WINPROGRESS");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function washCompletedOrder(){
		
		$this->db->where('status', "WCOMPLETED");
		$query = $this->db->get('placeorder');
		return $query->result();
	}

	function pressFoldOrder(){
		
		$this->db->where('status', "PRESSFOLD");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function deliveryOrder(){
		
		$this->db->where('status', "DELIVERY");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function processedOrder(){
		
		$this->db->where('status', "PROCESSED");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function customerPendingOrder(){
		
		$this->db->where('status', "CUSTOMERPENDING");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function closedOrder()
	{
		$this->db->where('status', "CLOSED");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	function cancelledOrder()
	{
		$this->db->where('status', "CANCELLED");
		$query = $this->db->get('placeorder');
		return $query->result();
	}
	    
	function updateOrderStatus()
	{
		
		$data = array(  
		  'status'=>$this->input->post('status'),
		  'amount'=>$this->input->post('payAmount'),  
		  'assigned_to'=>$this->input->post('employeeId'),  
		);
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('placeorder',$data);
		if($_POST['messgeStatus']=='PickUp' || $_POST['messgeStatus']=='Deliver')
		{
			$OrderDetails= $this->db->get_where('placeorder', array('id' => $_POST['id']));
			$OrderDetails = $OrderDetails->result_array();
			$useraddress  = $this->db->get_where('user_address', array('id' => $OrderDetails[0]['id']));
			$useraddress  = $useraddress->result_array();
			$userDetails1  = $this->db->get_where('user', array('id' => $OrderDetails[0]['user_id']));
			$userDetails  = $userDetails1->result_array();
			$employeDetails  = $this->db->get_where('admin_users', array('id' => $_POST['employeeId']));
			$employeDetails  = $employeDetails->result_array();
			//print_r($userDetails);exit;
			$userName     = $userDetails[0]['first_name'];
			$phone_number = $userDetails[0]['phone_number'];
			$uid	      = '7418225915';
			$pwd	      = 'lonlyboy';
			$random       = (rand(1000,9999));
			//if($_POST['messgeStatus']=='Deliver'){
			//	$sms="Hi ".$userDetails[0]['first_name']."\nYour Order Placed Successfully! \nWe Can Pick Up Soon ";
			//}
			//else if($_POST['messgeStatus']=='PickUp'){
			//	$smsuser="Hi ".$userDetails[0]['first_name']."\nYour Order Ready To Deliver! \nWe Will Deliver Soon ";
			//}
			//$smsVerify=$this->sendWay2SMS($uid,$pwd,$phone_number,$sms);
			//if($smsVerify=='success'){
				$employenumber=$employeDetails[0]['phonenumber'];
				$pickup=$OrderDetails[0]['pick_up_date'];
				$delivery=$OrderDetails[0]['delivery_date'];
				$status=$OrderDetails[0]['status'];
				$clean_type=$OrderDetails[0]['clean_type'];
				$total_amount=$OrderDetails[0]['total_amount'];
				if($_POST['messgeStatus']=='PickUp')
				{
					$sms="Hi ".$employeDetails[0]['name']."\nThis Is Your PickUp Order Details\n User Name :" .$userDetails[0]['first_name']."\n User Contact No :" .$userDetails[0]['phone_number']."\n Status :" .$status."\n PickUp Date :" .$pickup."\n Clean Type :" .$clean_type."\nTotal Price :".$total_amount."Thank You";
				}
				else if($_POST['messgeStatus']=='Deliver'){
					
					$sms="Hi ".$employeDetails[0]['name']."\nThis Is Your Deliver Order Details\n User Name :" .$userDetails[0]['first_name']."\n User Contact No :" .$userDetails[0]['phone_number']."\n Status :" .$status."\n Delivery Date :" .$delivery."\n Clean Type :" .$clean_type."\nTotal Price :".$total_amount."Thank You";
					
				}
				$smsVerify=$this->sendWay2SMS($uid,$pwd,$employenumber,$sms);
				//print_r($smsVerify);exit;i
			//}
			//else
			//{
			//	return 'failed';
			//}
			//$OrderDetails['data']=$OrderDetails;
			//$mailid=$userDetails[0]['email'];
			//$body = $this->load->view('admin/placeorderTemplete',$OrderDetails,TRUE);
			//$subject="Your Order Place and Deliver";
			//$this->emailsending($mailid,$body,$subject);
			//				
			//$this->email->to('washboxx@gmail.com');
			//$body = $this->load->view('admin/bsregistaionTemplete',$OrderDetails,TRUE);
			//$subject="Mail from PlaceOrder in Admin side";
			//$this->emailsending($body,$subject);
		}
		
		
		
		
	       
	}
	function sendWay2SMS($uid, $pwd, $phone, $msg)
	{
	  $curl = curl_init();
	  $timeout = 30;
	  $result = array();
	  $uid = urlencode($uid);
	  $pwd = urlencode($pwd);
	  //$autobalancer = rand(1, 8);
	  $autobalancer = 23;
	  // Setup for login
	  curl_setopt($curl, CURLOPT_URL, "http://site".$autobalancer.".way2sms.com/Login1.action");
	  curl_setopt($curl, CURLOPT_POST, 1);
	  curl_setopt($curl, CURLOPT_POSTFIELDS, "username=".$uid."&password=".$pwd."&button=Login");
	  curl_setopt($curl, CURLOPT_COOKIESESSION, 1);
	  curl_setopt($curl, CURLOPT_COOKIEFILE, "cookie_way2sms");
	  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	  curl_setopt($curl, CURLOPT_MAXREDIRS, 20);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5");
	  curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
	  curl_setopt($curl, CURLOPT_REFERER, "http://site".$autobalancer.".way2sms.com/");
	  $text = curl_exec($curl);
	  if (curl_errno($curl))
	    return "access error : ". curl_error($curl);
	  // Check for proper login
	  $pos = stripos(curl_getinfo($curl, CURLINFO_EFFECTIVE_URL), "ebrdg.action");
	  if ($pos === "FALSE" || $pos == 0 || $pos == "")
	    return "invalid login";
	  // Check the message
	  if (trim($msg) == "" || strlen($msg) == 0)
	    return "invalid message";
	  // Take only the first 140 characters of the message
	  $msg = urlencode(substr($msg, 0, 140));
	  // Store the numbers from the string to an array
	  $pharr = explode(",", $phone);
	  // Set the home page from where we can send message
	  $refurl = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
	  $newurl = str_replace("ebrdg.action?id=", "main.action?section=s&Token=", $refurl);
	  curl_setopt($curl, CURLOPT_URL, $newurl);
	  // Extract the token from the URL
	  $jstoken = substr($newurl, 50, -41);
	  //Go to the homepage
	  $text = curl_exec($curl);
	  // Send SMS to each number
	  foreach ($pharr as $p)
	  {
		// Check the mobile number
	    if (strlen($p) != 10 || !is_numeric($p) || strpos($p, ".") != false)
	    {
	      $result[] = array('phone' => $p, 'msg' => urldecode($msg), 'result' => "invalid number");
	      continue;
	    }
	    $p = urlencode($p);
	    // Setup to send SMS
	    curl_setopt($curl, CURLOPT_URL, 'http://site'.$autobalancer.'.way2sms.com/smstoss.action');
	    curl_setopt($curl, CURLOPT_REFERER, curl_getinfo($curl, CURLINFO_EFFECTIVE_URL));
	    curl_setopt($curl, CURLOPT_POST, 1);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, "ssaction=ss&Token=".$jstoken."&mobile=".$p."&message=".$msg."&button=Login");
	    $contents = curl_exec($curl);
	    //Check Message Status
	    $pos = strpos($contents, 'Message has been submitted successfully');
	    $res = ($pos !== false) ? true : false;
	    $result[] = array('phone' => $p, 'msg' => urldecode($msg), 'result' => $res);
	  }
	  // Logout
	  curl_setopt($curl, CURLOPT_URL, "http://site".$autobalancer.".way2sms.com/LogOut");
	  curl_setopt($curl, CURLOPT_REFERER, $refurl);
	  $text = curl_exec($curl);
	  curl_close($curl);
	  return $result='success';
	}
	function moveToWash($id)
	{  
		$data = array(  
		  'status'=>'WINPROGRESS'
		);
		$this->db->where('id', $id);
		$this->db->update('placeorder',$data);
	       
	}
	function getCustomer($id)
	{
		$sql="SELECT * FROM user where id=$id";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function customers()
	{
		$query = $this->db->get('user');
		$result= $query->result_array();
		$limit=count($result);

		if($limit>0){
			for ($x = 0; $x <$limit; $x++)
			{
				$placed=0;
				$completed=0;
				$cancelled=0;
				$payment=0;
				$id=$result[$x]["id"];
				$sql="SELECT * FROM placeorder where user_id='$id' AND status='PLACED'";
				$result_placed=$this->db->query($sql, $return_object = TRUE)->result_array();
				$placed=count($result_placed);
				$sql="SELECT * FROM placeorder where user_id='$id' AND  status='CLOSED'";
				$result_completed=$this->db->query($sql, $return_object = TRUE)->result_array();
				$completed=count($result_completed);
				$sql="SELECT * FROM placeorder where user_id='$id' AND  status='CANCELLED'";
				$result_cancelled=$this->db->query($sql, $return_object = TRUE)->result_array();
				$cancelled=count($result_cancelled);
				$sql="SELECT SUM( amount ) AS amount FROM placeorder WHERE user_id ='$id'";
				$result_amount=$this->db->query($sql, $return_object = TRUE)->result_array();
				$payment=$result_amount[0]["amount"];
				$result[$x]["placed"]=$placed;
				$result[$x]["completed"]=$completed;
				$result[$x]["cancelled"]=$cancelled;
				if($payment>0)
				{
				$result[$x]["payment"]=$payment;
				}
				else
				{
				$result[$x]["payment"]=0;
				}
			} 
		}
		return $result;
	}
	function addCategory() 
	{
		
		$data=array(
			'category'=>$_POST["name"],
		);
		
		$this->db->insert('category',$data);
		
	}
	 function updateCategory(){  
		$id   = $this->input->post('id');  
		$name = $this->input->post('name');  

		$data = array(  
		  'category'=>$name,  
		);
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('category',$data);
	       
	      }
	      
	function deleteCategory($id){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('category');
             
        }
	function getCategorySingle($id){
		$sql="SELECT * FROM category where id=$id";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getCategory()
	{
	    
	   $sql="SELECT * FROM category";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	//Item
	function addItem() 
	{
		$name = $this->input->post('name');  
		$wash = $this->input->post('wash');  
		$iron = $this->input->post('iron');  
		$dry = $this->input->post('dry');  
		$category_id = $this->input->post('category_id');
		$data=array(
		  'item_name'=>$name,
		  'item_price_wash'=>$wash,  
		  'item_price_iron'=>$iron,  
		  'item_price_dry'=>$dry,  
		  'category_id'=>$category_id,  
		);
		
		$this->db->insert('item',$data);
		
	}
	 function updateItem(){  
		$id   = $this->input->post('id');  
		$name = $this->input->post('name');  
		$wash = $this->input->post('wash');  
		$iron = $this->input->post('iron');  
		$dry = $this->input->post('dry');  
		$category_id = $this->input->post('category_id');
		$data = array(  
		  'item_name'=>$name,
		  'item_price_wash'=>$wash,  
		  'item_price_iron'=>$iron,  
		  'item_price_dry'=>$dry,  
		  'category_id'=>$category_id,  
		);
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('item',$data);
	       
	}
	      
	function deleteItem($id){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('item');
             
        }
	function getItemSingle($id){
		$sql="SELECT * FROM item where id=$id";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getItems($id){
		$sql="SELECT * FROM item where category_id=$id";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getItem()
	{
	    
	   $sql="SELECT item.id, category_id , item_name , item_price_iron , item_price_wash , item_price_dry , category FROM item LEFT JOIN category ON item.category_id = category.id";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getPartners()
	{
		$sql="SELECT * from partner";
		return $this->db->query($sql, $return_object = TRUE)->result_array();
	}

	function addBilling()
	{
		//print_r($_POST);
		//exit;
		$orderId  = $this->input->post('orderId');  
		$originalAmount = $this->input->post('originalAmount');  
		$finalAmount = $this->input->post('finalAmount');  
		$discountedAmount=$this->input->post('discountedAmount');
		$servicetaxAmount=$this->input->post('servicetaxAmount');
		$pickupAmount=$this->input->post('pickupAmount');
		$dataBilling=$this->input->post('orderData');
		
		$data = array(  
		  'amount'=>$originalAmount,  
		  'total_amount'=>$finalAmount,
		  'discount'=>$discountedAmount,
		  'pickup'=>$pickupAmount,
		  'servicetax'=>$servicetaxAmount,
		  'status'=>'BILLING'
		);
		
		$this->db->where('id', $orderId);
		$this->db->update('placeorder',$data);
		
		foreach ($dataBilling as $row)
		{
			$bill = array(  
			  'order_id'=>$row["order"],  
			  'category_id'=>$row["category"],
			  'item_id'=>$row["item"],  
			  'service'=>$row["service"],
			  'price'=>$row["price"],  
			  'quantity'=>$row["qty"],
			  'amount'=>$row["amount"]
			);
			
			$this->db->insert('billing',$bill);
		}

	}
	function getcoupon()
	{
	    
	   $sql="SELECT * FROM coupen";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function couponadd() 
	{
		
		$data=array(
			'offer_code'=>$_POST["offer_code"],
			'offer'=>$_POST["offer"],
			'valid_upto'=>$_POST["validDate"],
		);
		$this->db->insert('coupen',$data);
		
		
	}
	 function updatecoupon(){
		$id   = $this->input->post('id');  
		$name = $this->input->post('name');  
		$password = $this->input->post('password');
		
		$data = array(  
		  'offer'=>$name,  
		  'valid_upto'=>$password,
		  'offer_code'=>$_POST["offer_code"],
		);
		
		$this->db->where('coupen_id', $this->input->post('id'));
		$this->db->update('coupen',$data);
	       
	      }
	function deletecoupon($id){
            $id =  $this->input->POST('id');
            $this->db->where('coupen_id', $id);
            $this->db->delete('coupen');
             
        }
	function getcoupons($id){
	  $sql="SELECT * FROM coupen where coupen_id=$id";
	   return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	
	
	
	
	
	//////////////////////////////////////////////////////////////////////price
	function getpricelist()
	{
	   $sql="SELECT * FROM price";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function addprice() 
	{
		$price = $this->input->post('price');  
		$start = $this->input->post('start');  
		$kg = $this->input->post('kg');  
		$data=array(
		  'Cost_price'=>$price,
		  'Cost_start'=>$start,  
		  'kg'=>$kg,  
			    );
		$this->db->insert('price',$data);
		
	}
	function updateprice($id){  
		$price   = $this->input->post('price');  
		$start = $this->input->post('start');  
		$kg = $this->input->post('kg');
		$id=$this->input->post('id');
		$data = array(  
		  'Cost_price'=>$price,
		  'Cost_start'=>$start,  
		  'kg'=>$kg,  
		    
		);
		$this->db->where('id',$id );
		$this->db->update('price',$data);
	       
	}
	   
	function deleteprice($id){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('price');
             
        }
	function getpriceSingle($id){
		$sql="SELECT * FROM price where id ='$id'";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function getprice()
	{
	    
	   $sql="SELECT * FROM price";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	///////////////////////////////////////////////////end///////////////
	/////////////////////////////////////////////////////FAQ//////////////////
	function getfaqlist($id)
	{
	   $sql="SELECT * from faq_subtitle WHERE title_id='$id'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getfaq()
	{
	   $sql="SELECT * FROM faq_title";
	     
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function addfaq()
	
	{
		
		$faqt = $this->input->post('faqt');
		$data1=array(
		  'faq_title'=>$faqt
		  );
		$this->db->insert('faq_title',$data1);
		$insert_id = $this->db->insert_id();
		//print_r($insert_id);exit;
		
		$faqd = $this->input->post('faqd');
		$faqs = $this->input->post('faqs');
		$faqdd = $this->input->post('faqdd'); 

		$data=array(
		  'title_id'=>$insert_id,
		  'faq_Subtitle'=>$faqs,
		  'faq_description'=>$faqd,
		   'faq_description2'=>$faqdd
		);
		
		$this->db->insert('faq_subtitle',$data);
	
	}
	function updatefaq($id){  
		$faqt= $this->input->post('faqt');
		$faqs= $this->input->post('faqs'); 
		$faqd = $this->input->post('faqd');
		$faqdd = $this->input->post('faqdd');  
				
		$id=$this->input->post('id');
		
		$data = array(  
		  'faq_title'=>$faqt,
		    'faq_Subtitle'=>$faqs,
		   'faq_description'=>$faqd,
		   'faq_description2'=>$faqdd,  
		    
		    
		);
		
		$this->db->where('id',$id );
		$this->db->update('faq_subtitle',$data);
		    
	}
	function deletefaq($id){
            $id =  $this->input->POST('id');
            $this->db->where('id',$id);
            $this->db->delete('faq_subtitle');
	
        }
	function getfaqSingle($id){
		$sql="SELECT * FROM faq_subtitle where id ='$id'";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	//////////////////////////////////////////////////////////////FAQENDS/////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////NEWS//////////////////////////////////////////////////////
	
	function getnewlist()
	{
	   $sql="SELECT * FROM news";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getnew()
	{
	   $sql="SELECT * FROM news";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function addnew() 
	{
		$newtype = $this->input->post('newsType');  
		$image = $this->input->post('newsImage');
		$imagein = $this->input->post('imageInside');
		$newdec = $this->input->post('newsDescription');
		$condec = $this->input->post('contentDesc');
		$subtitle = $this->input->post('subTitle');
		
		$data=array(
		  'newsType'=>$newtype,
		  'newsImage'=>$image,
		  'imageInside'=>$imagein,
		  'newsDescription'=>$newdec,
		  'contentDesc'=>$condec,
		  'subTitle'=>$subtitle ,
		   
		 
		);
		
		$this->db->insert('news',$data);
		
	}
	function updatenew($id){  
		$newtype = $this->input->post('newsType');  
		$image = $this->input->post('newsImage');
		$imagein = $this->input->post('imageInside');
		$newdec = $this->input->post('newsDescription');
		$condec = $this->input->post('contentDesc');
		$subtitle = $this->input->post('subTitle');
		$id=$this->input->post('id');
		
		
		$data = array(  
		  'newsType'=>$newtype,
		  'newsImage'=>$image,
		  'imageInside'=>$imagein,
		  'newsDescription'=>$newdec,
		  'contentDesc'=>$condec,
		  'subTitle'=>$subtitle ,  
		    
		    
		);
		
		$this->db->where('id',$id );
		
		$this->db->update('news',$data);
	       
	}
	      
	function deletenew($id){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('news');
             
        }
	function getnewSingle($id){
		$sql="SELECT * FROM news where id ='$id'";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	////////////////////////////////////////////////////////////Banner/////////////////////////////////////////
	function getbannerlist()
	{
	   $sql="SELECT * FROM banner";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getbanner()
	{
	   $sql="SELECT * FROM banner";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function addbanner() 
	{
		$bannertext = $this->input->post('bannertext');
		$bannertext2 = $this->input->post('bannertext2');  
		$bannerbtn = $this->input->post('bannerbtn');
		$bannerfont = $this->input->post('bannerfont');
		$bannercolor = $this->input->post('bannercolor');  
		$bannersize = $this->input->post('bannersize');
		  
		
		$data=array(
		  'banner_text'=>$bannertext,
		  'banner_text2'=>$bannertext2,
		  'banner_btn'=>$bannerbtn,
		  'TextFont'=>$bannerfont,
		  'Color'=>$bannercolor,
		  'size'=>$bannersize,
		 
		);
		
		$this->db->insert('banner',$data);
		
	}
	function updatebanner($id){  
		$bannertext   = $this->input->post('bannertext');
		$bannertext2  = $this->input->post('bannertext2'); 
		$bannerbtn = $this->input->post('bannerbtn');
		$bannerfont = $this->input->post('bannerfont');
		$bannercolor = $this->input->post('bannercolor');  
		$bannersize = $this->input->post('bannersize');
		
		$id=$this->input->post('id');
		
		
		$data = array(  
		  'banner_text'=>$bannertext,
		  'banner_text2'=>$bannertext2,
		  'banner_btn'=>$bannerbtn,
		  'TextFont'=>$bannerfont,
		  'Color'=>$bannercolor,
		  'size'=>$bannersize,
		    
		    
		);
		
		$this->db->where('id',$id );
		
		$this->db->update('banner',$data);
	       
	}
	      
	function deletebanner($id){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('banner');
             
        }
	function getbannerSingle($id){
		$sql="SELECT * FROM banner where id ='$id'";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	////////////////////////////////////////////////////////////TESTMONIALS/////////////////////////////////////////
	function gettestimonlist()
	{
	   $sql="SELECT * FROM testimonial";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function getTestimonial()
	{
	   $sql="SELECT * FROM testimonial";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function Testimonialadd() 
	{
		$titile = $this->input->post('title');
		$notes = $this->input->post('notes');  
		$image = $this->input->post('testimage');  
		  
		
		$data=array(
		  'title'=>$titile,
		  'notes'=>$notes,
		  'testimage'=>$image,  
		   
		 
		);
		
		$this->db->insert('testimonial',$data);
		
	}
	function updateTestimonial($id){  
		$titile   = $this->input->post('title');
		$notes  = $this->input->post('notes'); 
		$image = $this->input->post('testimage');  
		$id=$this->input->post('id');
		
		
		$data = array(  
		  'title'=>$titile,
		  'notes'=>$notes,
		  'testimage'=>$image,  
		    
		    
		);
		
		$this->db->where('id',$id );
		
		$this->db->update('testimonial',$data);
	       
	}
	      
	function deleteTestimonial($id){
            $id = $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('testimonial');
             
        }
	function getTestimonialSingle($id){
		$sql="SELECT * FROM testimonial where id ='$id'";
		return $result=$this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function emailsending($mailid,$body,$subject)
	{
		$this->load->library('email');
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'priyadharshin3091@gmail.com';
		$config['smtp_pass']    = 'priya2294';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not      
		$this->email->initialize($config);
		$this->email->from('priyadharshin3091@gmail.com', 'Wash Box');
		$this->email->to($mailid); 
		$this->email->subject($subject);
		$this->email->message($body);  
		$this->email->send();
		//echo $this->email->print_debugger();
		echo"success";
	}
}