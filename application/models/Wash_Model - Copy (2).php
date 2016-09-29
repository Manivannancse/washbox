<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wash_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
        function gettable() 
	{
	$query = $this->db->get_where('loctab', array('active_yn' => 'Y'));

        return $query->result_array();

	}
	
	function getUserData($id) 
	{
		$query = $this->db->get_where('user', array('id' => $id));
		$result= $query->result_array();
		return $result[0];
	}
	
	function registerUser($data,$provider) 
	{
		
		//print_r($data);exit;
		//LOGIN AS A FACEBOOK USER
		if($provider=='facebook')
		{
			$data=array(
				'first_name'=>$data["first_name"],
				'last_name'=>$data["last_name"],
				'email'=>$data["email"],
				'registered_type'=>'FB',
				'Phone_verified'=>'No'
			);
			$this->db->insert('user',$data);
			$id=$this->db->insert_id();
			$result=$this->db->get_where('user', array('id' => $id))->result_array();
		}
		//LOGIN AS A GOOGLE PLUS USER
		elseif($provider=='google')
		{
			$data=array(
			'first_name'=>$data["first_name"],
			'last_name'=>$data["last_name"],
			'email'=>$data["email"],
			'registered_type'=>'GOOGLE',
			'Phone_verified'=>'No'
			);
			$this->db->insert('user',$data);
			$id=$this->db->insert_id();
			$result=$this->db->get_where('user', array('id' => $id))->result_array();
		}
		//LOGIN AS A DIRECT USER
		else
		{
			$data = json_decode(file_get_contents('php://input'), true);
			$data=array(
			'first_name'=>$data["firstName"],
			'last_name'=>$data["lastName"],
			'password'=>$data["userPassword"],
			'email'=>$data["userEmail"],
			'phone_number'=>$data["userPhone"],
			//'sms_code'=> $random,
			'registered_type'=>'DIRECT',
			'Phone_verified'=>'No'
			);
			$this->db->insert('user',$data);
			$id=$this->db->insert_id();
			$result=$this->db->get_where('user', array('id' => $id))->result_array();			
		}
		
		//EMAIL CONCEPT
		$data['data']=$data;
		$mailid=$data['email'];
		$body = $this->load->view('emailregisterTemplate',$data,TRUE);
		$subject="Welcome To washBox";
		$this->emailsending($mailid,$body,$subject);
		return $result[0];
	
		//$data["data"]=$result[0];
		//$config = array(
		//'protocol' => 'smtp',
		//'smtp_host' => 'ssl://smtp.googlemail.com',
		//'smtp_port' => 465,
		//'smtp_user' => 'priyadharshin3091@gmail.com',
		//'smtp_pass' => 'priya2294', 
		//'mailtype' => 'html',
		//'charset' => 'iso-8859-1',
		//'wordwrap' => TRUE
		//);
		//$this->load->library('Email',$config);
		//$this->email->set_newline("\r\n");
		//$this->email->from('priyadharshin3091@gmail.com'); // change it to yours
		//$this->email->to($result[0]["email"]);// change it to yours
		//$this->email->subject('Welcome To washBox');
		//$body = $this->load->view('emailregisterTemplate.php',$data,TRUE);
		//$this->email->message($body);
		//$this->email->send();
		//
		//return $result[0];
		
	}
	
	function smsResend()
	{
		$sessionData  = $this->session->userdata('user');
		$id	      = $sessionData['id'];
		$query        = $this->db->get_where('user', array('id' => $id));
		$fetchResult  = $query->result_array();
		$userName     = $fetchResult[0]['first_name'];
		$phone_number = $fetchResult[0]['phone_number'];
		$uid	      = '7418225915';
		$pwd	      = 'lonlyboy';
		$random       = (rand(1000,9999));
		
		$sms="Hi ".$userName."\nWelcome to Wasbox! \nYour verification code is ".$random;
		$smsVerify=$this->Wash_Model->sendWay2SMS($uid,$pwd,$phone_number,$sms);
		if($smsVerify=='success'){
			$sql1="UPDATE user SET sms_code='$random' WHERE id='$id'";
			return $smsResult=$this->db->query($sql1, $return_object = TRUE);
		}
		else
		{
			return 'failed';
		}
	}
	
	function smsVerification()
	{
		$data = json_decode(file_get_contents('php://input'), true);
		$otppassword  = $data["otppassword"];
		$sessionData  = $this->session->userdata('user');
		$id	      = $sessionData['id'];
		//$query = $this->db->get_where('user', array('id' => $id));
		//$fetchResult= $query->result_array();
		//$phone_number=$fetchResult[0]['phone_number'];
		$sql="SELECT * FROM  user WHERE sms_code='$otppassword'  AND id='$id'";
		$result=$this->db->query($sql, $return_object = TRUE)->result_array();
		//echo "<pre>";
		//print_r($sql);
		//print_r($result);
		//exit;
		if(count($result)>0){
			$sql1="UPDATE user SET Phone_verified='Yes' WHERE id='$id'";
			$smsResult=$this->db->query($sql1, $return_object = TRUE);
			return $verifyResult=true;
		}else
		{
			return $verifyResult=false;
		}
		
		
	}
        function alreadyExits($data ) 
	{
		$result=$this->db->get_where('user', array('email' => $data["email"]))->result_array();
		if(count($result)>0)
		{
			return $data=array("message"=>"yes", "data" => $result[0]);
		}
		else
		{
			return $data=array("message"=>"no", "data" => "");
		}
	}
	function coupon()
	{
		$date=date("Y-m-d");		
		$sql_max="SELECT MIN( valid_upto )as date FROM coupen where valid_upto >='$date' ";
		
		$result_max= $this->db->query($sql_max, $return_object = TRUE)->result_array();
		$date=$result_max[0]['date'];
		$sql="SELECT * FROM coupen where valid_upto ='$date'";
		$result= $this->db->query($sql, $return_object = TRUE)->result_array();
		return $result[0];
	}
	function loginUser() 
	{
		$data = json_decode(file_get_contents('php://input'), true);
		$password= $data["userPassword"];
		$email= $data["userEmail"];
		$result=$this->db->get_where('user', array('email' => $email, 'password'=> $password))->result_array();
		if($result[0]['registered_type']=="ADMIN"){
			return $data=array("message"=>"ADMIN","userDetails"=>$result);
		}
		else if(count($result)>0)
		{
			$resultAddress=$this->db->get_where('user_address', array('user_id' => $result[0]['id']))->result_array();
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
		$data = json_decode(file_get_contents('php://input'), true);

		$id=$data['id'];
		$query = $this->db->get_where('user_address', array('user_id' => $userId, 'id'=> $id));
		$fetchResult= $query->result_array();
		if(count($fetchResult)>0){
			$data=array(
			'user_id'=>$userId,
			'street_name1'=>$data['street_name1'],
			//'street_name2'=>$data['street_name2'],
			'city'=>$data["city"],
			'address_type'=>$data["address_type"],
			'area'=>$data["area"],
			'landmark'=>null,
			);
			$this->db->update('user_address',$data,array('user_id' => $userId, 'id'=> $id));		
			return $result=$this->db->get_where('user_address', array('user_id' => $userId))->result_array();
		}
		else
		{
			$data=array(
				'user_id'=>$userId,
				'street_name1'=>$data["street_name1"],
				//'street_name2'=>$data["street_name2"],
				'city'=>$data["city"],
				'address_type'=>$data["address_type"],
				'area'=>$data["area"],
				'landmark'=>$data["landmark"],
			);			
			$this->db->insert('user_address',$data);
			$id=$this->db->insert_id();			
			return $result=$this->db->get_where('user_address', array('user_id' => $userId))->result_array();
		}
	}
	function addressDelete($userId)
	{
		$data = json_decode(file_get_contents('php://input'), true);
		$id=$data['id'];
		return $result=$this->db->delete('user_address', array('user_id' => $userId, 'id'=> $id));
	}
	function userAddressUpdate($userId) 
	{
		$data=array(
			'user_id'=>$userId,
			'street_name1'=>$this->input->post('street_name1'),
			//'street_name2'=>$this->input->post('street_name2'),
			'city'=>$this->input->post('city'),
			'address_type'=>$this->input->post('address_type'),
			'area'=>$this->input->post('area'),
			'landmark'=>$this->input->post('landmark'),
		);
		$this->db->where('user_id', $userId);
		$this->db->update('user_address',$data);		
		return $result=$this->db->get_where('user_address', array('user_id' => $userId))->result_array();
	}
	function profileUpdate($userId)
	{
		$data = json_decode(file_get_contents('php://input'), true);
		$fetch=$this->getUserData($userId);
		//echo $userId;
		//echo "<pre>";
		//print_r($data);
		//exit;

		if($data['phone_number']!= $fetch['phone_number']){
			$sql1="UPDATE user SET Phone_verified='No' WHERE id='$userId'";
			$smsResult=$this->db->query($sql1, $return_object = TRUE);			
		}
		$data=array(
			'id'=>$userId,
			'first_name'=>$data['first_name'],
			'last_name'=>$data['last_name'],
			'email'=>$data['email'],
			'phone_number'=>$data['phone_number'],
		);
		$this->db->where('id', $userId);
		$this->db->update('user',$data);		
		$result=$this->db->get_where('user', array('id' => $userId))->result_array();
		if(count($result)>0)
		{
			$session=$this->session->set_userdata("user",$result[0]);
			return $Result=array("message"=>true, "data" => $result );
			
		}else 
		{
			return $Result=array("message"=>false);
		}
	}
	function getAddress($userId) 
	{
		return $result=$this->db->get_where('user_address', array('user_id' => $userId))->result_array();
	}
	function getSpecificAddress($userId) 
	{
		$data = json_decode(file_get_contents('php://input'), true);
		$id = $data['id'];
		return $result=$this->db->get_where('user_address', array('user_id' => $userId, 'id'=> $id))->result_array();
	}
	//PLACEORDER 
	function placeOrder($userId) 
	{
		$data = json_decode(file_get_contents('php://input'), true);

		if($data['couponCode']!=""){
			$coupon_yn="YES";
		}
		$values = array_map('array_pop', $data["cleantype"]);
		$cleantype = implode(',', $values);

		$data=array(
		'user_id'=>$userId,
		'location_id'=>$data["address"],
		'pick_up_date'=>$data["collectiondate"],
		'pick_up_time'=>$data["pickuptime"],
		'delivery_date'=>$data["deliverydate"],
		'delivery_time'=>$data["deliverytime"],
		'delivery_notes'=>$data["deliveryNotes"],
		
		'status' => "PLACED",
		'token' =>$coupon_yn,
		'token_id'=>$data["couponCode"],
		'clean_type'=>$cleantype
		//'current_time'=>$_POST["street_name2"],
		);
		$this->db->insert('placeorder',$data);
		$order_id=$this->db->insert_id();
		$ChangeDate = $row-> pick_up_date;
		$NewFormat = new DateTime($ChangeDate);
		$DateFomt = $NewFormat->format('Ymd');
		
		//reset order count
		date_default_timezone_set('Asia/Kolkata');
		$FNrAN = date("a");
		$Ctime = date("g");
		$userdata=$this->db->get_where('placeorder', array('id' => $order_id-1))->result_array();
		if($userdata['order_id']!=""){
			if($Ctime=='12' && $FNrAN=='am'){
				$Fomtid=$DateFomt."-1";	
			}else{
				$preorderId= explode("-", $userdata['order_id']);
				$Fomtid=$DateFomt."-".$preorderId+1;	
			}
		}else{
			$Fomtid=$DateFomt."-".$order_id;	
		}
		
		$sql="UPDATE placeorder SET order_id='$Fomtid' WHERE id='$order_id'";
		$this->db->query($sql, $return_object = TRUE);
		return $this->db->get_where('placeorder', array('id' => $order_id))->result_array();
	}
	function getOrder($id){
		$order=$this->db->get_where('placeorder', array('id' => $id))->result_array();
		$location=$this->db->get_where('user_address', array('id' => $order[0]['location_id']))->result_array();
		
	  return $result=array(
			"order" =>$order,
			"address" =>$location,
			);

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

	
	//Pricing Page Functionalities

	function getCategoryTable()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
	
        function getItemTable($tabValues)
	{
		$select= "SELECT * FROM item WHERE category_id = '$tabValues'";
		return $this->db->query($select)->result_array();
		
	}
	
	public function businessServicesubmit()
	{
	    $data=array(
		    'name'=>$_POST["your-name"],
		    'email'=>$_POST["your-email"],
		    'telephone'=>$_POST["your-telephone"],
		    'nature'=>$_POST["your-enquiry"],
		    'message'=>$_POST["your-message"],
		    );
	    $result=$this->db->insert("partner",$data);
	    if($result==1){
		$data['data']=$data;
		$mailid=$data['email'];
		$body = $this->load->view('businessServicesregisterTemplate',$data,TRUE);
		$subject="Washbox BusinessService Team ContactYou";
		$this->emailsending($mailid,$body,$subject);
						
		$this->email->to('washboxx@gmail.com');
		$body = $this->load->view('bsregistaionTemplete',$data,TRUE);
		$subject="Mail from BusinessService Page";
		$this->emailsending($body,$subject);
		redirect('WashBox/businessServices');
	}
	}
	function qualityguarantee()
	{
		$config['upload_path'] ='application/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$r=$this->upload->do_upload('image1');
		$data =  $this->upload->data();
		$path1=$data['file_name'];
		
		$config['upload_path'] ='application/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$r=$this->upload->do_upload('image2');
		$data =  $this->upload->data();
		$path2=$data['file_name'];
		
		$config['upload_path'] ='application/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$r=$this->upload->do_upload('image3');
		$data =  $this->upload->data();
		$path3=$data['file_name'];
		
		$config['upload_path'] ='application/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$r=$this->upload->do_upload('image4');
		$data =  $this->upload->data();
		$path4=$data['file_name'];
		
		$data=array(
			'name'=>$_POST["name"],
			'email'=>$_POST["your-email"],
			'ordernumber'=>$_POST["order-number"],
			'message'=>$_POST["your-message"],
			'image1'=>$path1,
			'image2'=>$path2,
			'image3'=>$path3,
			'image4'=>$path4,
			);
		$this->db->insert('quality',$data);
	} 
	function placeForm(){
	$data = json_decode(file_get_contents('php://input'), true);
	$data=array(
	   'location'=>$data['cityName'],
	   'Email'=>$data['Email']
	   );
	$this->db->insert("loctab",$data);
       }
       function checkorder(){
	$data = json_decode(file_get_contents('php://input'), true);
	$pickup=$data["pickup"];
	$pickupdate=$data["pickupdate"];
	$select= "SELECT * FROM placeorder WHERE pick_up_time = '$pickup' AND pick_up_date='$pickupdate'";
	return $this->db->query($select)->result_array();
       }
       
       	function cancelAnOrder($id){
		
		$data=array(
		"status"=>'CANCELLED'			     
		);
		$where=array(
		"id"=>$id			     
		);
		$this->db->where($where);
		$this->db->update('placeorder',$data);
	}
	function pickTiming($date){
		
		$mydate=date('d-m-Y');
		$mydate=explode("-",$mydate);
		$mydate[1]=ltrim($mydate[1], '0');
		$mydate=implode("-",$mydate);
		date_default_timezone_set('Asia/Kolkata');
		$possibleDelviery = date('H:i',strtotime("+4 hours"));
		$possibleDelviery   =   strtotime($possibleDelviery);
		
		$time = array('07am-09am','09am-11am','11am-01pm','01pm-03pm','03pm-05pm','05pm-07pm','07pm-09pm','09pm-11pm');
		//$date="13-2-2016";
		$periodLength=count($time);
		$disabledLength=0;
		
		$data=array();
		$count=0;
		$datacount=0;
		foreach( $time as $row)
		{
			
		$sql= "SELECT * FROM placeorder WHERE pick_up_time = '$row' AND pick_up_date='$date'";
		$result=$this->db->query($sql)->result_array();
		$count=count($result);
		if($count>4){
		array_push($data,array("name" =>$row ,"disable" => "true"));
		$disabledLength++;
		}
		
		else
		{
			if($date==$mydate)
			{
				$timeSplit=explode("-",$row);
	
				$given   =   strtotime($timeSplit[1]);
				if($given >= $possibleDelviery)
				{
					$nextday = date("d-m-Y", strtotime('+4 hours'));
					$currentday=date('d-m-Y');

					if($nextday!=$currentday){
						array_push($data,array("name" =>$row ,"disable" => "true"));
						$disabledLength++;
					}else{
						array_push($data,array("name" =>$row ,"disable" => "false"));

					}
				}
				else
				{
					array_push($data,array("name" =>$row ,"disable" => "true"));
					$disabledLength++;
				}
			}
			else{
				//date_default_timezone_set('Asia/Kolkata');
				//$FNrAN = date("a");
				//$time = date("ga");
				//$timeSplit=explode("-",$row);
				//preg_match_all('!\d+!', $timeSplit[0], $matches);
				//preg_match_all('!\d+!', $timeSplit[1], $matches1);
				//if (count($time)==1) {$time="0".$time;}
				//if($time == $matches[0][0].substr($timeSplit[0],2)  || $time == ++$matches[0][0] . substr($timeSplit[1],2)){
				//	$datacount=1;
				//}
				//if($datacount != 1){
				//	array_push($data,array("name" =>$row ,"disable" => "true"));
				//}else{
					array_push($data,array("name" =>$row ,"disable" => "false"));
				//}
				
			}
		}
		
		}
		//exit;
		$nowTime=date('H:i',strtotime("now"));
		$limitTime=date('H:i',strtotime("10:00"));
		$nowTime   =   strtotime($nowTime);
		$limitTime =   strtotime($limitTime);

		if($periodLength==$disabledLength)
		{
			$shift="yes";
		}
		else{
			$shift="no";
		}
		
		return array(
			     "data"=>$data,
			     "shift"=>$shift
			    );
	}
	function deliveryTiming($date){
		
		$time=array('07am-09am','09am-11am','11am-01pm','01pm-03pm','03pm -05pm','05pm -07pm','07pm-09pm','09pm-11pm');
		$data=array();
		$count=0;
		foreach( $time as $row)
		{
			
		$sql= "SELECT * FROM placeorder WHERE delivery_time = '$row' AND delivery_date='$date'";
		$result=$this->db->query($sql)->result_array();
		$count=count($result);
		if($count>3){
		array_push($data,array("name" =>$row ,"disable" => "true"));

		}
		else{
		array_push($data,array("name" =>$row ,"disable" => "false"));

		}
		
		}
		return $data;
	}
       function forgotpassword(){
	$data = json_decode(file_get_contents('php://input'), true);
	$sendEmail=$data['sendEmail'];
	$select= "SELECT * FROM user WHERE email = '$sendEmail'";
	return $this->db->query($select)->result_array();
       }
       function password_token($id,$email){
		$num0 = (rand(10,100));
		$num1 = date("Ymd");
		$num2 = time();
		$randnum = $id .$num0 . $num1 . $num2;
		//$message='<html>
		//  <head>
		//    <title>Wash Box</title>
		//  </head>
		//  <body>
		//  <a href="http://localhost/washbox/WashBox/changepassword/'.$randnum.'">http://localhost/washbox/WashBox/changepassword/'.$randnum.'</a>
		//  </body>
		//  </html>
		//';
		if($randnum!=""){
		 //EMAIL CONCEPT
		$data["randnum"]=$randnum;
		$config = array(
		 'protocol' => 'smtp',
		 'smtp_host' => 'ssl://smtp.googlemail.com',
		 'smtp_port' => 465,
		 'smtp_user' => 'priyadharshin3091@gmail.com',
		 'smtp_pass' => 'priya2294', 
		 'mailtype' => 'html',
		 'charset' => 'iso-8859-1',
		 'wordwrap' => TRUE
		 );
		 $this->load->library('Email',$config);
		 $this->email->set_newline("\r\n");
		 $this->email->from('priyadharshin3091@gmail.com'); // change it to yours
		 $this->email->to($email);// change it to yours
		 $this->email->subject('Welcome To washBox');
		 $body = $this->load->view('forgotpasswordTemplate',$data,TRUE);
		 $this->email->message($body);
		 $this->email->send();
		 //insert password token to db
		  $sql1="UPDATE user SET password_token='$randnum' WHERE id='$id'";
		  return $this->db->query($sql1, $return_object = TRUE);
		}
       }
       function changepassword($id){
		$select= "SELECT * FROM user WHERE password_token = '$id'";
		return $this->db->query($select)->result_array();
       }
       function passwordwaschanged($id){
		$password=$_POST['New_Password'];
		$sql1="UPDATE user SET password='$password' WHERE password_token='$id'";
		return $this->db->query($sql1, $return_object = TRUE);
       }
       function nullpasswordtoken($id){
		$sql1="UPDATE user SET password_token='Null' WHERE password_token='$id'";
		return $this->db->query($sql1, $return_object = TRUE);
       }
       function contactform(){
	$data = json_decode(file_get_contents('php://input'), true);
	$config = array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'priyadharshin3091@gmail.com',
		'smtp_pass' => 'priya2294', 
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
		);
		$this->load->library('Email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from('priyadharshin3091@gmail.com'); // change it to yours
		$this->email->to($data["email"]);// change it to yours
		$this->email->subject('Welcome To washBox');
		$body = $this->load->view('Contactfromtemplete.php',$data,TRUE);
		$this->email->message($body);
		$this->email->send();
		  //echo 'success';
  
		//$res=success;
		//
		//$res=if("gokul88nath@gmail.com");
		//
       }
       function getpricetable()
	{
		$query = $this->db->get('price');
		return $query->result_array();
	    
	}
	function getbannertable()
	{
		$query = $this->db->get('banner');
		return $query->result_array();
	}
       
       function getfaqtable()
	{
		$query = $this->db->get('faq_title');
		return $query->result_array();
	}
	function getfaqlist($id)
	{
	   $sql="SELECT * from faq_subtitle WHERE title_id='$id'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
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
		//echo"success";
	}
       
}