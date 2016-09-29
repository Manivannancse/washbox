<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class WashBox extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("Wash_Model");
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->library('tank_auth');
		        $this->lang->load('tank_auth');
		}
		function headerWithData(){
			$data['session']=$this->session->userdata("user",$result);
			$data["data"]=$this->Wash_Model->gettable();
			$data["mycoupon"]=$this->Wash_Model->coupon();
                        $data["row"]=$this->Wash_Model->getbannertable();
                        $this->load->view('header',$data);
		}
		public function index()
		{
			$this->headerWithData();
			$data['text']=$this->Wash_Model->getbannertable();
			
			$data['result']=$this->Wash_Model->getpricetable();
			$this->load->view('index',$data);
			$this->load->view('footer');
		}

		function howItsWork()
		{
			$this->headerWithData();
			$this->load->view('howItsWork');
			$this->load->view('footer');
		}
		function pricing()
		{
			$this->headerWithData();
			$data['result']=$this->Wash_Model->getCategoryTable();

			$this->load->view('pricing',$data);
			$this->load->view('footer');
		}
		function getItemTable()
		{
			$tabValues=$_POST["tabValues"];
			$ItemData["myWindowSize"]=$_POST["myWindowSize"];
			$ItemData['result']=$this->Wash_Model->getItemTable($tabValues);
			$this->load->view('pricingTable',$ItemData);						
		}
		
		public function getUserData() 
		{
			$session=$this->session->userdata("user");
			$Userdata=$this->Wash_Model->getUserData($session['id']);
			$UserAddressdata=$this->Wash_Model->getAddress($session['id']);
			$data=array("data"=>$Userdata ,"address"=>$UserAddressdata );
			echo json_encode($data);	
		}
		
		public function washBoxOrder()
		{
			$this->headerWithData();
			$this->load->view('washBoxOrderpage',$result);
			$this->load->view('footer');		
		}
		public function myorder()
		{
			$this->headerWithData();
			$this->load->view('washBoxOrderdetails');
			$this->load->view('footer');
		}
		public function myProfile()
		{
		   $ses=$this->session->userdata("user");
		   $result['data']=$this->Wash_Model->getUserData($ses['id']);
		   $this->headerWithData();
		   $this->load->view('profile',$result);
		   $this->load->view('footer');
		}
		public function orderdetails()
		{
			$sessonUser=$this->session->userdata("user");
			$result["where"]=$sessonUser["id"];
			$result["order_id"]=$sessonUser["id"];
			$this->load->view('Orderpage',$result);
		}
	
		function registerUser()
		{
			$result=$this->Wash_Model->registerUser();
			if(count($result)>0)
			{
				$session=$this->session->set_userdata("user",$result);
				$data=array( "message"=>"yes", "data" =>$result);
			}
			else
			{
				$data=array( "message"=>"no");
			}
			echo json_encode($data);
		}
		function smsResend()
		{
			$result=$this->Wash_Model->smsResend();
			echo json_encode($result);
		}
		function smsVerification()
		{
			$result=$this->Wash_Model->smsVerification();
			echo json_encode($result);
		}
		function login()
		{       redirect('WashControl/view');
			
		}
		function loginUser()
		{	
			$result=$this->Wash_Model->loginUser();
			if($result["message"]=="ADMIN"){
			$data=array("message"=>"ADMIN");
			$sessionData= array(
				'email' =>$result['userDetails'][0]['email'],
				 'password' => $result['userDetails'][0]['password'],
			       );
				$this->session->set_userdata('sessionData',$sessionData);
				echo json_encode($result);
			}
			elseif($result["message"]=="yes"){
				
				$session=$this->session->set_userdata("user",$result["data"]);
				$session=$this->session->set_userdata("user_id",$result["address"]);
				$data=array("message"=>"yes", "data" => $result["data"],"address" => $result["address"]);
				echo json_encode($data);
			}
			else
			{
				$data=array("message"=>"no");
				echo json_encode($data);
			}
			
		}
		function userAddress()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->userAddress($userId['id']);
			if(count($result)>0)
			{
				echo json_encode($result);
			}
		}		
		function addressDelete()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->addressDelete($userId['id']);
			echo json_encode($result);
		}
	        function userAddressUpdate()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->userAddressUpdate($userId['id']);
			if(count($result)>0)
			{
				echo json_encode($result);
			}
		}
		
		function profileUpdate()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->profileUpdate($userId['id']);
			echo json_encode($result);
		}
		function getSpecificAddress()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->getSpecificAddress($userId['id']);
			echo json_encode($result);
		}
	        function getAddressLoad()
		{
			$userId = $this->input->post('sessionUser');
			$result=$this->Wash_Model->getAddress($userId);
			echo json_encode($result);
		}
		function placeOrder()
		{
			$data = json_decode(file_get_contents('php://input'), true);

			$userId = $this->session->userdata('user');
			$result["row"]=$this->Wash_Model->placeOrder($userId['id']);
			$result["r"]=$this->Wash_Model->getAddress($data['address']);
			$email=$userId["email"];
			$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'priyadharshin3091@gmail.com',
			'smtp_pass' => 'priya2294', 
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			);
			$this->email->initialize($config);
			$this->load->library('email',$config);
			 
			$this->email->set_newline("\r\n");
			$this->email->from('priyadharshin3091@gmail.com'); // change it to yours
			$this->email->to($email);// change it to yours
			$this->email->subject('Your WashBox order is Confirmed');
			$body = $this->load->view('emailOrderTemplate.php',$result,TRUE);
			$this->email->message($body);   
			$this->email->send();
			echo json_encode( $result["row"]);
			
		
		}
		function finalOrder($id){
			$result["data"]=$this->Wash_Model->getOrder($id);
			$this->headerWithData();
			$this->load->view('order',$result);
			$this->load->view('footer');

		}
		function userLogOut()
		{
			$this->session->sess_destroy();
			$array_items = array('username' => '', 'email' => '');
			$this->session->unset_userdata($array_items);
			echo $session=$this->session->userdata("user");
			redirect(base_url('WashBox/washBoxOrder'));
		}


		public function logout()
		{
			session_destroy();
			redirect(base_url('WashBox'));
		}
		
		public function businessServices()
		{
			$this->headerWithData();
			$this->load->view('businessServices');
			$this->load->view('footer');
		}
		public function dryclean()
		{
			$this->headerWithData();
			$this->load->view('dryclean');
			$this->load->view('footer');
		}
		public function corporate()
		{
			$this->headerWithData();
			$this->load->view('corporate');
			$this->load->view('footer');
		}
		public function residential()
		{
			$this->headerWithData();
			$this->load->view('residential');
			$this->load->view('footer');
		}
		public function airbnb()
		{
			$this->headerWithData();
			$this->load->view('airbnb');
			$this->load->view('footer');
		}
		public function businessServicesubmit()
		{
			$this->Wash_Model->businessServicesubmit();
		}
		public function aboutus()
		{
			$this->headerWithData();
			$this->load->view('aboutus');
			$this->load->view('footer');
		}
		function faq()
		{
			$data['faq']=$this->Wash_Model->getfaqtable();
			$this->headerWithData();
			$this->load->view('faq',$data);
			$this->load->view('footer');
		}
		function quality_guarantee()
		{
			$this->headerWithData();
			$this->load->view('quality_guarantee');
			$this->load->view('footer');
		}
		//function qualityguarantee()
		//{
		//	$this->Wash_Model->qualityguarantee();
		//	redirect('WashBox/quality_guarantee');
		//}
		function termsconditions()
		{
			$this->headerWithData();
			$this->load->view('termsconditions');
	                $this->load->view('footer');
		}
		function placeForm(){
			$this->Wash_Model->placeForm(); 
		}
		function checkorder(){
			$result=$this->Wash_Model->checkorder();
			echo json_encode($result);
		}
		function cancelAnOrder($id){
			$this->Wash_Model->cancelAnOrder($id);
			redirect(base_url('WashBox/washBoxOrder'));
		}
		function pickTiming(){
			$data = json_decode(file_get_contents('php://input'), true);
			$result=$this->Wash_Model->pickTiming($data['date']);
			echo json_encode($result);
		}
		function deliveryTiming(){
			$data = json_decode(file_get_contents('php://input'), true);
			$result=$this->Wash_Model->deliveryTiming($data['date']);
			echo json_encode($result);
		}
		function forgotpassword(){
			$result=$this->Wash_Model->forgotpassword();
			//print_r($result[0]['id']);exit;
			if($result!=""){
				$result['password_token']=$this->Wash_Model->password_token($result[0]['id'],$result[0]['email']);	
			}else{
				redirect(base_url('WashBox/washBoxOrder'));
			}
			
		}
		function changepassword($id){
		$result['result']=$this->Wash_Model->changepassword($id);
		$count=count($result['result']);
		if($count>0){
		$result['expired']="No";
		}else{
		$result['expired']="Yes";
		}
		$this->headerWithData();
		$this->load->view('paswordchange',$result);
		$this->load->view('footer');
		}
		function passwordwaschanged($id){
			$result['result']=$this->Wash_Model->passwordwaschanged($id);
			if($result!=""){
				$result=$this->Wash_Model->nullpasswordtoken($id);
			}
			redirect(base_url('WashBox/washBoxOrder'));
		}
		function contactus(){
			$this->Wash_Model->contactform();
			
			
		}
		
	
    
    
    
    
   
}

