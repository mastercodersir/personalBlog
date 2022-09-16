<?php
	require_once("helper.php");
	connect();
	$username = safeString(trim($_POST['username']));
	$phone = safeString(trim($_POST['phone']));

	$checkUser = checkUsername($username);
	$uid = $checkUser['id'];
	$checkPhone = checkPhone($phone);
	$pid = $checkPhone['id'];
	if($uid > 999){
		print "-1";
	}
	else if($pid > 999){
		print "-2";
	}
	else{
		print "1";
	}

	disConnect();

?>