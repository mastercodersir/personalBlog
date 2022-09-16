<?php
	require_once "helper.php";

	connect();

	if(isLogin()){
		$r = deleteAccount();
		if($r != 0){
			session_unset();
			redirect("login.php?ok=delete");
		}else{
			redirect("profile.php");
		}
		
	}else{
		redirect("login.php?err=err4");
	}

	disConnect();

?>