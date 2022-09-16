<?php


	require_once("config.php");

	function connect(){
		global $dbLink;
		$dbLink = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die(mysqli_connect_error());
		query("SET NAMES 'UTF8'");
		mysqli_select_db($dbLink,DB_NAME) or die(getMysqlError());

	}



	function getMysqlError(){
		global $dbLink;
		return mysqli_error($dbLink);
	}

	function query($q){
		global $dbLink;
		$result = mysqli_query($dbLink,$q);
		if(stristr($q,"insert"))
			return mysqli_insert_id($dbLink);
		else if(stristr($q,"update") || stristr($q,"delete"))
			return mysqli_affected_rows($dbLink);
		else{
			return mysqli_fetch_assoc($result);
		}
	}


	function post($key){
		return $_POST[$key];
	}

	function safeString($str){
		return htmlentities($str,ENT_QUOTES,"UTF-8");
	}

	function checkUsername($username){
		$q = "SELECT * FROM `users` WHERE username='$username'";
		$r =  query($q);
		return $r;
	}

	function checkPhone($phone){
		$q = "SELECT * FROM `users` WHERE phone='$phone'";
		$r = query($q);
		return $r;
	}

	function redirect($url){
		header("Location:$url");
		die;
	}

	function get($key){
		return $_GET[$key];
	}

	function setError($key,$msg){
		if($_GET['err'] == $key){
			$html = '                    <div id="msg_box" class="alert alert-danger" style=";text-align:center;margin-top:10px;">
                        '.$msg.'
                    </div>';
            print $html;
		}
	}

	function setSuccess($key,$msg){
		if($_GET['ok'] == $key){
			$html = '                    <div id="msg_box" class="alert alert-success" style=";text-align:center;margin-top:10px;">
                        '.$msg.'
                    </div>';
            print $html;
		}
	}

	function login($username,$password){
		$pass = md5($password);
		$q = "SELECT * FROM `users` WHERE username='$username' AND password = '$pass'";
		$r = query($q);
		if($r["id"] > 999){
			$_SESSION['user_id'] = $r["id"];
			redirect("profile.php");
		}else{
			redirect("login.php?err=err1");
		}
	}

	function getProfile($user_id){
		$q = "SELECT * FROM `users` WHERE id='$user_id'";
		$r = query($q);
		return $r;
	}

	function disConnect(){
		global $dbLink;
		mysqli_close($dbLink);
	}

	function isLogin(){
		if(isset($_SESSION['user_id'])){
			return true;
		}else{
			return false;
		}
	}

	function uploadFile(){
		$file = $_FILES['user_file'];
		$error = $file["error"];
		if($error == 0){
			$fileName = $file["name"];
			$passwand = end(explode(".", $fileName));
			if($passwand === "jpg" || $passwand === "png" || $passwand === "jpeg"){
				$fileName = explode(".",$fileName)[0];
				$nameFile2 = "$fileName"."xolipoliklw"."."."$passwand";
				move_uploaded_file($_FILES['user_file']['tmp_name'], "images/".$nameFile2);
				return $nameFile2;
			}else{
				redirect("editProfile.php?err=err12");
			}
		}else{
			redirect("editProfile.php?err=err11");
		}
	}

	function deleteAccount(){
		$id = $_SESSION['user_id'];
		$avatar = getProfile($id);
		$avatar = $avatar['avatar'];
		$r = query("DELETE FROM `users` WHERE id='$id'");
		if($avatar !== "")
			unlink("images/".$avatar);
		return $r;
	}

	function editProfile($user_id){
		$user = getProfile($user_id);
		$name = safeString(trim($_POST['name']));
		$username = safeString(mb_strtolower(trim($_POST['username'])));
		$phone = safeString(trim($_POST['phone']));
		$id = $user["id"];
		$q = "UPDATE `users` SET ";
		if(empty($name)){
			redirect("editProfile.php?err=err1");
		}else if(empty($username)){
			redirect("editProfile.php?err=err2");
		}else if(empty($phone)){
			redirect("editProfile.php?err=err3");
		}else{
			if(($user['name'] !== $name) || ($user['username'] !== $username) || ($user["phone"] !== $phone)){
				$q .= " name='$name'";
				if($user['username'] !== $username || ($user["phone"] !== $phone)){
					$q .= ",username='$username'";
					if($user["phone"] !== $phone){
						$q .= ",phone='$phone'";
					}
				}
			}else{
				redirect("editProfile.php?err=err5");
			}
			$q .= " WHERE id='$id'";
			$r = query($q);
			if($r > 0){
				redirect("editProfile.php?ok=success");
			}
			else{
				redirect("editProfile.php?err=err4");
			}
		}
	}
	function updatePassword($user_id){
		$user = getProfile($user_id);
		$newPassword = $_POST['newPassword'];
		$cNewPassword = $_POST['cNewPassword'];
		$password = $user["password"];
		$id = $user["id"];
		if($newPassword === ""){
			redirect("editProfile.php?err=err6");
		}else if($cNewPassword === ""){
			redirect("editProfile.php?err=err7");
		}else if($newPassword !== $cNewPassword){
			redirect("editProfile.php?err=err8");
		}else{
			$pass = md5($cNewPassword);
			if($pass !== $user["password"]){
				$q = "UPDATE `users` SET password='$pass' WHERE id='$id'";
				$r = query($q);
				if($r > 0){
					redirect("editProfile.php?ok=success");
				}else{
					redirect("editProfile.php?err=err4");
				}
			}
			else{
				redirect("editProfile.php?err=err9");
			}
		}
	}

	function updateAvatar($user_id)
	{
		$user = getProfile($user_id);
		$id = $user["id"];
		$avatar = $user["avatar"];
		$result = uploadFile();
		if($user['avatar'] !== $result){
			$q = "UPDATE `users` SET avatar='$result' WHERE id='$id'";
			$r = query($q);
			if($r>0){
				unlink("images/".$user["avatar"]);
				redirect("editProfile.php?ok=success");
			}else{
				redirect("editProfile.php?err=err4");
			}
		}else{
			redirect("editProfile.php?err=err10");
		}
	}

?>