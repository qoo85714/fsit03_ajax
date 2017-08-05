<?php
  $conn = mysqli_connect('127.0.0.1','root','root','brad');
  
  
    $account = $_GET['account'];
	$passwd = $_GET['passwd'];
	$realname = $_GET['realname'];
	$sql = "insert into member (account,passwd,realname)".
		   "values ('{$account}','{$passwd}','{$realname}')";
	mysqli_query($conn,$sql);
	if(!mysqli_error()){
		echo 'OK';
		return;
	
	}else{
		echo 'XX';
		return;
	}


?>