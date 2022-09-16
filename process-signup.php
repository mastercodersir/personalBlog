<?php

	require_once("helper.php");

	connect();

	if(isset($_POST['btnSignUp'])){
		$name = safeString(trim(post('name')));
		$username = safeString(mb_strtolower(trim(post('username'))));
		$password = safeString(trim(post('password')));
		$confirm_password = safeString(trim(post("password_confirmation")));
		$phone = safeString(trim(post('phone')));
		$date = date("Y-m-d");
		$time = date("H:i:s");
		$file = $_FILES['user_file'];
		if($file['name'] !== ""){
			$file_name = safeString(uploadFile());
		}else{
			$file_name = "";
		}


		if(empty($name)){
			redirect("sign-up.php?err=err1");
		}else if(empty($username)){
			redirect("sign-up.php?err=err2");
		}else if(empty($password)){
			redirect("sign-up.php?err=err3");
		}
		else if(empty($confirm_password)){
			redirect("sign-up.php?err=err4");
		}
		else if(empty($phone)){
			redirect("sign-up.php?err=err5");
		}else if(preg_match("/[^A-Za-z-0-9]/", $username)){
			redirect("sign-up.php?err=err13");
		}
		else if(strlen($password) < 6){
			redirect("sign-up.php?err=err6");
		}else if($password != $confirm_password){
			redirect("sign-up.php?err=err7");
		}else if(strlen($phone) < 10){
			redirect("sign-up.php?err=err8");
		}
		else{
			$r = checkUsername($username);
			$r2 = checkPhone($phone);
			$pid = $r2["id"];
			$uid = $r["id"];
			if($uid > 999){
				redirect("sign-up.php?err=err9");
			}
			else if($pid > 999){
				redirect("sign-up.php?err=err10");
			}
			else{
			$pass = md5($confirm_password);
			$q = "INSERT INTO `users` VALUES ('NULL','$name','$username','$phone','$file_name','$pass','$date','$time')";

			$result = query($q);

			if($result > 999){
				redirect("login.php?ok=success");
			}else{
				redirect("sign-up.php?err=err1");
			}
		}

		}
	}


	disConnect();

?>