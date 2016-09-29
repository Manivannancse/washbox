<?php
	//include connection file 
	$servername = "localhost";
	$username = "thewashb_admin";
	$password = "admin123";
	$dbname = "thewashb_database";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'pick_up_date',
		1 =>'pick_up_time', 
		2 =>'delivery_date',
		3 =>'delivery_time',
		4 =>'delivery_notes',
		5 =>'clean_type'
	);

	$where = $sqlTot = $sqlRec = "";

	// check search value exist
	if( !empty($params['search']['value']) ) {   
		$where .=" AND ";
		$where .=" ( pick_up_date LIKE '".$params['search']['value']."%' ";    
		$where .=" OR pick_up_time LIKE '".$params['search']['value']."%' ";
		$where .=" OR delivery_date LIKE '".$params['search']['value']."%' ";
		$where .=" OR delivery_time LIKE '".$params['search']['value']."%' ";
		$where .=" OR delivery_notes LIKE '".$params['search']['value']."%' ";
		$where .=" OR clean_type LIKE '".$params['search']['value']."%' )";
	}

	// getting total number records without any search
	$sql = "SELECT pick_up_date,pick_up_time,delivery_date,delivery_time,delivery_notes,clean_type FROM `placeorder` where user_id='$order_id'";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	//concatenate search sql if value exist
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}


 	$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch order data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
?>
	