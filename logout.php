<?php

	require_once("helper.php");
	if(isLogin()){
		session_unset();
		session_destroy();
		redirect("login.php?ok=logout");
	}else{
		redirect("login.php?err=err4");
	}


?>