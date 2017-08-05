<?php
	if(!isset($_GET['account'])){
		$return = array('result' => -1);
		echo json_encode($return);
		return;
	
	}
	
	
	$account = $_GET['account'];
	$conn = mysqli_connect('127.0.0.1','root','root','brad');
	if(mysqli_connect_error()){
		$return = array('result' => -2);
		echo json_encode($return);
		return;
	
	}
	$sql = "select * from member where account='{$account}'";
	$rs = mysqli_query($conn,$sql);
	if(mysqli_num_rows($rs)>0){
		// account existed
		$return = array('result' => 1);
		echo json_encode($return);
		return;
		
	}else{
		//new account
		$return = array('result' => 0);
		echo json_encode($return);
		return;
		
	
	
	}
	
	
	
?>