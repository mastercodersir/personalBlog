<?php

	require_once("helper.php");

	connect();

	$username = safeString(mb_strtolower(trim($_POST['username'])));
	$password = safeString(trim($_POST['password']));
	if($username === ""){
		redirect("login.php?err=err2");
	}else if($password === ""){
		redirect("login.php?err=err3");
	}else{
		login($username,$password);
	}

	disConnect();

?>