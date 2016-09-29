<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WashControl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model("admin/wash_model");
		$this->load->helper('barcode');
		
	}
	public function index()
	{
	  $session=$this->session->userdata('sessionData');
	  
	    if($session)
	    {
		redirect('WashControl/view');
	    }else{
		$this->load->view('WashBox/index');
	    }
	}
	public function user_login()
	{
	    //if(isset($_POST['submit']))
	    //{
		//$data = array(
		//    'email' => $this->input->post('email'),
		//    'password' => $this->input->post('password')
		//);
		//$result = $this->wash_model->checkUser($data);
		//$this->session->set_userdata('sessionData',$result);
		//$session=$this->session->userdata('sessionData');
		//print_r($session);
		//exit;
		//redirect('WashControl/view');
	//    }
	//    else{
	//	redirect('WashControl/view');
	//    }
	}
	public function view()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$this->load->view('admin/header');
		$result["customers"]= $this->wash_model->customers();
		$this->load->view('admin/customers',$result);
	    }
	    else{
		redirect('WashControl/view');
	    }
	}
	
	function customers()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["customers"]= $this->wash_model->customers();
		$this->load->view('admin/header');
		$this->load->view('admin/customers',$result);
	    }
	  else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function adminUsers()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$this->load->view('admin/header');
		$this->load->view('admin/admin');
	    }
	  else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function Location($type)
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$data['type']=$type;
		$this->load->view('admin/header');
		$this->load->view('admin/Location',$data);
	    }  else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function placedOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->placedOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/placeOrder',$result);
	    }  else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function pickUpOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->pickUpOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/pickUpOrder',$result);
	    }  else{
		redirect('WashControl/washBoxOrder');
	    }
	}

	function testingOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->testingOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/testingOrder',$result);
	     }  else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function billingOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["data"]= $this->wash_model->billingOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/billingOrder',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
		
	}
	function generateBarcode($id)
	{
		$data["data"]= $this->wash_model->getBill($id);
		$data["categories"]=$this->wash_model->getCategory();
		$data["order"]=$this->wash_model->getOrders($id);
		$data["customer"]=$this->wash_model->getCustomer($data["order"][0]['user_id']);
		$data["address"]=$this->wash_model->getUserAddress($data["customer"][0]['id']);
		$data["admin"]=$this->wash_model->getAdmin();
		$this->load->view('admin/header');
		$this->load->view('admin/generateBarcode',$data);
		
	}
	function testingAnOrder($id)
	{
		$this->load->view('admin/header');
		$data["categories"]=$this->wash_model->getCategory();
		$data["order"]=$this->wash_model->getOrders($id);
		$data["customer"]=$this->wash_model->getCustomer($data["order"][0]['user_id']);
		$data["address"]=$this->wash_model->getUserAddress($data["customer"][0]['id']);
		$data["admin"]=$this->wash_model->getAdmin();
		$this->load->view('admin/testingAnOrder',$data);
	}
	function getItemData()
	{
		$id = $this->input->post('Category');
		$result["item"]=$this->wash_model->getItems($id);
		$this->load->view('admin/getItemData',$result);

	}
	function getService()
	{
		$id = $this->input->post('item');
		$result["item"]=$this->wash_model->getItemSingle($id);
		$this->load->view('admin/getService',$result);

	}
	function moveToWash($id)
	{
		$this->wash_model->moveToWash($id);
		redirect('WashControl/washInProgressOrder');
	}
	function washInProgressOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {	
		$result["order"]= $this->wash_model->washInProgressOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/washInProgressOrder',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function washCompletedOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {	
		$result["order"]= $this->wash_model->washCompletedOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/washCompletedOrder',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}

	function pressFoldOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->pressFoldOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/pressFoldOrder',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function deliveryOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->deliveryOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/deliveryOrder',$result);
	     } else{
		redirect('WashControl/washBoxOrder');
	    }
	}

	function processedOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->processedOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/processedOrder',$result);
		$this->load->view('admin/deliveryOrder',$result);
	     } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function customerPendingOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->customerPendingOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/customerPendingOrder',$result);
	     } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function closedOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->closedOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/closedOrder',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function cancelledOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["order"]= $this->wash_model->cancelledOrder();
		$this->load->view('admin/header');
		$this->load->view('admin/cancelledOrder',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	
	function selectOrder()
	{
		$id=$_POST["id"];
		$data["order"]=$this->wash_model->getOrders($id);
		$data["customer"]=$this->wash_model->getCustomer($data["order"][0]['user_id']);
		$data["address"]=$this->wash_model->getUserAddress($data["customer"][0]['id']);
		$data["admin"]=$this->wash_model->getAdmin();
		//$data["admin"]=$this->wash_model->getcoupon();
		//print_r($data["admin"]);exit;
		$this->load->view('admin/selectOrder',$data);
	}
	function updateOrderStatus(){
		$this->wash_model->updateOrderStatus();
	}
	function add()
	{
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		$active_yn=$request->active_yn;
		$location = $request->location;
		$id = $this->wash_model->AddLocation($location,$active_yn);
		
		if($id)
		{
		   echo $result = '{"status" : "'.$location.'"}';
		}else{
		   echo $result = '{"status" : "failure"}';
		}
	}
	function get_list($type) {
		//$this->load->model(array('wash_model'));
		$data= $this->wash_model->getAll($type);
		echo json_encode($data);
	}
	function del_location()
	{
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		$location = $request->location;
		$data = $this->wash_model->del_locat($location);
	}
	function edit_location(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		$location = $request->location;
		$data = $this->wash_model->edit_location($location);
		echo json_encode($data);
	}
	function Update_location(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		$id = $request->id;
		$location = $request->location;
		$active_yn = $request->active_yn;
		$data = $this->wash_model->Update_location($id,$active_yn,$location);
		echo json_encode($data);
	}
	function order()
	{
		$result['tableDetails']=$this->wash_model->getTableDetails();
		$this->load->view('admin/header');
		$this->load->view('admin/order',$result);
	}
	function getAdmin()
	{
		$result["admin"]=$this->wash_model->getAdmin();
		$this->load->view('admin/getadmin',$result);
	
	}

	function getAdminUser($id)
	{
		$result=$this->wash_model->getAdminUser($id);
		echo json_encode($result);
	}
	function adminUser(){
		$this->wash_model->adminUser();
	}
	function datatables(){
		$this->load->view('admin/datatables');
	}
	function editUser()
	{
		$id = $this->input->post('id');
		$result=$this->wash_model->getUsers($id);
		echo json_encode($result);
	}
	
	function update()
	{
		$this->wash_model->update();

	}
	function delete()
	{
		$this->wash_model->delete();
	}
	function getCategory()
	{
		$result["category"]=$this->wash_model->getCategory();
		$this->load->view('admin/getCategory',$result);
	
	}
	function addCategory(){
		$this->wash_model->addCategory();
	}
	function editCategory()
	{
		$id = $this->input->post('id');
		$result=$this->wash_model->getCategorySingle($id);
		echo json_encode($result);
	}
	function updateCategory()
	{
		$this->wash_model->updateCategory();

	}
	function deleteCategory()
	{
		$this->wash_model->deleteCategory();
	}
	function category()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$this->load->view('admin/header');
		$this->load->view('admin/category');
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function getItem()
	{
		$result["item"]=$this->wash_model->getItem();
		$this->load->view('admin/getItem',$result);
	
	}
	function addItem(){
		$this->wash_model->addItem();
	}
	function editItem()
	{
		$id = $this->input->post('id');
		$result=$this->wash_model->getItemSingle($id);
		echo json_encode($result);
	}
	function updateItem()
	{
		$this->wash_model->updateItem();

	}
	function deleteItem()
	{
		$this->wash_model->deleteItem();
	}
	function item()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["categories"]=$this->wash_model->getCategory();
		$this->load->view('admin/header');
		$this->load->view('admin/item',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	
	}
	function partners(){
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$result["partners"]=$this->wash_model->getPartners();
		$this->load->view('admin/header');
		$this->load->view('admin/partners',$result);
	    } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function searchOrder()
	{
	$session=$this->session->userdata('sessionData');
	    if($session)
	    {
		$this->load->view('admin/header');
		$this->load->view('admin/searchOrder');
	   } else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function searchPlaceOrder()
	{
		$id=$_POST["id"];
		$data["data"]= $this->wash_model->getBill($id);
		$data["categories"]=$this->wash_model->getCategory();
		$data["order"]=$this->wash_model->getOrders($id);
		$data["customer"]=$this->wash_model->getCustomer($data["order"][0]['user_id']);
		$data["address"]=$this->wash_model->getUserAddress($data["customer"][0]['id']);
		$data["admin"]=$this->wash_model->getAdmin();
		$this->load->view('admin/searchOrderAjax',$data);
	}
	function addBilling()
	{
		$this->wash_model->addBilling();
	}
	function logout()
	{
	    $this->session->sess_destroy();
	    redirect('WashBox/washBoxOrder');
	}
	function getcoupon()
	{
		$result["admin"]=$this->wash_model->getcoupon();
		$this->load->view('admin/getcoupon',$result);
	
	}
	function couponadd(){
		$this->wash_model->couponadd();
	}
	function coupon()
	{
	$session=$this->session->userdata('sessionData');
	//print_r($session);exit;
	    if($session)
	    {
		$this->load->view('admin/header');
		$this->load->view('admin/coupon');
	    }
	  else{
		redirect('WashControl/washBoxOrder');
	    }
	}
	function editcoupon()
	{
		$id = $this->input->post('id');
		$result=$this->wash_model->getcoupons($id);
		echo json_encode($result);
	}
	function updatecoupon()
	{
		$this->wash_model->updatecoupon();

	}
	function deletecoupon()
	{
		$this->wash_model->deletecoupon();
	}
	
	
	
//////////////////////////////price Affrodable////////////////////

	function price()
          {
		
		$session=$this->session->userdata('sessionData');
		    if($session)
		    {
			$result["data"]=$this->wash_model->getpricelist();
			$this->load->view('admin/header');
			$this->load->view('admin/pricelist',$result);
		     } else{
			redirect('WashControl/washBoxOrder');
		     }
	
	  }
	function getpricelist($id)
		{
			$result=$this->wash_model->getpricelist($id);
			echo json_encode($result);
		}
		function getprice()
		{
			$data["result"]=$this->wash_model->getprice();
			//print_r($data["result"]);exit;
			$this->load->view('admin/getprice',$data);
		
		}
		function addprice(){
			$this->wash_model->addprice();
		}
			
			
		
		function editprice()
		{
			 $id = $this->input->post('id');
			
			$result=$this->wash_model->getpriceSingle($id);
			
			//print_r($result);exit;
			echo json_encode($result);
		}
		function updateprice()
		{
		
			$this->wash_model->updateprice();
	
		}
		function deleteprice()
		{
			$this->wash_model->deleteprice();
		}
		//////////////////////////////////////////////////price end///////////////////////////////////
		//////////////////////////////////////////////////FAQ//////////////////////////////////
		function Faq_View()
		{
		$session=$this->session->userdata('sessionData');
		    if($session)
		    {
			$this->load->view('admin/header');
			$this->load->view('admin/faqadd');
		    } else{
			redirect('WashControl/washBoxOrder');
		    }
		}
		//function getfaqlist()
		//{
		//	$result=$this->wash_model->getfaqlist();
		//	echo json_encode($result);
		//}
		function getfaq()
		{
			$data["result"]=$this->wash_model->getfaq();
			//print_r($data["result"]);exit;
			$this->load->view('admin/getfaq',$data);
		
		}
		function addfaq(){
			$this->wash_model->addfaq();
		}
		
		function editfaq()
		{
			 $id = $this->input->post('id');
			
			$result=$this->wash_model->getfaqSingle($id);
			
			//print_r($result);exit;
			echo json_encode($result);
		}
		function updatefaq()
		{
		
			$this->wash_model->updatefaq();
	
		}
		function deletefaq()
		{
			$this->wash_model->deletefaq();
		}
		////////////////////////////////////////////////////////////////faqend////////////////////////////////////////////
		////////////////////////////////////////////////////////////////NEWS/////////////////////////////////////////////
		
		function News_View()
		{
			$session=$this->session->userdata('sessionData');
		    if($session)
		    {
			$result["data"]=$this->wash_model->getnewlist();
			$this->load->view('admin/header');
			$this->load->view('admin/newadd',$result);
		    } else{
			redirect('WashControl/washBoxOrder');
		    }
		}
		function getnewlist($id)
		{
			$result=$this->wash_model->getnewlist($id);
			echo json_encode($result);
		}
		function getnew()
		{
			$data["result"]=$this->wash_model->getnew();
			//print_r($data["result"]);exit;
			$this->load->view('admin/getnew',$data);
		
		}
		function addnew(){
			$this->wash_model->addnew();
		}
			
			
		
		function editnew()
		{
			 $id = $this->input->post('id');
			
			$result=$this->wash_model->getnewSingle($id);
			
			//print_r($result);exit;
			echo json_encode($result);
		}
		function updatenew()
		{
		
			$this->wash_model->updatenew();
	
		}
		function deletenew()
		{
			$this->wash_model->deletenew();
		}
////////////////////////////////////////////////////////////////newend////////////////////////////////////////////
		////////////////////////////////////////////////////////////////BANNER/////////////////////////////////////////////
		function banner()
		{
			$session=$this->session->userdata('sessionData');
		    if($session)
		    {
			$result["data"]=$this->wash_model->getbannerlist();
			$this->load->view('admin/header');
			$this->load->view('admin/addbanner',$result);
		    } else{
			redirect('WashControl/washBoxOrder');
		    }
		}
		function getbannerlist($id)
		{
			$result=$this->wash_model->getbannerlist($id);
			echo json_encode($result);
		}
		function getbanner()
		{
			$data["result"]=$this->wash_model->getbanner();
			//print_r($data["result"]);exit;
			$this->load->view('admin/getbanner',$data);
		
		}
		function addbanner(){
			$this->wash_model->addbanner();
		}
			
			
		
		function editbanner()
		{
			 $id = $this->input->post('id');
			
			$result=$this->wash_model->getbannerSingle($id);
			
			//print_r($result);exit;
			echo json_encode($result);
		}
		function updatebanner()
		{
		
		$this->wash_model->updatebanner();
	
		}
		function deletebanner()
		{
			$this->wash_model->deletebanner();
		}
		////////////////////////////////////////////////////////////////TESTMONIAL/////////////////////////////////////////////
		function testmonial()
		{
			$session=$this->session->userdata('sessionData');
		    if($session)
		    {
			$result["data"]=$this->wash_model->gettestimonlist();
			$this->load->view('admin/header');
			$this->load->view('admin/Testimonialadd',$result);
		    } else{
			redirect('WashControl/washBoxOrder');
		    }
		}
		function gettestimonlist($id)
		{
			$result=$this->wash_model->gettestimonlist($id);
			echo json_encode($result);
		}
		function getTestimonial()
		{
			$data["result"]=$this->wash_model->getTestimonial();
			//print_r($data["result"]);exit;
			$this->load->view('admin/getTestimonial',$data);
		
		}
		function Testimonialadd(){
			$this->wash_model->Testimonialadd();
		}
			
			
		
		function editTestimonial()
		{
			 $id = $this->input->post('id');
			
			$result=$this->wash_model->getTestimonialSingle($id);
			
			//print_r($result);exit;
			echo json_encode($result);
		}
		function updateTestimonial()
		{
		
			$this->wash_model->updateTestimonial();
	
		}
		function deleteTestimonial()
		{
			$this->wash_model->deleteTestimonial();
		}
}
